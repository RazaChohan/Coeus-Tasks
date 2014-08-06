<?php

echo count($argv) . PHP_EOL;

if (count($argv) < 2) {
    echo "Error: City Name Not Entered";
    return;
}

$city = $argv[1];

$result1 = file_get_contents("http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20geo.places%20where%20text%3D%22$city%22&format=xml");
$xml1 = simplexml_load_string($result1);
$woeid = $xml1->results->place->woeid;
$timezone = $xml1->results->place->timezone;
$country = $xml1->results->place->country;
$placeType = $xml1->results->place->placeTypeName;

echo $woeid . PHP_EOL;
echo $timezone . PHP_EOL;
echo $country . PHP_EOL;

if ($woeid != "") {
    $fetchData = file_get_contents("http://weather.yahooapis.com/forecastrss?w=$woeid&u=c");
    $xmlData = simplexml_load_string($fetchData);
    $location = $xmlData->channel->xpath('yweather:location');

    if (!empty($location)) {

        $unit = $xmlData->channel->xpath('yweather:units');
        $wind = $xmlData->channel->xpath('yweather:wind');
        $atmosphere = $xmlData->channel->xpath('yweather:atmosphere');
        $astronomy = $xmlData->channel->xpath('yweather:astronomy');
        
        foreach ($xmlData->channel->item as $data) {
            $current_condition = $data->xpath('yweather:condition');
            $forecast = $data->xpath('yweather:forecast');
            $current_condition = $current_condition[0];
            echo $location[0]['city'] . PHP_EOL;
            echo $location[0]['region'] . PHP_EOL;
            echo $current_condition['date'] . PHP_EOL;
            echo "Current Temprature" . PHP_EOL;
            echo $current_condition['temp'] . ' ' . "°C" . PHP_EOL;
            echo $current_condition['code'] . PHP_EOL;
            echo $current_condition['text'] . PHP_EOL;
            echo "Forecast" . PHP_EOL;
            echo $forecast[0]['day'].' '.$forecast[0]['date'].' ' . $forecast[0]['text'] . ' ' . "High:" . $forecast[0]['high'] . ' ' . "Low:" . $forecast[0]['low'] . PHP_EOL;
            echo $forecast[1]['day'] .' '.$forecast[1]['date']. ' ' . $forecast[1]['text'] . ' ' . "High:" . $forecast[1]['high'] . ' ' . "Low:" . $forecast[1]['low'] . PHP_EOL;
            echo "Units:" . ' ' . $unit[0]['temperature'] . ' ' . $unit[0]['pressure'] . ' ' . $unit[0]['distance'] . ' ' . $unit[0]['speed'].PHP_EOL;
            echo "Wind:". ' '.$wind[0]['chill'].' '.$wind[0]['direction'].' '.$wind[0]['speed'];
            echo "Atmosphere:". ' '.$atmosphere[0]['humidity'].' '.$atmosphere[0]['visibility'].' '.$atmosphere[0]['pressure'].' '.$atmosphere[0]['rising'];  
            echo "Astronomy:". ' '.$astronomy[0]['sunrise'].' '.$astronomy[0]['sunset'].' '.$astronomy[0]['pressure'].' '.$astronomy[0]['rising'];  

        }
    } else {
        echo "Please try a different City.";
    }
} else {
    echo "Please try a different City";
}



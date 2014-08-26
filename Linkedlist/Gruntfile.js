module.exports = function(grunt) {
    // Project configuration.
     grunt.initConfig({
        
phpmd: {
  application: {
      dir: 'tests'
    },
    options: {
      bin: 'vendor/bin/phpunit',
      rulesets: 'codesize'
    }
}
    });

    // Load required modules
      grunt.loadNpmTasks('grunt-phpmd');
      
    // Task definitions
    grunt.registerTask('default', ['phpmd']);
};

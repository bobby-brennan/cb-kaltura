'use strict';

module.exports = function (grunt) {
  // load all npm grunt tasks
  require('load-grunt-tasks')(grunt);
  console.log('load oven');
  grunt.loadNpmTasks('lucy-oven');
  console.log('loaded');
  // Project configuration.
  grunt.initConfig({
     jsonlint: {
       sample: {
         src: [ 'cookbook.json' ]
       }
     },
  });

  // By default, lint and run all tests.
  grunt.registerTask('default', ['jsonlint']);
};

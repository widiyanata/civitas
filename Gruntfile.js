module.exports = function(grunt) {

  // init config
  grunt.initConfig({

    // Concat the file
    // install grunt plugin via cmd -| grunt-contrib-concat
    concat: {
      js: {
        src: [
          'assets/js/bootsnav.js',
          'assets/js/navigation.js',
          'assets/js/main.js',
          'assets/js/plugins.js',
        ],
        dest: 'assets/js/scripts.js',
      },
    },

    // Watch the changes
    // Install plugin watch -| grunt-contrib-watch
    watch: {
      js: {
        files: ['js/*.js'],
        tasks: ['concat:js'],
      },
    },

    // Minify Script
    uglify: {
      my_target: {
        files: {
          'assets/js/scripts.min.js':
          [
            'assets/js/scripts.js',
          ]
        }
      }
    }

  });

  // Load the plugin

  // -| concat | cmd -> grunt concat
  grunt.loadNpmTasks('grunt-contrib-concat');
  // -| watch | cmd -> grunt watch
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.loadNpmTasks('grunt-contrib-uglify');

  // load the default / All
  grunt.registerTask('default', ['concat', 'watch']);


};

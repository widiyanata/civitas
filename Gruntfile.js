module.exports = function(grunt) {

  // init config
  grunt.initConfig({

    // Concat the file
    // install grunt plugin via cmd -| grunt-contrib-concat
    concat: {
      js: {
        src: [
          'assets/js/plugins.js',
          'assets/js/bootsnav.js',
          'assets/js/main.js',
        ],
        dest: 'assets/js/scripts.js',
      },
      css: {
        src: [
          'assets/css/bootstrap.min.css',
          'assets/css/font-awesome.min.css',
          'assets/css/plugin.css',
          'assets/css/shortcode.css',
          'assets/css/style.css',
        ],
        dest: 'assets/css/main.css',
      },
    },

    // Watch the changes
    // Install plugin watch -| grunt-contrib-watch
    watch: {
      js: {
        files: ['assets/js/*.js'],
        tasks: ['concat:js'],
      },
    },

    // Minify Script
    uglify: {
      my_target: {
        files: {
          'assets/css/main.min.css':
          [
            'assets/css/main.css',
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
  grunt.registerTask('default', ['concat','uglify', 'watch']);


};

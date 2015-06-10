module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    less: {
      dist: {
        files: {
          'public/assets/css/main.min.css': [
            'resources/assets/less/app.less'
          ]
        },
        options: {
          compress: false,
          // LESS source map
          // To enable, set sourceMap to true and update sourceMapRootpath based on your install
          sourceMap: true,
          sourceMapFilename: 'main.min.css.map',
          //sourceMapRootpath: '/'
        }
      }
    },
    uglify: {
      dist: {
        files: {
          'public/assets/js/app.min.js': [
            // 'application/assets/vendor/components/jquery/dist/jquery.js',
            //'resources/assets/js/jquery.js',
            'resources/assets/js/plugins.js',
            'resources/assets/js/canvas.slider.fade.js',
            'resources/assets/js/events-data.js',
            'resources/assets/js/jquery.calendario.js',
            'resources/assets/js/jquery.camera.js',
            'resources/assets/js/jquery.elastic.js',
            'resources/assets/js/jquery.gmap.js',
            'resources/assets/js/jquery.mousewheel.min.js',
            'resources/assets/js/jquery.nivo.js',
            'resources/assets/js/jquery.vmap.js',
            'resources/assets/js/functions.js',
            'resources/assets/js/app.js',
          ],
        },
        options: {
          // JS source map: to enable, uncomment the lines below and update sourceMappingURL based on your install
          sourceMap: 'public/assets/js/app.min.js.map'
        }
      }
    },
     watch: {
      less: {
        files: [
          'resources/assets/less/*.less'
        ],
        tasks: ['less']
      },
      js: {
        files: [
          'resources/assets/js/*.js'
        ],
        tasks: ['uglify']
      },
      /*livereload: {
        // Browser live reloading
        // https://github.com/gruntjs/grunt-contrib-watch#live-reloading
        options: {
          livereload: true
        },
        files: [
          'public/assets/css/main.min.css',
          'views/*.html',
          '*.html'
        ]
      }*/
    },
  });

  // Load the plugin that provides the "uglify" task.
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');


  // Default task(s).
  //grunt.registerTask('default', ['less', 'uglify','watch']);
  grunt.registerTask('default', ['less', 'uglify', 'watch']);

};

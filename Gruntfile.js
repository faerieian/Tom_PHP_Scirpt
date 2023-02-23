module.exports = function(grunt) {
    grunt.initConfig({
      postcss: {
        options: {
          processors: [
            require('tailwindcss'),
            require('autoprefixer'),
          ]
        },
        dist: {
          src: 'style.css',
          dest: 'output.css'
        }
      },
      watch: {
        css: {
          files: 'style.css',
          tasks: ['postcss']
        }
      }
    });
  
    grunt.loadNpmTasks('grunt-postcss');
    grunt.loadNpmTasks('grunt-contrib-watch');
  
    grunt.registerTask('default', ['postcss', 'watch']);
  };
  

  
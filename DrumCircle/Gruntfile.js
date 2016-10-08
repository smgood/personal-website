module.exports = function(grunt) {
	grunt.initConfig({
		pkg: grunt.file.readJSON('package.json'),
		concurrent: {
			dev: {
				tasks: ['watch'],
				options: {
					logConcurrentOutput: true
				}
			}
		},
		stylus: {
			compile: {
				options: {
					paths: ['public/stylesheets/'],
					urlfunc: 'embedurl', // use embedurl('test.png') in our code to trigger Data URI embedding
					use: [
						require('rupture'), // use stylus plugin at compile time
						require('jeet'), // use stylus plugin at compile time
						require('axis'), // use stylus plugin at compile time
						require('nib'), // use stylus plugin at compile time
						require('autoprefixer-stylus'), // use stylus plugin at compile time
					],
				},
				files: {
					'public/css/style.css': 'public/stylesheets/style.styl', // 1:1 compile
				}
			},
		},
		cssmin: {
            css: {
                options: {
                    keepSpecialComments: 0,
                },
                files: {
                    'public/css/index.min.css': [
                        'public/css/style.css',
                    ],
                }
            }
        },
        uglify: {
            js: {
                options: {
                    sourceMap: true,
                    mangle: false
                },
                files: {
                    'public/javascripts/index-lib.min.js' : [
                        'public/lib/*.min.js',
                    ]
                }
            }
        },
		watch: {

			stylusFile: {
				files: 'public/stylesheets/style.styl',
				tasks: [ 'default' ]
			},
			cssJadeJsFiles: {
				files: [
					'public/css/*.css',
					'*.html',
					'public/javascripts/*.js'
				],
				options: {
					livereload: true
				}
			},
            livereload: {
                options: { livereload: true },
                files: [
                    'public/css/*.css',
                    '*.html',
                    'public/javascripts/*.js'
                ]
            }
		}
	});

	grunt.loadNpmTasks('grunt-livereload');
	grunt.loadNpmTasks('grunt-concurrent');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
	grunt.loadNpmTasks('grunt-contrib-watch');
	grunt.loadNpmTasks('grunt-contrib-stylus');
	grunt.registerTask('default', [ 'stylus', 'cssmin']);
	grunt.registerTask('compile', [ 'stylus', 'cssmin', 'uglify']);

	grunt.event.on('watch', function(action, filepath) {
		grunt.config('stylus.compile.files', filepath);
	});
};

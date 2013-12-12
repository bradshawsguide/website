module.exports = function(grunt) {

    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),

        concat: {
            build: {
                src: [
                    '_src/scripts/libs/*.js',
                    '_src/scripts/scripts.js'
                ],
                dest: 'assets/scripts/scripts.js',
            }
        },

        uglify: {
            build: {
                src: 'assets/scripts/scripts.js',
                dest: 'assets/scripts/scripts.min.js'
            }
        },

        imagemin: {
            build: {
                files: [{
                    expand: true,
                    cwd: '_src/images/',
                    src: ['**/*.{png,jpg}'],
                    dest: 'assets/images/'
                }]
            }
        },

        less: {
            build: {
                options: {
                    paths: ["_src/less/"],
                    compress: true,
                    report: 'gzip'
                },
                files: {
                    "assets/styles/styles.css": "_src/less/styles.less"
                }
            }
        },
        
        cssmin: {
            build: {
                options: {
                    report: 'gzip',
                },
                files: {
                    'assets/styles/styles.min.css': ['assets/styles/styles.css']
                }
            }
        },

        watch: {
            scripts: {
                files: ['_src/scripts/*.js'],
                tasks: ['concat', 'uglify'],
                options: {
                    spawn: false,
                },
            },
            images: {
                files: ['_src/images/*.{png,jpg}'],
                tasks: ['imagemin'],
                options: {
                    spawn: false,
                },
            },
            less: {
                files: ['_src/less/*.less'],
                tasks: ['less'],
                options: {
                    spawn: false,
                }
            },
        }
    });

    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-imagemin');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-cssmin');
    grunt.loadNpmTasks('grunt-contrib-watch');

    grunt.registerTask('default', ['concat', 'uglify', 'imagemin', 'less', 'cssmin']);
};
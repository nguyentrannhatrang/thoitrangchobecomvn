/*global module:false*/
'use strict';
module.exports = function (grunt) {

    // Project configuration.
    grunt.initConfig({
        // Metadata.
        pkg: grunt.file.readJSON('package.json'),
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
            '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
            '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
            '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
            ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
        // Before generating any new files, remove any previously-created files.
        clean: {
            tests: ['tmp']
        },
        // Task configuration.
        ngmin: {
            public_common: {
                src: [
                    'application/views/templates/corner/assets/js/jquery.js',
                    'application/views/templates/corner/assets/js/jquery-migrate.min.js',
                    'application/views/templates/corner/assets/js/owl.carousel.js',
                    'application/views/templates/corner/assets/js/jquery.bxslider.min.js',
                    'application/views/templates/corner/assets/js/jquery.selectbox-0.2.min.js',
                    'application/views/templates/corner/assets/js/jquery-ui.js',
                    'application/views/templates/corner/assets/js/lightbox.js',
                    'application/views/templates/corner/assets/js/navigation.js',
                    'application/views/templates/corner/assets/js/slick.js',
                    'application/views/templates/corner/assets/js/wow.min.js',
                    'application/views/templates/corner/assets/js/jquery.ticker.js',
                    'application/views/templates/corner/assets/js/skip-link-focus-fix.js',
                    'application/views/templates/corner/assets/js/custom.js',
                    'application/views/templates/corner/assets/js/function.js'
                ],
                dest: 'tmp/public_common.js'
            },
            home: {
                src: [                    
                    'application/views/templates/corner/assets/js/cart.js'
                ],
                dest: 'tmp/home.js'
            },
            other: {
                src: [
                    'application/views/templates/corner/assets/js/product.js',
                    'application/views/templates/corner/assets/js/cart.js',
                    'application/views/templates/corner/assets/js/checkout.js'
                ],
                dest: 'tmp/other.js'
            }
        },
        uglify: {
            widget: {
                files: {
                	'tmp/public_common.min.js': ['tmp/public_common.js'],
                	'tmp/home.min.js': ['tmp/home.js'],
                	'tmp/other.min.js': ['tmp/other.js'],
                }
            }
        },
        concat: {
            widget: {
                files: {
                	'application/views/templates/corner/assets/js/home.min.js': [
                        'tmp/public_common.min.js',
                        'tmp/home.min.js'
						],
                	'application/views/templates/corner/assets/js/other.min.js': [
                        'tmp/public_common.min.js',
                        'tmp/other.min.js'
						]
                }
            }
        }
    });

    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-ngmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
    
    // Default task.
    grunt.registerTask('default', [ 'ngmin', 'uglify', 'concat']);
};

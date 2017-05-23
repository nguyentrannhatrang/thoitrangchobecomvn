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
                	'tmp/css_home.min.css': ['tmp/css_home.css']
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
						],
                	'assets/admin/js/admin_js.js': [
                        'assets/bootstrap-select-1.12.1/js/bootstrap-select.min.js',
                        'assets/js/bootstrap.min.js',
                        'assets/js/bootbox.min.js',
                        'assets/js/zxcvbn.js',
                        'assets/js/zxcvbn_bootstrap3.js',
                        'assets/js/pGenerator.jquery.js',
                        'assets/js/jquery.priceformat.min.js',
                        'assets/admin/js/product.js',
                        'assets/admin/js/booking_item.js'
						],
                	'application/views/templates/corner/assets/css/home.min.css': [
                        'tmp/css_home.min.css'
						]
                }
            }
        },
		cssmin: {
		  options: {
			mergeIntoShorthands: false,
			roundingPrecision: -1
		  },
		  target: {
			files: {
			  'application/views/templates/corner/assets/css/css_home.css': 
			  [
                    'application/views/templates/corner/assets/css/lightbox.css',
                    'application/views/templates/corner/assets/css/owl.theme.css',
                    'application/views/templates/corner/assets/css/owl.carousel.css',
                    'application/views/templates/corner/assets/css/jquery.bxslider.css',
                    'application/views/templates/corner/assets/css/fonts.css',
                    'application/views/templates/corner/assets/css/styles.css',
                    'application/views/templates/corner/assets/css/jquery.selectbox.css',
                    'application/views/templates/corner/assets/css/woocommerce-smallscreen.css',
                    'application/views/templates/corner/assets/css/woocommerce.css',
                    'application/views/templates/corner/assets/css/animate.css',
                    'application/views/templates/corner/assets/css/slick.css',
                    'application/views/templates/corner/assets/css/responsive.css'
                ],
				'application/views/templates/corner/assets/css/main.css': 
			  [
                    'application/views/templates/corner/assets/css/lightbox.css',
                    'application/views/templates/corner/assets/css/owl.theme.css',
                    'application/views/templates/corner/assets/css/owl.carousel.css',
                    'application/views/templates/corner/assets/css/button.css',
                    'application/views/templates/corner/assets/css/jquery.bxslider.css',
                    'application/views/templates/corner/assets/css/fonts.css',
                    'application/views/templates/corner/assets/css/styles.css',
                    'application/views/templates/corner/assets/css/jquery.selectbox.css',
                    'application/views/templates/corner/assets/css/frontend.css',
                    'application/views/templates/corner/assets/css/woocommerce.css',
                    'application/views/templates/corner/assets/css/animate.css',
                    'application/views/templates/corner/assets/css/slick.css',
                    'application/views/templates/corner/assets/css/responsive.css',
                    'application/views/templates/corner/assets/css/my.css'
                ]
			}
		  }
		}
    });

    // These plugins provide necessary tasks.
    grunt.loadNpmTasks('grunt-ngmin');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.loadNpmTasks('grunt-contrib-uglify');
	 grunt.loadNpmTasks( 'grunt-compass' );
	 grunt.loadNpmTasks('grunt-contrib-cssmin');
    
    // Default task.
    grunt.registerTask('default', [ 'ngmin', 'uglify', 'concat']);
};

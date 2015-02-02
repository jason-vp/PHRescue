module.exports = function(grunt) {
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        concat: {
            options: {
                separator: '\n'
            },
            dist: {
                src: ['scss/*.scss'],
                dest: 'scss/generated/styles.scss'
            }
        },

        sass: {
            options:{
                style:'expanded'
            },
            dist: {

                /*files: [{
                    expand: true,
                    cwd: 'scss/',
                    src: ['*.scss'],
                    dest: 'css/',
                    ext: '.css'
                }]*/
                src: 'scss/generated/styles.scss',
                dest: 'css/styles.css'
            }
        },
        autoprefixer:{
            dist:{
                /*files: [{
                    expand: true,
                    cwd: 'css/',
                    src: ['*.css'],
                    dest: 'css/',
                    ext: '.css'
                }]*/
                src: 'css/styles.css',
                dest: 'css/styles.css'
            }
        },
        watch: {
            css: {
                files: 'scss/*.scss',
                tasks: ['concat', 'sass', 'autoprefixer']
            }
        }
    });
    grunt.loadNpmTasks('grunt-contrib-sass');
    grunt.loadNpmTasks('grunt-contrib-watch');
    grunt.loadNpmTasks('grunt-autoprefixer');
    grunt.loadNpmTasks('grunt-contrib-concat');
    grunt.registerTask('default',['watch']);
}
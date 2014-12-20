module.exports = function(grunt) {
  	grunt.loadNpmTasks('grunt-contrib-watch');
  	grunt.loadNpmTasks('grunt-browserify');
 
  	grunt.registerTask('default', ['browserify', 'watch']);
 
  	grunt.initConfig({
    	pkg: grunt.file.readJSON('package.json'),
		browserify: {
			main: {
				src: 'protected/main.js',
				dest: 'protected/built.js'
			}	
		},
		watch: {
			files: 'protected/*',
			tasks: ['default']
		}
	});
}

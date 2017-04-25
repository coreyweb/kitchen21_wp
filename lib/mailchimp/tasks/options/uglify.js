module.exports = {
	all: {
		files: {
			'assets/js/mailchimp.min.js': ['assets/js/mailchimp.js']
		},
		options: {
			banner: '/*! <%= pkg.title %> - v<%= pkg.version %>\n' +
			' * <%= pkg.homepage %>\n' +
			' * Copyright (c) <%= grunt.template.today("yyyy") %>;' +
			' * Licensed MIT' +
			' */\n',
			mangle: {
				except: ['jQuery']
			}
		}
	}
};

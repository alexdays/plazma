'use strict';

module.exports = ['$stateProvider', 
	function($stateProvider) {
		$stateProvider
			.state('login', {
				url: '/user/login',
				template: require('./login.html'),
				controller: 'LoginController'
			});
	}
];
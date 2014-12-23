'use strict';

module.exports = ['$stateProvider',
	function($stateProvider) {
		$stateProvider
			.state('registration',{
				url: '/user/registration',
				template: require('./registration.html')
			});
	}
];
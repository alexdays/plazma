'use strict';

module.exports = ['$stateProvider',
	function($stateProvider) {
		$stateProvider
			.state('logout',{
				url: '/user/logout',
				template: ''
			});
	}
];
'use strict';

module.exports = ['$scope', '$state', '$http',
	function($scope, $state, $http) {
		$scope.loginData = {
			email: '',
			password: ''
		};

		$scope.submit = function() {
			$http({
				url:'/user/login',
				method: 'post',
				data:$scope.loginData
			})
			.success(function(data) {

			})
			.error(function(){

			});
		};
	}
];
'use strict';

module.exports = ['$scope', '$state', '$http',
	function($scope, $state, $http) {
		$scope.userData = {
			email:'',
			firstName:'',
			lastName:'',
			password:'',
			confirmPassword:''
		};

		$scope.submit = function() {
			$http()
				.post('user/register', $scope.userData)
				.success(function(data) {
					alert('Registration has successfully done');
				})
				.error(function() {
					alert('Registration error');
				});
		};
	}	
];
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
			$http({
                url: '/user/register',
                method: "POST",
                data: $scope.userData
            })
            .success(function(data) {
                $state.go('home');
            })
			.error(function() {
				alert('Registration error');
			});
		};
	}	
];
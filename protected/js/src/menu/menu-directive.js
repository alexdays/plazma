'use strict';

module.exports = [
	function () {
		return {
			restrict: 'E',
			replace: true,
			template: require('./menu.html'),
			controller: require('./menu-controller'),
			scope: {}
		};
	}
];
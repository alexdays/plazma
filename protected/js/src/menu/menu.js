'use strict';
var angular = require('angular');

angular
	.module('Menu', [])
	.directive('menu', require('./menu-directive'));


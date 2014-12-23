'use strict';

var angular = require('angular');
require('./registration/registration');

angular
	.module('User',[
		'Registration'
	])
	.config(require('./user-config'));
'use strict';

var angular = require('angular');
require('./registration/registration');
require('./login/login');
require('./logout/logout');

angular
	.module('User',[
		'Registration',
		'Login',
		'Logout'
	])
	.config(require('./user-config'));
'use strict';

var angular = require('angular');

angular
	.module('Registration', [])
	.config(require('./registration-config'))
    .controller('RegistrationController', require('./registration-controller'));
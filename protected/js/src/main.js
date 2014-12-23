'use strict';

var domready = require('domready');
var angular = require('angular');
require('./admin/admin');
require('./menu/menu');
require('./user/user');

domready(function(){
    angular.module('App', [
    	'ui.router',
        'ui.bootstrap',
        'Admin',
        'Menu',
        'User'
    ])
    .config(['$stateProvider', function($stateProvider) {
    	$stateProvider
    		.state('home', {
    			url:"/{home}",
    			template: require('./home/home.html')
    		});
    }]);
    angular.bootstrap(document, ['App']);
});

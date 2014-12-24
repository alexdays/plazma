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
    .config(['$stateProvider','$httpProvider', function($stateProvider, $httpProvider) {
    	$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
        $stateProvider
    		.state('home', {
    			url:"/{home}",
    			template: require('./home/home.html')
    		});
    }]);
    angular.bootstrap(document, ['App']);
});

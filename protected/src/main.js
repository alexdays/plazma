'use strict';

var domready = require('domready');
var angular = require('angular');
require('./admin/admin');
require('./menu/menu');

domready(function(){
    angular.module('App', [
        'Admin',
        'Menu'
    ]);
    angular.bootstrap(document, ['App']);
});

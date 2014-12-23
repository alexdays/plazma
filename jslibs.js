'use strict';

module.exports = function(basePath, min) {
    var target = '';

    min?target='.min':target='';

    var files = [
        basePath+'/angular/angular'+target+'.js',
        basePath + '/lodash/dist/lodash' + target + '.js',
        basePath + '/angular-bootstrap/ui-bootstrap-tpls' + target + '.js',
        basePath + '/angular-ui-router/release/angular-ui-router' + target + '.js'
    ];

    return files;
};
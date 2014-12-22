'use strict';

module.exports = function(basePath, min) {
    var target = '';

    min?target='.min':target='';

    var files = [
        basePath+'/angular/angular'+target+'.js',
        basePath + '/lodash/dist/lodash' + target + '.js'
    ];

    return files;
};
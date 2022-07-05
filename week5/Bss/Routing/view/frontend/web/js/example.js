// define([
//
// ], function(){
//     'use strict'
//     // let custom = {};
//     // custom.getText = function(){
//     //     return 'Hello World - Requirejs';
//     // }
//     // return custom;
// });

define([
    'jquery'
], function($) {
    'use strict';

    var exampleComponent = function(config, element) {
        console.log(config); // ra dữ liệu truyền vào
        console.log(element); // element = $(“.selector”)
    };

    return exampleComponent;
});

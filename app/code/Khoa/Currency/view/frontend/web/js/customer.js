/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
        "jquery"
    ], function($){
        "use strict";
        return function(config, element) {
            alert(config.message);
        };
    }
);
// define([
//     'jquery',
// ], function ($) {
//     $(document).ready( function() {
//         alert("Page loaded.");
//     });
//     function main(config) {
//         var YOUR_URL_HERE = config.AjaxUrl;
//         $(document).on('click','.button',function() {
//             var param = 'ajax=1';
//             $.ajax({
//                 url: YOUR_URL_HERE,
//                 data: param,
//                 type: "POST",
//                 dataType: 'json'
//             }).done(function (data) {
//                 $('#test').removeClass('hideme');
//             });
//         });
//     };
//     return main;
// });
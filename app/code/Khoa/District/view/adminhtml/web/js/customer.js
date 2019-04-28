/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

define([
        "jquery"
    ], function($){
        "use strict";
        return function(config) {
            var param = $('select[name*="region_id"]').val();
            alert(param);
            $(document).on('change','select[name*="region_id"]',function () {
                var param = $('select[name*="region_id"]').val();
                alert(param);
                $.ajax({
                    url: config.message,
                    data: {'param':param, '_token':config.key},
                    type: "POST",
                }).done( function (data) {
                    var html = '';
                    html += '<option value="">Chọn Quận/Huyện</option>';
                    $(data.output).each(function (index, value) {
                        html += '<option data-title="' + value.title +'" value="' + value.value +'">'+ value.label +'</option>';
                    });
                    $('select[name*="district"]').html(html);
                }).fail(function () {
                    console.log("ajax fail");
                });
            });
            $('.hideme').click(function () {
                alert('hehe');
                $('select[name*="district"]').html('<option value="">Chọn Quận/Huyện</option>' +
                    '<option data-title="Quận Ba Đình" value="001">Quận Ba Đình</option>' +
                    '<option data-title="Quận Hoàn Kiếm" value="002">Quận Hoàn Kiếm</option>');
            });
            return false;
        }
    }
);

// define([
//     'jquery',
//     'underscore',
//     'mage/template',
//     'jquery/list-filter'
// ], function (
//     $,
//     _,
//     template
// ) {
//     function main(config, element) {
//         var $element = $(element);
//         var YOUR_URL_HERE = config.AjaxUrl;
//         $(document).on('click','yourID_Or_Class',function() {
//             var param = 'ajax=1';
//             $.ajax({
//                 showLoader: true,
//                 url: YOUR_URL_HERE,
//                 data: param,
//                 type: "POST",
//                 dataType: 'json'
//             }).done(function (data) {
//                 $('#test').removeClass('hideme');
//                 var html = template('#test', {posts:data});
//                 $('#test').html(html);
//             });
//         });
//     };
//     return main;
// });
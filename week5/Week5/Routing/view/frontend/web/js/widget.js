define([
    'jquery',
    'jquery/ui',
    'Magento_Ui/js/modal/prompt'
], function ($, prompt, _) {
    'use strict';

    $.widget('mage.kiwicount', {
        _create: function () {
            let data = [
                {
                    "id": 1,
                    "name": "Phone",
                    "image": "abc",
                    "price": '1000',
                    "description": "bdbcbddfbdfb"
                },
                {
                    "id": 2,
                    "name": "Fan",
                    "image": "def",
                    "price": '10',
                    "description": "sđfdbcbcbcvbdbf"
                },
                {
                    "id": 3,
                    "name": "Light",
                    "image": "xyz",
                    "price": '100',
                    "description": "sđbfnnbfdbdbdfb"
                },
            ];
            this._loadData(data);
            this._addToTable(data);
        },
        _loadData: function (data) {
            let self = this;
            $("table tbody").empty();
            for (let i = 0; i < data.length; i++) {
                $(".table table tbody").append(
                    "<tr><td>" +
                    data[i].name +
                    "</td><td>" +
                    data[i].price +
                    "</td><td>" +
                    data[i].description +
                    "</td><td><img src='" + data[i].image + "' width='100px' height='100px' alt='ảnh'/></td>" +
                    "<td><button id='" + data[i].id + "' class='delete-product'>Delete</button></td></tr>"
                );
            }
            $(".delete-product").click(function () {
                let id = $(this).attr("id");
                require([
                    'jquery',
                    'Magento_Ui/js/modal/prompt'
                ], function ($, prompt) {
                    prompt({
                        title: $.mage.__('Confirmation'),
                        content: $.mage.__('Wanna delete?'),
                        promptContentTmpl: "",
                        actions: {
                            confirm: function () {
                                self._deleteProduct(id, data);
                            },
                            cancel: function () {
                            },
                            always: function () {
                            }
                        },
                    });

                });
            });
        },
        _deleteProduct: function (id, data) {
            let self = this;
            for (let i = 0; i < data.length; i++) {
                if (data[i].id == id) {
                    data.splice(i, 1);
                }
            }
            self._loadData(data);
        },
        _addToTable: function (data) {
            let self = this;
            function _addProduct(id, name, price, description, img){
                let product = {id: id, name: name, price: price, description: description, img: img};
                data.push(product);
                self._loadData(data);
            };
            $("#addProduct").click(function () {
                let name = $(".name").val();
                let price = $(".price").val();
                let description = $(".description").val();
                let img = $(".img").val();
                if(name!='' && price!='' && description!='' && img!=''){
                    _addProduct(data.length + 1, name, price, description, img);
                    $(".name").val("");
                    $(".price").val("");
                    $(".description").val("");
                    $(".img").val("");
                }
            })
        }
    });
    return $.mage.kiwicount;
});

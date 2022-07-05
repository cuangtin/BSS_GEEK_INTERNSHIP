define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Week5_Routing/knockout-test'
            },
            initialize: function () {
                this.Products = ko.observableArray([]);
                this.getName = ko.observable('');
                this.getPrice = ko.observable('');
                this.getDesc = ko.observable('');
                this.errorMessage = ko.observable('');
                this._super();
            },

            addNewProduct: function () {
                if (this.getName() == '') {
                    this.errorMessage('Mời nhập tên')
                }else
                if (this.getPrice() == '') {
                    this.errorMessage('Mời nhập giá')
                }else if (this.getDesc() == '') {
                    this.errorMessage('Mời nhập mô tả')
                }
                else {
                    this.Products.push({name: this.getName(), price: this.getPrice(), description: this.getDesc()});
                    this.getName('');
                    this.getPrice('');
                    this.getDesc('');
                }
            }
        });
    }
);

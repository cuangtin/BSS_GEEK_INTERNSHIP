define(['jquery', 'uiComponent', 'ko'], function ($, Component, ko) {
        'use strict';
        return Component.extend({
            defaults: {
                template: 'Bss_Fresher/knockout'
            },
            initialize: function () {
                self = this;
                this.Customers = ko.observableArray([]);
                this.getCustomerId = ko.observable('');
                this.getCustomerName = ko.observable('');
                this.getCustomerClass = ko.observable('');
                this.validateId = ko.observable('');
                this.validateName = ko.observable('');
                this.validateClass = ko.observable('');
                this._super();
            },
            addNewCustomer: function () {
                (this.getCustomerId() == '') ? this.validateId('không để trống id!') : this.validateId('');
                (this.getCustomerName() == '') ? this.validateName('không để trống tên!') : this.validateName('');
                (this.getCustomerClass() == '') ? this.validateClass('không để trống class!') : this.validateClass('');
                if (this.getCustomerId() != '' && this.getCustomerName() != '' && this.getCustomerClass() != '') {
                    this.Customers.push({
                        id: this.getCustomerId(),
                        name: this.getCustomerName(),
                        className: this.getCustomerClass()
                    });
                    this.getCustomerId('');
                    this.getCustomerName('');
                    this.getCustomerClass('');
                }
            },
            resetTable: function () {
                this.Customers.removeAll();
            },
            removeData: function (data) {
                self.Customers.remove(data);
            },
        });
    }
);

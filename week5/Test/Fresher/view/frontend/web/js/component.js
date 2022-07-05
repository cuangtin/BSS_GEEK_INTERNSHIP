define([
    'jquery'
], function ($) {
    'use strict';
    $.widget('test.week5', {
        options: {
            member: [],
            name: 'name',
            phone: 'phone',
            dob: 'dob',
            message: 'message',
            display: '#display-customer'
        },
        _create: function () {
            console.log(123);
            let self = this;
            $(self.options.display).click(function () {
                let name = $("#name").val();
                let phone = $("#phone").val();
                let dob = $("#dob").val();
                let message = $("#message").val();
                if (name == "") {
                    document.getElementById('name-validate').style.color = "red";
                    document.getElementById('name').style.borderColor = "red";
                    document.getElementById('name-validate').innerHTML = "Không để trống tên.";
                } else {
                    document.getElementById('name-validate').style.color = "red";
                    document.getElementById('name-validate').innerHTML = "";
                    document.getElementById('name').style.borderColor = "black";
                }
                if (phone == "") {
                    document.getElementById('phone-validate').style.color = "red";
                    document.getElementById('phone').style.borderColor = "red";
                    document.getElementById('phone-validate').innerHTML = "Không để trống số điện thoại.";
                } else {
                    document.getElementById('phone-validate').style.color = "red";
                    document.getElementById('phone-validate').innerHTML = "";
                    document.getElementById('phone').style.borderColor = "black";
                }
                if (dob == "") {
                    document.getElementById('dob-validate').style.color = "red";
                    document.getElementById('dob').style.borderColor = "red";
                    document.getElementById('dob-validate').innerHTML = "Không để trống ngày sinh.";
                } else {
                    document.getElementById('dob-validate').style.color = "red";
                    document.getElementById('dob-validate').innerHTML = "";
                    document.getElementById('dob').style.borderColor = "black";
                }
                if (name !== "" && phone !== "" && dob !== "") {
                    self._displayPopup(name, phone, dob, message);
                }
            })
        },
        _displayPopup: function (name, phone, dob, message) {
            let self = this;
            document.getElementById('name-display').innerHTML = "Name: " + name;
            document.getElementById('phone-display').innerHTML = "Phone: " + phone;
            document.getElementById('dob-display').innerHTML = "Birthday: " + dob;
            document.getElementById('message-display').innerHTML = "Note: " + message;
            require([
                "jquery",
                "Magento_Ui/js/modal/modal"
            ], function ($, modal) {
                let options = {
                    type: 'popup',
                    responsive: true,
                    title: 'Your Information',
                    buttons: '',
                };
                let popup = modal(options, $('#modal'));
                $('#modal').modal('openModal');
            });
        },
    });
    return $.test.week5;
});

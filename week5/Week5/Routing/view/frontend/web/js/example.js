define([
    'jquery'
], function ($) {
    'use strict';
    const data = [{
        id: 1,
        name: "Refrigerator",
        price: 30,
        description: "hjrkegdg",
        img: "abc"
    }];


    function loadData() {
        $("table tbody").empty();
        for (let i = 0; i < data.length; i++) {
            $(".table table tbody").append(
                "<tr><td>" +
                data[i].name +
                "</td><td>" +
                data[i].price +
                "</td><td>" +
                data[i].description +
                "</td><td><img src='"+data[i].image+"' width='100px' height='100px' alt='ảnh'/></td>" +
                "<td><button id='"+data[i].id+"' class='delete-product'>Delete</button></td></tr>"
            );
        }
        $(".delete-product").click(function () {
            let id = $(this).attr("id");
            deleteProduct(id);
        });
    }

    loadData();

    function deleteProduct(id){
        for(let i = 0; i < data.length ; i ++){
            if(data[i].id == id){
                data.splice(i, 1);
            }
        }
        loadData();
    }

    function addProduct(id, name, price, description, img){
        let product = {id: id, name: name, price: price, description: description, img: img};
        data.push(product);
    }

    $("#addProduct").click(function () {
        let name = $(".name").val();
        let price = $(".price").val();
        let description = $(".description").val();
        let img = $(".img").val();
        $(".name").val("");
        $(".price").val("");
        $(".description").val("");
        $(".img").val("");
        addProduct(data.length + 1, name, price, description, img)
        loadData();
    });
});


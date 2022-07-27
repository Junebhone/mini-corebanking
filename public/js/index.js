"use strict";


$(document).ready(function domReady() {



    //side nav bar and humbarger menu
    $("#toggle").click(() => {
        $("#nav").toggleClass("-translate-x-full");
        $(".hamburger").toggleClass("open");
    })



    //side nav bar dropdown
    $('.btn').click(function() {
        $(this).find("#arrow").toggleClass('rotate-180');
        $(this).find('#drop').slideToggle('fast', 'swing');
    })



    $(".js-select2").select2({
        theme: "material",
        minimumResultsForSearch: Infinity

    });

    $(".select2-selection__arrow")
        .addClass("material-icons")
        .html("arrow_drop_down");

    $("#customerSelect").change(function() {
        let value = $("#customerSelect").select2('val');
        if (value === "enterprise") {
            $("#Company").slideToggle('fast');
        }
        if (value === "individual") {
            $("#Company").slideToggle("fast");
        }

    })

})
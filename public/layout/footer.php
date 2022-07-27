  <script src="./js/jquery.js"></script>
  <script src="./js/select2.full.js"></script>
  <script src="./js/datepicker.js"></script>
  <script src="./js/sweetalert.js"></script>
  <script>
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
            $("#Company").slideUp("fast");
        }

    })


    function dialog(id, text, confirm) {
        $(`${id}`).on("click", function(e) {
            e.preventDefault();
            const href = $(this).attr('href');
            Swal.fire({
                title: 'Are You Sure?',
                text: `${text}`,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33 ',
                confirmButtonText: `${confirm}`,
            }).then((result) => {
                if (result.value) {
                    document.location.href = href;
                }

            })

        })
    }

    $(".btn-opened").click(dialog(".btn-opened", "This Account Will Be Opened", "Opened Account"));
    $(".btn-closed").click(dialog(".btn-closed", "This Account Will Be Closed", "Closed Account"));



    function alert(flash, type, text) {
        const flash1 = $(`${flash}`).data('flashdata');
        if (flash1) {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3000,
                width: '25em',
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                icon: `${type}`,
                title: `${text}`
            })

        }
    }



    alert(".alert-open", "success", "Opened Account Successfully");
    alert(".alert-close", "success", "Closed Account Successfully");
    alert(".alert-NRC", "error", "This NRC has already registered");
    alert(".alert-amount", "error", "The amount is greater than the balance")
})
  </script>
  <!-- <script src="./js/index.js"></script> -->

  </body>

  </html>
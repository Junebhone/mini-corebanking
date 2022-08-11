  <script src="./js/jquery.js"></script>
  <script src="./js/select2.full.js"></script>
  <script src="./js/datepicker.js"></script>
  <script src="./js/sweetalert.js"></script>
  <script src="./js/lottie.js"></script>
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

    $(".js-select").select2({
        theme: "material",
    });

    $("#customerSelect").change(function() {
        let value = $("#customerSelect").select2('val');
        if (value === "enterprise") {
            $("#Company").slideToggle('fast');
        }
        if (value === "individual") {
            $("#Company").slideUp("fast");
        }

    })

    $(".select2-selection__arrow")
        .addClass("material-icons")
        .html("arrow_drop_down");




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
    alert(".status-blocked", "error", "This account has been blocked");

    $("#stateNumber").change(function() {
        const state_number_en = $(this).select2('val');
        $.ajax({
            url: "district.php",
            type: "POST",
            data: {
                state_number: state_number_en
            },
            success: function(result) {
                $("#district").html(result);
            }
        })
    })





    if ($("#customerID").val()) {
        const customerID = $("#customerID").val();
        const state_number_en = $("#stateNumber").select2('val');
        $.ajax({
            url: "districtEdit.php",
            type: "POST",
            data: {
                state_number: state_number_en,
                customerID: customerID
            },
            success: function(result) {
                $("#district").html(result);
            }
        })
    }

    $('.cursor').mousedown(function(e) {
        e.preventDefault();
        $(this).blur();
        return false;
    });


    const modal = document.querySelector('.modal');


    $(".show-modal").click(() => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        $.ajax({
            url: "transferTo.php",
            type: "POST",
            success: function(result) {
                console.log(result);
                const arry = result.split("|");
                const heading = arry[0];
                // const search = array[1];
                const table = arry[1];
                $("#content").html(heading);
                $("#table").html(table);
            }
        })
    });


    $(".show-modal1").click(() => {
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        $.ajax({
            url: "transferFrom.php",
            type: "POST",
            success: function(result) {
                console.log("hi");
                const arry = result.split("|");
                const heading = arry[0];
                const table = arry[1];
                $("#content").html(heading);
                $("#table").html(table);
            }
        })
    });

    $(document).on('click', '.select', function(e) {
        let values = displayData(e);
        let accountid = $("#accountID");
        accountid.val(values);

        if (accountid.val(values)) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
        }
    })

    function displayData(e) {
        let id = 0;
        const td = $(".select");
        let textvalues = [];

        for (const value of td) {
            if (value.dataset.id == e.target.dataset.id) {
                textvalues[id++] = value.dataset.id;
            }
        }
        return textvalues;
    }




    $(document).on('click', '#close-modal', function() {
        modal.classList.remove('flex');
        modal.classList.add('hidden');
        $("#search").val(null);;
    })


    $("#ss").click(() => {
        const account = $("#search").val();
        console.log(account);

        $.ajax({
            url: "transferTo.php",
            type: "POST",
            data: {
                accountID: account
            },
            success: function(result) {
                console.log(result);
                const arry = result.split("|");
                const heading = arry[0];
                // const search = array[1];
                const table = arry[1];
                $("#content").html(heading);
                $("#table").html(table);
            }
        })
    })
})
  </script>

  </body>

  </html>
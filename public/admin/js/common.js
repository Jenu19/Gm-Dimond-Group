$(window).on('load', function () {
    "use strict";
    $("#preload").fadeOut(500);
    $(".pre-loader").fadeOut(500);
})

$(function () {
    "use strict";

    $('.zero-configuration').DataTable({
        lengthMenu: [
            [10, 25, 50, 100, 500, -1],
            [10, 25, 50, 100, 500, "All"]
        ],
        searching: true,
        language: {
            paginate: {
                next: "Next",
                previous: "Previous"
            }
        },
        pagingType: "simple_numbers",
        initComplete: function () {
            $('.dt-search input').removeClass('form-control-sm'); // Remove default class if needed
        }
    });

});

$(window).scroll(function () {
    "use strict";
    if ($(this).scrollTop() > 180) {
        $('#add_button').addClass('sticky-button');
        $('#add_button').find('button').addClass('w-100');
    } else {
        $('#add_button').removeClass('sticky-button');
        $('#add_button').find('button').removeClass('w-100');
    }
});

$("document").ready(function () {
    setTimeout(function () {
        $(".alert-success").slideUp();
    }, 2000); // 2 secs

});
// For all sweet-alerts
const swalWithBootstrapButtons = Swal.mixin({
    customClass: {
        confirmButton: 'btn btn-success mx-1',
        cancelButton: 'btn btn-danger mx-1'
    },
    buttonsStyling: false
})

function swal_cancelled() {
    "use strict";
    swalWithBootstrapButtons.fire({
        icon: 'error',
        title: 'Cancelled',
        text: 'Something went wrong!',
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'OK',
        reverseButtons: true,
    })
};

//Data Delete Swal
function Delete(id, deleteurl) {
    "use strict";
    swalWithBootstrapButtons.fire({
        icon: 'warning',
        title: 'Are you sure?',
        showCancelButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true,
        showLoaderOnConfirm: true,
        preConfirm: function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: deleteurl,
                data: {
                    id: id
                },
                method: 'POST',
                success: function (response) {
                    if (response == 1) {
                        location.reload();
                    } else {
                        swal_cancelled()
                    }
                },
                error: function (e) {
                    swal_cancelled()
                }
            });
        },
    }).then((result) => {
        if (!result.isConfirmed) {
            result.dismiss === Swal.DismissReason.cancel
        }
    })
}

//Status update swal
function StatusUpdate(id, status, statusurl) {
    "use strict";
    swalWithBootstrapButtons.fire({
        icon: 'warning',
        title: 'Are you sure?',
        showCancelButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true,
        showLoaderOnConfirm: true,
        preConfirm: function () {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: statusurl,
                data: {
                    id: id,
                    status: status,
                },
                method: 'POST',
                success: function (response) {
                    if (response == 1) {
                        location.reload();
                    } else {
                        swal_cancelled()
                    }
                },
                error: function (e) {
                    swal_cancelled()
                }
            });
        },
    }).then((result) => {
        if (!result.isConfirmed) {
            result.dismiss === Swal.DismissReason.cancel
        }
    })
}

//Logout Swal
function logout(nexturl) {
    "use strict";
    swalWithBootstrapButtons.fire({
        icon: 'warning',
        title: 'Are you sure?',
        showCancelButton: true,
        allowOutsideClick: false,
        allowEscapeKey: false,
        confirmButtonText: 'Yes',
        cancelButtonText: 'No',
        reverseButtons: true,
        showLoaderOnConfirm: true,
    }).then((result) => {
        if (result.isConfirmed) {
            location.href = nexturl;
        } else {
            result.dismiss === Swal.DismissReason.cancel
        }
    })
}

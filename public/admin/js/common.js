// Setting JS Start
$(document).ready(function () {
    $('#settingmenuContent').find('.hidechild').addClass('d-none');
    $('#settingmenuContent').find('.hidechild:first').removeClass('d-none');
});


$('.basicinfo').on('click', function () {

    "use strict";

    $('#settingmenuContent').find('.hidechild').addClass('d-none');
    $('#' + $(this).attr('data_attribute')).removeClass('d-none');

    $('.list-options').find('.active').removeClass('active');

    $(this).addClass('active');

});

function show_feature_icon(x) {

    "use strict";

    $(x).next().html($(x).val())

}

function remove_features(id) {

    "use strict";

    $('.remove' + id).remove();

    if ($('.extra_social_links .row').length == 0) {
        $(".soaciallink_required").prop('required', false);
    }

}

var id = 1;

function add_social_links(icon, link) {
    "use strict";
    var html =
        '<div class="col-12 remove' +
        id +
        '"><div class="row"><div class="col-md-6 form-group"><div class="input-group"><input type="text" class="form-control soaciallink_required" onkeyup="show_feature_icon(this)" name="social_icon[]" placeholder="' +
        icon +
        '" required><p class="input-group-text"></p></div></div><div class="col-md-6 d-flex gap-2 align-items-center form-group"><input type="text" class="form-control soaciallink_required" name="social_link[]" placeholder="' +
        link +
        '" required><button class="btn btn-danger hov btn-sm rounded-5" type="button" onclick="remove_features(' +
        id +
        ')"><i class="fa fa-trash"></i></button></div></div></div>';
    $(".extra_social_links").append(html);
    $(".soaciallink_required").prop("required", true);
    id++;
}
//Setting JS End

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

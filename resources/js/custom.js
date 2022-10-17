// Accordion
// -----------------------------------------------------------------


$(document).on("DOMContentLoaded", () => {

    $("#approve-friend-btn").on("click", function () {
        let sender_id = $(this).attr("sender_id");
        //let acceptfriendrequesturl = '{{ url("acceptfriendrequest/'+sender_id+'") !!}';
        let acceptfriendrequesturl =
            "http://localhost:8000/acceptfriendrequest/" + sender_id + "";

        console.log(acceptfriendrequesturl);

        Swal.fire({
            title: "Are you sure?",
            text: "You want to accept the request!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Accept!",
            showCloseButton: true,
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(acceptfriendrequesturl)
                    .then((response) => {
                        Swal.fire(
                            "Accepted!",
                            "You Accepted the friend Request.",
                            "success"
                        );
                    })
                    .catch((error) => {
                        Swal.showValidationMessage(`Request failed: ${error}`);
                    });
            }
        });

        // bootbox.confirm({
        //     message:
        //         "<p class='text-semibold text-main'><strong>Please Confirm</strong></p><br/><p>Are you sure, you want to accept the friend request?</p>",

        //     buttons: {
        //         confirm: {
        //             label: "Accept",
        //         },
        //     },
        //     callback: function (result) {
        //         if (result) {

        //         }
        //     },
        //     animateIn: "bounceIn",
        //     animateOut: "bounceOut",
        // });
    });

    $("#unfriend-btn").on("click", function () {
        let sender_id = $(this).attr("sender_id");
        let unfriendrequesturl =
            "http://localhost:8000/unfriend/" + sender_id + "";
        Swal.fire({
            title: "Are you sure?",
            text: "You want to unfriend the user!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Accept!",
            showCloseButton: true,
            showLoaderOnConfirm: true,
        }).then((result) => {
            if (result.isConfirmed) {
                fetch(unfriendrequesturl)
                    .then((response) => {
                        Swal.fire(
                            "Completed!",
                            "Unfriend Successful.",
                            "success"
                        );
                    })
                    .catch((error) => {
                        Swal.showValidationMessage(`Request failed: ${error}`);
                    });
            }
        });
    });
});

window.addEventListener('DOMContentLoaded' , function () {
    function scrollBottom(element) {
        element.scroll({ top: element.scrollHeight, behavior: "smooth" });
    }

    Livewire.on("NewMessage", (msg) => {
        let scroll_to_bottom = document.getElementById("chat-body-div");
        scrollBottom(scroll_to_bottom);
    });

    Livewire.on("UserChatSelected", (msg) => {
        let scroll_to_bottom = document.getElementById("chat-body-div");
        scrollBottom(scroll_to_bottom);
    });

    Livewire.on("triggerUnfriend", (uid) => {
        let acceptfriendrequesturl =
            "http://localhost:8000/unfriend/" + uid + "";
            Swal.fire({
                title: "Are you sure?",
                text: "You want to unfriend the user!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Unfriend!",
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
                            Livewire.emit('refreshComponent');
                        })
                        .catch((error) => {
                            Swal.showValidationMessage(`Request failed: ${error}`);
                        });
                }
            });
    });
});

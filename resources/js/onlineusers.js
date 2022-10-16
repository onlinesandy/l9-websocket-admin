// window.Echo.private("onlineusers")
// .listen("onlineusers", (e) => {
//     console.log(e.name);
// });

import moment from 'moment';

window.Echo.join(`onlineusers`)
    .listen(`.onlineusers`, (e) => {
        console.log("event fired", e.name);

    })
    .here((users) => {
        console.log(users);

    })
    .joining((user) => {
        console.log(user.name);
        let joined_time = moment(new Date).fromNow();

        if (!document.getElementById("usr_head_notification_li_" + user.id)) {
            let usr_html =
                '<li id="usr_head_notification_li_' +
                user.id +
                '"><a class="media" href="#"><div class="media-left"><i class="demo-pli-add-user-plus-star icon-2x"></i></div>';
            usr_html +=
                '<div class="media-body"><div class="text-nowrap">' +
                user.name +
                ' Joined </div><small class="text-muted">'+joined_time+'</small>';
            usr_html += "</div></a></li>";
            document
                .getElementById("header_notification_badge")
                .classList.remove("hide");
            document.getElementById("head-list-notification").innerHTML +=
                usr_html;
        }
    })
    .leaving((user) => {
        console.log(user.name);
        if(document.getElementById("usr_head_notification_li_" + user.id)){
            document.getElementById("usr_head_notification_li_" + user.id).remove();
        }

    });

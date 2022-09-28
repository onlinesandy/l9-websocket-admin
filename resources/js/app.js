import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

// window.Echo.private("onlineusers")
// .listen("onlineusers", (e) => {
//     console.log(e.name);
// });

window.Echo.join(`onlineusers`)
    .listen(`.onlineusers`, (e) => {
        console.log("event fired", e.name);
    })
    .here((users) => {
        console.log(users);
    })
    .joining((user) => {
        console.log(user.name);
        console.log("rfrf");
    })
    .leaving((user) => {
        console.log(user.name);
        console.log("56565");
    });

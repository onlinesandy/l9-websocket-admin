window.Echo.private(`chat-2`)
    .listen(`.chat-sendmsg`, (e) => {
        console.log('js chat room event fired', e);
    });

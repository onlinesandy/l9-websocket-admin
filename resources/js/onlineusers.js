Echo.join(`chat.${roomId}`)
    .here()
    .joining()
    .leaving()
    .listen('NewMessage', (e) => {
        //
    });

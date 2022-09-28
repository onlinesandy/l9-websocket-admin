$( document ).on("DOMContentLoaded", () => {
   Livewire.on('onlineusers', message => {
       console.log(message.detail.success);
   });
});

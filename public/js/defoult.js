let len = document.querySelectorAll(".edite_buton").length;
for(var i = 0; i <= len; i++){
   let edite_all_btn = document.querySelectorAll(".edite_buton")[i];
   edite_all_btn.addEventListener('click',function(){
   let valu = this.innerHTML;
    buttenMessage(valu);            
  })

edite_all_btn.addEventListener('mouseover',function(){
edite_all_btn.classList.add("project_btn");

setTimeout(function(){
    edite_all_btn.classList.remove("project_btn");
},3000);
})

}
function buttenMessage(valu) {
    let timerInterval;
        Swal.fire({
        title: "Processing...",
        html: "Ready Your Process !",
        timer: 3000,
        timerProgressBar: true,
        didOpen: () => {
        Swal.showLoading();
        const timer = Swal.getPopup().querySelector("b");
        timerInterval = setInterval(() => {
        timer.textContent = `${Swal.getTimerLeft()}`;
        }, 100);
        },
        willClose: () => {
            clearInterval(timerInterval);
        }
        }).then((result) => {
        /* Read more about handling dismissals below */
        if (result.dismiss === Swal.DismissReason.timer) {
            console.log("I was closed by the timer");
        }
        });
}

//our Project part undu botton js

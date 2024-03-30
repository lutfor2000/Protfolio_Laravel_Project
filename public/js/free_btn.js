//Freelancing page Button JavaScript processing
const free_all_btns = document.querySelectorAll(".free_btn");

   Array.from(free_all_btns).map((free_all_btn) => {
      free_all_btn.addEventListener('mouseover',function(){
            free_all_btn.classList.add('free_add_css');

            setTimeout(() => {
                free_all_btn.classList.remove('free_add_css');
            }, 3000);
      })
   })

// Array.from(free_all_btns).map(function(free_all_btn){
//     free_all_btn.addEventListener('click',function(){
//         alert('i am agree');
//     })
// })



let project_btn_len = document.querySelectorAll(".project_undu").length;
for(var a = 0; a <= project_btn_len; a++ ){

   let project_all_brn = document.querySelectorAll(".project_undu")[a];

   project_all_brn.addEventListener('mouseover',function(){
    project_all_brn.classList.add("project_undu_css");
    setTimeout(() => {
      project_all_brn.classList.remove("project_undu_css");
    }, 5000);
   });

}
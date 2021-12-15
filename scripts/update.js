let a = document.querySelectorAll('.update-a');
let form = document.querySelectorAll('.update-form');
console.log(a);
console.log(form);

for(let i = 0; i <= a.length; i++){
    a[i].addEventListener('click', () => block(i))
        
};
function block(i){
    console.log(a[i]);
    console.log(form[i]);
    console.log(i)
            if(form[i].classList.contains("update-form-show")){
                form[i].classList.remove("update-form-show");
            }else{
                form[i].classList.add("update-form-show");
            }
        
}
// a.addEventListener('click', function(){
//     if(form.classList.contains("update-form-show")){
//         form.classList.remove("update-form-show");
//     }else{
//         form.classList.add("update-form-show");
//     }
// })


let firstname = document.querySelector("#firstname");
let secondname = document.querySelector("#secondname");
let login = document.querySelector("#login");
let email = document.querySelector("#email");
let password = document.querySelector("#password");
let repeatPassword = document.querySelector("#repeat-password");
let patronymic = document.querySelector("#patronymic");
let checkbox = document.querySelector("#check");


let regBtn = document.querySelector("#reg-btn");
// regBtn.addEventListener("click", validNull);
// let error = document.querySelector(".error");

let firstnamespan = document.querySelector("#firstnamespan");
let secondnamespan = document.querySelector("#secondnamespan");
let loginspan = document.querySelector("#loginspan");
let emailspan = document.querySelector("#emailspan");
let passwordspan = document.querySelector("#passwordspan");
let repeatPasswordspan = document.querySelector("#repeat-passwordspan");
// firstname.addEventListener('blur', validNull(firstname));
let patronymicspan = document.querySelector("#patronymicspan");
let checkboxspan = document.querySelector("#checkspan");
firstname.onblur = function (){
    if(firstname.value == 0){
        firstnamespan.innerHTML='Введите имя пользователя';
        regBtn.setAttribute('disabled', false);
    }else if(firstname.value <= 2){
        firstnamespan.innerHTML='Имя пользователя должно содержать от 2 символов';
    }
    else{
        firstnamespan.innerHTML='';
        regBtn.removeAttribute('disabled');
    }
}
secondname.onblur = function (){
    if(secondname.value == 0){
        secondnamespan.innerHTML='Введите фамилию';
        regBtn.setAttribute('disabled', false);
    }else if(secondname.value <= 2){
        secondnamespan.innerHTML='Фамилия должна содержать от 2 символов';
    }
    else{
        secondnamespan.innerHTML='';
        regBtn.removeAttribute('disabled');
    }
}
login.onblur = function (){
    if(login.value == 0){
        loginspan.innerHTML='Введите логин';
        regBtn.setAttribute('disabled', false);
    }else if(login.value <= 5){
        loginspan.innerHTML='Логин должен содержать от 5 символов';
    }
    else{
        loginspan.innerHTML='';
        regBtn.removeAttribute('disabled');
    }
}
email.onblur = function (){
    console.log(email.value);
    if(email.value == 0){
        emailspan.innerHTML='Введите E-mail';
        regBtn.setAttribute('disabled', false);
    }else if(email.value <= 6){
        emailspan.innerHTML='E-mail должен содержать от 6 символов';
    }
    else{
        emailspan.innerHTML='';
        regBtn.removeAttribute('disabled');
    }
}
password.onblur = function (){
    if(password.value == 0){
        passwordspan.innerHTML='Введите пароль';
        regBtn.setAttribute('disabled', false);
    }else if(password.value <= 8){
        passwordspan.innerHTML='Пароль должен содержать от 8 символов';
    }
    else{
        passwordspan.innerHTML='';
        regBtn.removeAttribute('disabled');
    }
}
repeatPassword.onblur = function (){
    console.log(password.value)
    if(repeatPassword.value == 0){
        repeatPasswordspan.innerHTML='Повторите пароль';
        regBtn.setAttribute('disabled', false);
    }else if(repeatPassword.value != password.value){
        repeatPasswordspan.innerHTML='Пароли не совпадают';
    }
    else{
        repeatPasswordspan.innerHTML='';
        regBtn.removeAttribute('disabled');
    }
}
// if(checkbox.checked){
//     regBtn.removeAttribute('disabled');
//     checkboxspan.innerHTML='';
    

// }else{
//     checkboxspan.innerHTML='Подтвердите согласие';
//     regBtn.setAttribute('disabled', false);

// }

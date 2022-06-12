Validator({
    form: '#form_register',
    errorSelector: '.form-message',
    rules: [
        Validator.isRequied("#name", 'Vui lòng nhập tên đẩy đủ của bạn'),
        Validator.isRequied("#email"),
        Validator.isEmail("#email"),
        Validator.minLenght("#password", 6),
        Validator.isRequied("#repassword"),
        Validator.isConfirmed("#repassword", function() {
            return document.querySelector('#form_register #password').value;
        }, 'Mật khẩu nhập lại không chính xác'),

    ],

    onsubmit: function(data) {

    }

});

const all = document.querySelector(".all");

const lopphu = document.querySelector('.model_login_register_lopphu');

const FormLogin = document.querySelector(".model_login_main");
const LoginContainer = document.querySelector('.login_container');

const FormRegister = document.querySelector(".form-register");
const RegisterContainer = document.querySelector('.register__containerr');

const LoginBtn = document.querySelector('.js-btn-login');
const RegisterBtn = document.querySelector('.js-btn-register');
const FormDk = document.querySelector('.register-body');
const BtbIconClose = document.querySelector('.iconclose');



const chuyen_register = document.querySelector('.btn_chuyen_register');
//     // đky 
//     LoginBtn.onclick = function (){
//         Block(loginregister);
//         Block(FormLogin);
//         Block(lopphu);
//     }

// RegisterBtn.onclick =function(){
//     Block(loginregister);
//     Block(FormRegister);
//     Block(lopphu);
// }

LoginBtn.addEventListener('click', function showFormlogin() {
    FormLogin.classList.add('is-show');
})

BtbIconClose.addEventListener('click', function showFormlogin() {
    FormLogin.classList.remove('is-show');
})



RegisterBtn.addEventListener('click', function showFormRegister() {
    FormRegister.classList.add('open');
    FormLogin.classList.remove('is-show');
})
FormRegister.addEventListener('click', function hideFormRegister() {
    FormRegister.classList.remove('open');
})
FormDk.addEventListener('click', function(e) {
    e.stopPropagation()
})
chuyen_register.addEventListener('click', function showFormRegister() {
    FormRegister.classList.add('open');
    FormLogin.classList.remove('is-show');
})

function hideFormLogin() {
    FormLogin.classList.remove('is-show');
    lopphu.classList.remove('is-show');
    loginregister.classList.remove('is-show');
}

function hideFormRegister() {
    FormRegister.classList.remove('is-show');
    lopphu.classList.remove('is-show');
    loginregister.classList.remove('is-show');
}
LoginContainer.addEventListener('click', function(event) {
    event.stopPropagation()
})
RegisterContainer.addEventListener('click', function(e) {
    e.stopPropagation()
})



lopphu.addEventListener('click', hideFormLogin) //Click Khoảng không
lopphu.addEventListener('click', hideFormRegister) //Click Khoảng không

function Block(e) {
    e.classList.add('is-show');
}

function None(e) {
    e.classList.remove('is-show');
}
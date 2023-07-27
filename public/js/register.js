const togglePassword = document.querySelector("#togglePassword");
const togglePassword2 = document.querySelector("#togglePassword2");
const password = document.querySelector("#floatingPassword");
const password2 = document.querySelector("#floatingPassword2");
$("#togglePassword").click(function () {
    const type =
        password.getAttribute("type") === "password" ? "text" : "password";
    password.setAttribute("type", type);

    // toggle the eye icon
    this.classList.toggle("fa-eye");
});

$("#togglePassword2").click(function () {
    const type =
        password2.getAttribute("type") === "password" ? "text" : "password";
    password2.setAttribute("type", type);

    // toggle the eye icon
    this.classList.toggle("fa-eye");
});

// $(".btn-login").click(function () {
//     var email = $("#email").val();
//     var pwd = $("#floatingPassword").val();
//     var pwd2 = $("#floatingPassword2").val();

//     var regex_email = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
//     var regex_pwd = /^(?=.*[A-Za-z])(?=.*\d).{9,}$/;

//     if (!regex_email.test(email)) {
//         alert("Email is invalid, please try again!");
//         return false;
//     }

//     if (!regex_pwd.test(pwd)) {
//         alert("Password is invalid, please try again!");
//         return false;
//     }

//     if (pwd2 === pwd) {
//         return true;
//     }
// });

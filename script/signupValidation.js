let name = document.getElementById('name');
let email = document.getElementById('email');
let password = document.getElementById('password');
let confirmPassword = document.getElementById('confirmPassword');
let submitBtn = document.getElementById('submitBtn');

let nameError = document.getElementById('nameError');
let emailError = document.getElementById('emailError');
let passwordError = document.getElementById('passwordError');
let confirmPasswordError = document.getElementById('confirmPasswordError');

let cleanName = false;
let cleanEmail = false;
let cleanPassword = false;
let cleanConfirmPassword = false;

function validateName() {
    if (name.value.length < 4) {
        nameError.textContent = 'Your name must have at least 4 characters';
        nameError.style.visibility = 'visible';
        name.classList.add('wrong-input');
        name.classList.remove('valid-input');
        cleanName = false;
    } else {
        nameError.style.visibility = 'hidden';
        name.classList.add('valid-input');
        cleanName = true;
    }
    validate()
}

function validateEmail() {
    const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (!re.test(String(email.value).toLowerCase())) {
        emailError.style.visibility = 'visible';
        emailError.textContent = 'Please enter a valid email address';
        email.classList.add('wrong-input');
        email.classList.remove('valid-input');
        cleanEmail = false;

    } else {
        emailError.style.visibility = 'hidden';
        email.classList.add('valid-input');
        cleanEmail = true;
    }
    validate()
}

function validatePassword() {
    if (password.value.length < 6) {
        passwordError.textContent = 'Your Password must have at least 6 characters';
        passwordError.style.visibility = 'visible';
        password.classList.add('wrong-input');
        password.classList.remove('valid-input');
        cleanPassword = false;
    } else {
        passwordError.style.visibility = 'hidden';
        password.classList.add('valid-input');
        cleanPassword = true;
    }
    validate()
}

function validateConfirmPassword() {
    if (password.value.length < 1) {
        confirmPasswordError.textContent = 'You have not entered a password';
        password.classList.add('wrong-input');
        password.classList.remove('valid-input');
        confirmPasswordError.style.visibility = 'visible';
        cleanConfirmPassword = false;
    } else if (confirmPassword.value !== password.value) {
        confirmPasswordError.textContent = 'Your password do not match';
        confirmPasswordError.style.visibility = 'visible';
        confirmPassword.classList.add('wrong-input');
        confirmPassword.classList.remove('valid-input');
        cleanConfirmPassword = false;
    } else {
        confirmPasswordError.style.visibility = 'hidden';
        confirmPassword.classList.add('valid-input');
        cleanConfirmPassword = true;
    }
    validate()
}

function validate() {
    if (cleanName == true && cleanEmail == true && cleanPassword == true && cleanConfirmPassword == true) {
        submitBtn.removeAttribute('disabled');
    } else {
        submitBtn.setAttribute('disabled', 'disabled');
    }
}
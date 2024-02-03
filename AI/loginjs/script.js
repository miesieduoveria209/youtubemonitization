


function validateSignUpForm() {
    var username = document.getElementById('signup-username').value;
    var email = document.getElementById('signup-email').value;
    var password = document.getElementById('signup-password').value;

    // Perform additional client-side validation if needed

    return true; // To allow form submission
}

function validateLoginForm() {
    var username = document.getElementById('login-username').value;
    var password = document.getElementById('login-password').value;

    // Perform additional client-side validation if needed

    return true; // To allow form submission
}

document.getElementById('signUp').addEventListener('click', function () {
    document.getElementById('container').classList.add('right-panel-active');
});

document.getElementById('signIn').addEventListener('click', function () {
    document.getElementById('container').classList.remove('right-panel-active');
});

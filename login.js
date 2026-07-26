document.addEventListener("DOMContentLoaded", function() {
    const urlParams = new URLSearchParams(window.location.search);
    const alertBox = document.getElementById("alert-box");
    const authForm = document.getElementById("authForm");

    // Dynamic error handling display from backend URLs
    if (urlParams.has('error')) {
        let msg = "An error occurred.";
        const errorType = urlParams.get('error');
        
        if (errorType === 'invalid') msg = "Incorrect username or password.";
        if (errorType === 'usertaken') msg = "This Username/Email is already registered.";
        if (errorType === 'empty') msg = "Please fill out all required fields.";
        
        if(alertBox) {
            alertBox.innerHTML = `<div class="alert alert-danger py-2 small border-0 bg-danger text-white mb-3">${msg}</div>`;
        }
    }

    if (urlParams.has('signup') && urlParams.get('signup') === 'success') {
        if(alertBox) {
            alertBox.innerHTML = `<div class="alert alert-success py-2 small border-0 bg-success text-white mb-3">Registration Successful! Please login.</div>`;
        }
    }

    // Front-end strict password verification matching check for register.php
    if (authForm && document.getElementById("confirm_password")) {
        authForm.addEventListener("submit", function(e) {
            const pass = document.getElementById("password").value;
            const confirmPass = document.getElementById("confirm_password").value;

            if (pass !== confirmPass) {
                e.preventDefault();
                alertBox.innerHTML = `<div class="alert alert-danger py-2 small border-0 bg-danger text-white mb-3">Passwords do not match!</div>`;
            }
        });
    }
});
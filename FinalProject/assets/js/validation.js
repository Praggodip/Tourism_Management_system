document.addEventListener("DOMContentLoaded", function () {
    const registerForm = document.getElementById("registerForm");
    if (registerForm) {
        registerForm.addEventListener("submit", function (e) {
            const email = registerForm.email.value.trim();
            const phone = registerForm.phone.value.trim();
            const password = registerForm.password.value.trim();
 
            const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            const phonePattern = /^[0-9]{10}$/;
 
            if (!emailPattern.test(email)) {
                alert("Please enter a valid email address.");
                e.preventDefault();
                return;
            }
 
            if (!phonePattern.test(phone)) {
                alert("Phone number must be 10 digits.");
                e.preventDefault();
                return;
            }
 
            if (password.length < 6) {
                alert("Password must be at least 6 characters.");
                e.preventDefault();
                return;
            }
        });
    }
});
 
 
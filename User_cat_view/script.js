document.getElementById("personalForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Prevent default form submission
  
    let isValid = true;
  
    // Full Name Validation
    const name = document.getElementById("name").value.trim();
    if (name.length < 3) {
      document.getElementById("nameError").innerHTML = "Name must be at least 3 characters.";
      isValid = false;
    } else {
      document.getElementById("nameError").innerHTML = "";
    }
  
    // Email Validation
    const email = document.getElementById("email").value.trim();
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if (!emailPattern.test(email)) {
      document.getElementById("emailError").innerHTML = "Enter a valid email address.";
      isValid = false;
    } else {
      document.getElementById("emailError").innerHTML = "";
    }
  
    // Phone Validation
    const phone = document.getElementById("phone").value.trim();
    const phonePattern = /^[0-9]{10}$/;
    if (!phonePattern.test(phone)) {
      document.getElementById("phoneError").innerHTML = "Phone number must be 10 digits.";
      isValid = false;
    } else {
      document.getElementById("phoneError").innerHTML = "";
    }
  
    // Date of Birth Validation
    const dob = document.getElementById("dob").value;
    if (!dob || new Date(dob) >= new Date()) {
      document.getElementById("dobError").innerHTML = "Please enter a valid past date of birth.";
      isValid = false;
    } else {
      document.getElementById("dobError").innerHTML = "";
    }
  
    // Gender Validation
    const genderOptions = document.getElementsByName("gender");
    let genderSelected = false;
    for (let option of genderOptions) {
      if (option.checked) {
        genderSelected = true;
        break;
      }
    }
    if (!genderSelected) {
      document.getElementById("genderError").innerHTML = "Please select your gender.";
      isValid = false;
    } else {
      document.getElementById("genderError").innerHTML = "";
    }
  
    if (isValid) {
      alert("Form submitted successfully!");
      this.submit(); // Proceed with submission if valid
    }
  });
  
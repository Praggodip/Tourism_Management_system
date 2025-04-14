document.getElementById("personalForm").addEventListener("submit", function (event) {

    event.preventDefault();
  
    let isValid = true;
   
    
  
    const name = document.getElementById("name").value.trim();
  
    const email = document.getElementById("email").value.trim();
  
    const phone = document.getElementById("phone").value.trim();
  
    const dob = document.getElementById("dob").value;
  
    const address = document.getElementById("address").value.trim();
   
    
  
    document.getElementById("nameError").innerHTML = "";
  
    document.getElementById("emailError").innerHTML = "";
  
    document.getElementById("phoneError").innerHTML = "";
  
    document.getElementById("dobError").innerHTML = "";
  
    document.getElementById("addressError").innerHTML = "";
   
    
  
    if (name.length < 3) {
  
      document.getElementById("nameError").innerHTML = "Full Name must be at least 3 characters.";
  
      isValid = false;
  
    }
   
    
  
    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
  
    if (!emailPattern.test(email)) {
  
      document.getElementById("emailError").innerHTML = "Please enter a valid email address.";
  
      isValid = false;
  
    }
   
    
  
    const phonePattern = /^[0-9]{10}$/;
  
    if (!phonePattern.test(phone)) {
  
      document.getElementById("phoneError").innerHTML = "Phone number must be 10 digits.";
  
      isValid = false;
  
    }
   
    
  
    const today = new Date().toISOString().split("T")[0];
  
    if (!dob || dob >= today) {
  
      document.getElementById("dobError").innerHTML = "Please enter a valid date of birth.";
  
      isValid = false;
  
    }
   
    
  
    if (address.length < 10) {
  
      document.getElementById("addressError").innerHTML = "Address must be at least 10 characters.";
  
      isValid = false;
  
    }
   
    
  
    if (isValid) {
  
      this.submit(); 
  
    }
  
  });
  
   
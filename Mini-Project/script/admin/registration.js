function validateID() {
    var id = document.getElementById('id').value;
    if(id == null || id == undefined || id == '') {
      alert('ID is required');
      return;
    }
    if(id.length < 1) {
      alert('Name should be at least 1 characters long');
      return;
    }
}

function validateEmail() {
  var email = document.getElementById('email').value;
  if(email == null || email == undefined || email == '') {
    alert('Email is required');
    return;
  }

  var mailFormatRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  if(!email.match(mailFormatRegex)) {
    alert("Invalid email address");
    return ;
  }
}


function validatePassword() {
    var password = document.getElementById('password').value;
    if(password == null || password == undefined || password == '') {
      alert('Password is required');
      return;
    }
  
    if(password.length < 4) {
      alert('Password should be at least 4 characters long');
      return;
    }
  }
  
  function validateConfirmPassword() {
    var confirmPassword = document.getElementById('confirmPassword').value;
    if(confirmPassword == null || confirmPassword == undefined || confirmPassword == '') {
      alert('Confirm Password is required');
      return;
    }
  
    if(confirmPassword.length < 4) {
      alert('Confirm Password should be at least 4 characters long');
      return;
    }
  
    var password = document.getElementById('password').value;
    if(password != confirmPassword) {
      alert('Password and confirm password do not match');
      return;
    }
  }
  
function validateName() {
    var name = document.getElementById('name').value;
    if(name == null || name == undefined || name == '') {
      alert('Name is required');
      return;
    }
    if(name.length < 2) {
      alert('Name should be at least 2 characters long');
      return;
    }
}

// function resetRegistration(){
//   document.getElementById('name').value = '';
//   document.getElementById('email').value = '';
//   document.getElementById('password').value = '';
//   document.getElementById('confirmPassword').value = '';
//   document.getElementById('male').checked = false ;
//   document.getElementById('female').checked = false;
//   document.getElementById('other').checked = false;
//   document.getElementById('dob').value = '';
// }
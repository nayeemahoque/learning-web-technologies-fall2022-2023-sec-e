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
    
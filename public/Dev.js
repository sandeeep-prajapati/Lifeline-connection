document.addEventListener('DOMContentLoaded', function() {
    const loginForm = document.getElementById('login-form');
    const dashboard = document.getElementById('dashboard');
    const doctorName = document.getElementById('doctor-name');
    const logoutButton = document.getElementById('logout-btn');

    loginForm.addEventListener('submit', function(event) {
      event.preventDefault();
      const username = document.getElementById('username').value;
      const password = document.getElementById('password').value;
  
      if (username == 'dr x' && password == '12345') {
        loginForm.reset(); 
        loginForm.style.display = 'none'; 
        dashboard.style.display = 'block'; 
        doctorName.textContent = username; 
      } else {
        alert('Invalid username or password. Please try again.');
      }
    });
  
    
    logoutButton.addEventListener('click', function() {
      dashboard.style.display = 'none'; 
      loginForm.style.display = 'block'; 
    });
  });
  
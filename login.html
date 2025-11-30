<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport" content="width=device-width, initial-scale=1" />
 <title>Login Portal</title>




 <style>
   * {
     box-sizing: border-box;
     margin: 0;
     padding: 0;
   }




   body {
     font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
     height: 100vh;
     display: flex;
     justify-content: center;
     align-items: center;
     background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
     color: #333;
   }




   .login-container {
     background: #fff;
     padding: 40px 30px;
     border-radius: 15px;
     box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
     width: 100%;
     max-width: 400px;
     text-align: center;
     transition: transform 0.3s ease, box-shadow 0.3s ease;
   }




   .login-container:hover {
     transform: translateY(-5px);
     box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
   }




   h2 {
     margin-bottom: 30px;
     color: #4a4a4a;
     font-size: 28px;
     font-weight: 600;
   }




   form {
     display: flex;
     flex-direction: column;
   }




   label {
     text-align: left;
     margin-bottom: 8px;
     font-weight: 500;
     color: #666;
     font-size: 14px;
   }




   input[type="text"],
   input[type="password"] {
     padding: 15px;
     margin-bottom: 20px;
     border: 2px solid #e1e5e9;
     border-radius: 8px;
     font-size: 16px;
     transition: border-color 0.3s ease, box-shadow 0.3s ease;
     background: #f9f9f9;
   }




   input:focus {
     outline: none;
     border-color: #667eea;
     box-shadow: 0 0 10px rgba(102, 126, 234, 0.3);
     background: #fff;
   }




   button {
     padding: 15px;
     background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
     border: none;
     border-radius: 8px;
     color: white;
     font-size: 18px;
     font-weight: 600;
     cursor: pointer;
     transition: background 0.3s ease, transform 0.2s ease;
     margin-top: 10px;
   }




   button:hover {
     background: linear-gradient(135deg, #5a6fd8 0%, #6a4190 100%);
     transform: translateY(-2px);
   }




   button:active {
     transform: translateY(0);
   }




   .login-footer {
     margin-top: 20px;
     font-size: 14px;
     color: #888;
   }




   .login-footer a {
     color: #667eea;
     text-decoration: none;
     font-weight: 500;
   }




   .login-footer a:hover {
     text-decoration: underline;
   }




   .error {
     color: #e74c3c;
     margin-bottom: 15px;
     font-weight: 500;
     background: #fdf2f2;
     padding: 10px;
     border-radius: 5px;
     border-left: 4px solid #e74c3c;
   }




   .success {
     color: #27ae60;
     margin-bottom: 15px;
     font-weight: 500;
     background: #f2fdf2;
     padding: 10px;
     border-radius: 5px;
     border-left: 4px solid #27ae60;
   }




   .logout {
     margin-top: 20px;
   }




   .logout a {
     display: inline-block;
     color: #fff;
     background: linear-gradient(135deg, #e74c3c 0%, #c0392b 100%);
     padding: 12px 20px;
     border-radius: 8px;
     text-decoration: none;
     font-weight: 600;
     transition: background 0.3s ease, transform 0.2s ease;
   }




   .logout a:hover {
     background: linear-gradient(135deg, #c0392b 0%, #a93226 100%);
     transform: translateY(-2px);
   }




   .logout a:active {
     transform: translateY(0);
   }




   @media (max-width: 480px) {
     .login-container {
       padding: 30px 20px;
       margin: 20px;
     }




     h2 {
       font-size: 24px;
     }




     input[type="text"],
     input[type="password"] {
       padding: 12px;
       font-size: 14px;
     }




     button {
       padding: 12px;
       font-size: 16px;
     }
   }
 </style>
</head>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Portal</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<div id="login-container" class="login-container">
  <h2>Login Portal</h2>
  <p id="error" class="error" style="display:none;"></p>

  <form id="loginForm">
    <label for="username">Username</label>
    <input type="text" id="username" placeholder="Enter username" required />

    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Enter password" required />

    <button type="submit">Log In</button>
  </form>

  <div class="login-footer">
    <p><a href="index.html" style="color:#007bff; text-decoration:none;">Back to Home</a></p>
  </div>
</div>

<div id="welcome-container" class="login-container" style="display:none;">
  <h2 class="success">Welcome, <span id="usernameDisplay"></span></h2>
  <p>You are successfully logged in.</p>

  <div class="logout">
    <button id="logoutBtn">Logout</button>
  </div>
</div>

<script>
// ✨ SAME USERS AS YOUR PHP CODE
const users = {
  "atulya": "pass123",
  "admin": "admin@123",
  "guest": "guest2025",
  "developer": "dev456",
  "tester": "test789"
};

// Check login status on page load
window.onload = () => {
  const loggedUser = localStorage.getItem("user");
  if (loggedUser) {
    showWelcome(loggedUser);
  }
};

// Handle login form submit
document.getElementById("loginForm").addEventListener("submit", function(e) {
  e.preventDefault();

  const username = document.getElementById("username").value.trim();
  const password = document.getElementById("password").value.trim();
  const error = document.getElementById("error");

  if (users[username] && users[username] === password) {
    localStorage.setItem("user", username);
    showWelcome(username);
  } else {
    error.textContent = "Invalid username or password";
    error.style.display = "block";
  }
});

// Show welcome screen
function showWelcome(username) {
  document.getElementById("login-container").style.display = "none";
  document.getElementById("welcome-container").style.display = "block";
  document.getElementById("usernameDisplay").textContent = username;
}

// Handle logout
document.getElementById("logoutBtn").addEventListener("click", () => {
  localStorage.removeItem("user");
  location.reload();
});
</script>

</body>
</html>

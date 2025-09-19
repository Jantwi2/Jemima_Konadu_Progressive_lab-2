    <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(135deg, #74ebd5, #9face6);
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      margin: 0;
    }

    .card {
      background: #fff;
      padding: 30px 40px;
      border-radius: 10px;
      box-shadow: 0 6px 18px rgba(0,0,0,0.15);
      width: 350px;
      text-align: center;
    }

    h1 {
      margin-bottom: 20px;
      font-size: 24px;
      color: #333;
    }

    label {
      display: block;
      margin: 12px 0 6px;
      font-size: 14px;
      text-align: left;
      color: #555;
    }

    input {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
    }

    input:focus {
      outline: none;
      border-color: #007BFF;
      box-shadow: 0 0 4px rgba(0,123,255,0.4);
    }

    button {
      margin-top: 20px;
      padding: 10px 20px;
      width: 100%;
      background: #007BFF;
      color: #fff;
      font-size: 16px;
      font-weight: bold;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #0056b3;
    }

    #loading {
      margin-top: 12px;
      color: #555;
      font-size: 14px;
    }

    #message {
      margin-top: 12px;
      font-size: 14px;
    }
  </style>
</head>
<body>
  <div class="card">
    <h1>Create Account</h1>
    <form id="registerForm">
      <label>Full Name:</label>
      <input type="text" name="fullname" required maxlength="100">

      <label>Email:</label>
      <input type="email" name="email" required maxlength="150">

      <label>Password:</label>
      <input type="password" name="password" required minlength="6">

      <label>Country:</label>
      <input type="text" name="country" required maxlength="50">

      <label>City:</label>
      <input type="text" name="city" required maxlength="50">

      <label>Contact Number:</label>
      <input type="tel" name="contact" required maxlength="15">

      <!-- Hidden defaults -->
      <input type="hidden" name="role" value="2">

      <button type="submit" id="registerBtn">Register</button>
      <div id="loading" style="display:none;">Registering...</div>
      <div id="message"></div>
    </form>
  </div>

  <script src="../js/register.js"></script>
</body>
</html>

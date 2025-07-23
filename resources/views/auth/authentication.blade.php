<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration Form</title>
    <link rel="stylesheet" href="{{ asset('signup/css/signup.css') }}">
</head>
<body>

    <div class="hero">
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Login</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
                <img src="https://i.postimg.cc/kGrgFySk/fb.png" alt="logo">
                <img src="https://i.postimg.cc/PfZxfBsh/tw.png" alt="logo">
                <img src="https://i.postimg.cc/4yzN8hbn/gp.png" alt="logo">
            </div>
            <form action="#" class="input-group" id="login">
                <input type="email" class="input-field" placeholder="Email" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>Remember Password</span>
                <button type="submit" class="submit-btn">Login</button>
            </form>
            <form action="#" class="input-group" id="register">
                <input type="text" class="input-field" placeholder="Full Name" required>
                <input type="email" class="input-field" placeholder="Email ID" required>
                <input type="text" class="input-field" placeholder="Enter Password" required>
                <input type="checkbox" class="check-box"><span>I agree to the terms & conditions</span>
                <button type="submit" class="submit-btn">Register</button>
            </form>
        </div>
    </div>

    <script>
        var x = document.getElementById('login');
        var y = document.getElementById('register');
        var z = document.getElementById('btn');

        function register() {
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }

        function login() {
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0";
        }

    </script>
</body>
</html>

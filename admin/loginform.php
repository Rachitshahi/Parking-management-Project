
<?php
require '../config/function.php';

if(isset($_SESSION['auth']))
{
    redirect('index.php','You are already logged in');
}
?>

<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Quicksand');

        * {
            font-family: 'quicksand', Arial, Helvetica, sans-serif;
            box-sizing: border-box;
        }

        body {
            background: #fff;
        }

        .form-modal {
            position: relative;
            width: 450px;
            height: auto;
            margin-top: 4em;
            left: 50%;
            transform: translateX(-50%);
            background: #fff;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1)
        }

        .form-modal button {
            cursor: pointer;
            position: relative;
            text-transform: capitalize;
            font-size: 1em;
            z-index: 2;
            outline: none;
            background: #fff;
            transition: 0.2s;
        }

        .form-modal .btn {
            border-radius: 20px;
            border: none;
            font-weight: bold;
            font-size: 1.2em;
            padding: 0.8em 1em 0.8em 1em !important;
            transition: 0.5s;
            border: 1px solid #ebebeb;
            margin-bottom: 0.5em;
            margin-top: 0.5em;
        }

        .form-modal .login,
        .form-modal .signup {
            background: #cb0c9f;
            color: #fff;
        }

        .form-modal .login:hover,
        .form-modal .signup:hover {
            background: #222;
        }

        .form-toggle {
            position: relative;
            width: 100%;
            height: auto;
        }

        .form-toggle button {
            width: 50%;
            float: left;
            padding: 1.5em;
            margin-bottom: 1.5em;
            border: none;
            transition: 0.2s;
            font-size: 1.1em;
            font-weight: bold;
            border-top-right-radius: 20px;
            border-top-left-radius: 20px;
        }

        .form-toggle button:nth-child(1) {
            border-bottom-right-radius: 20px;
        }

        .form-toggle button:nth-child(2) {
            border-bottom-left-radius: 20px;
        }

        #login-toggle {
            background: #cb0c9f;
            color: #ffff;
        }

        .form-modal form {
            position: relative;
            width: 90%;
            height: auto;
            left: 50%;
            transform: translateX(-50%);
        }

        #login-form,
        #signup-form {
            position: relative;
            width: 100%;
            height: auto;
            padding-bottom: 1em;
        }

        #signup-form {
            display: none;
        }


        #login-form button,
        #signup-form button {
            width: 100%;
            margin-top: 0.5em;
            padding: 0.6em;
        }

        .form-modal input {
            position: relative;
            width: 100%;
            font-size: 1em;
            padding: 1.2em 1.7em 1.2em 1.7em;
            margin-top: 0.6em;
            margin-bottom: 0.6em;
            border-radius: 20px;
            border: none;
            background: #ebebeb;
            outline: none;
            font-weight: bold;
            transition: 0.4s;
        }

        .form-modal input:focus,
        .form-modal input:active {
            transform: scaleX(1.02);
        }

        .form-modal input::-webkit-input-placeholder {
            color: #222;
        }


        .form-modal p {
            font-size: 16px;
            font-weight: bold;
        }

        .form-modal p a {
            color: #cb0c9f;
            text-decoration: none;
            transition: 0.2s;
        }

        .form-modal p a:hover {
            color: #222;
        }


        .form-modal i {
            position: absolute;
            left: 10%;
            top: 50%;
            transform: translateX(-10%) translateY(-50%);
        }

        .fa-google {
            color: #dd4b39;
        }

        .fa-linkedin {
            color: #3b5998;
        }

        .fa-windows {
            color: #0072c6;
        }

        .-box-sd-effect:hover {
            box-shadow: 0 4px 8px hsla(210, 2%, 84%, .2);
        }

        @media only screen and (max-width:500px) {
            .form-modal {
                width: 100%;
            }
        }

        @media only screen and (max-width:400px) {
            i {
                display: none !important;
            }
        }
    </style>
</head>

<body>
    <div class="form-modal">

        <div class="form-toggle">
            <button id="login-toggle" onclick="toggleLogin()">log in</button>
            <button id="signup-toggle" onclick="toggleSignup()">sign up</button>
        </div>

        <div id="login-form">

            <?= alertMessage(); ?>

            <form method="POST" action="login-code.php">
                <input type="text" placeholder="Enter email" name="email" />
                <input type="password" placeholder="Enter password" name="password" />
                <input type="submit" class="btn login" value="login" name="login">
            </form>
        </div>

        <div id="signup-form">
            <form method="POST" action="signup-code.php" onsubmit="submitHandler()" autocomplete="on">
            <input type="text" placeholder="Choose username" name="username" required />
                <input type="text" placeholder="Enter your full name" name="name" required />
                <input type="email" placeholder="Enter your email" name="email" required />
                <input type="number" id="phone" placeholder="Enter your phone number" name="phone" required />
                <input type="password" id="pass" placeholder="Create password" name="password" required />
                <input type="submit" class="btn signup" name="signup" value="create account" onclick="submitHandler()">
                <!-- <p>Clicking <strong>create account</strong> means that you are agree to our <a href="javascript:void(0)">terms of services</a>.</p> -->
                <hr />

            </form>
        </div>

    </div>

    <script>
        let ok = 1;
        function toggleSignup() {
            document.getElementById("login-toggle").style.backgroundColor = "#fff";
            document.getElementById("login-toggle").style.color = "#222";
            document.getElementById("signup-toggle").style.backgroundColor = "#cb0c9f";
            document.getElementById("signup-toggle").style.color = "#000";
            document.getElementById("login-form").style.display = "none";
            document.getElementById("signup-form").style.display = "block";
        }

        function toggleLogin() {
            document.getElementById("login-toggle").style.backgroundColor = "#cb0c9f";
            document.getElementById("login-toggle").style.color = "#fff";
            document.getElementById("signup-toggle").style.backgroundColor = "#fff";
            document.getElementById("signup-toggle").style.color = "#222";
            document.getElementById("signup-form").style.display = "none";
            document.getElementById("login-form").style.display = "block";
        }

        function submitHandler() {
            let pass = document.getElementById("pass");
            let passval = pass.value;
            let rpass = document.getElementById("rpass");
            let rpassval = rpass.value;
            let phone = document.getElementById("phone");
            let phoneval = phone.value;
            let ok = 1;

            if (phoneval.length != 10) {
                ok = 0;
                document.getElementById("phone").style.border = " solid 1px #ff0000";
                document.getElementById("phone").focus();

            }
            else {
                phone.style.border = " 0px";
            }
            if (passval.length < 6) {
                ok = 0;
                pass.style.border = " solid 1px #ff0000";
                rpass.style.border = " solid 1px #ff0000";
                document.getElementById("pass").focus();
                alert("!!Enter atleast 6 digits for password!!");
            } else {
                pass.style.border = "0px";
                rpass.style.border = "0px";
            }
            if (passval.toString() !== rpassval.toString()) {
                ok = 0;
                document.getElementById("rpass").focus();
                document.getElementById("pass").style.border = "solid 1px #ff0000";
                rpass.style.border = "solid 1px #ff0000";

            }
            else {
                pass.style.border = "0px";
                rpass.style.border = "0px";
            }

            if (ok == 0) {
                event.preventDefault();
            }
        }


    </script>
</body>
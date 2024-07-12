<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet">
    <title>WEBSITE</title>
    <script src="js/script.js" defer></script>
    <script src="js/validation.js" defer></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/error.css">
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <span class="menu_btn material-symbols-outlined">menu</span>
                <a href="index.html" class="logo">
                    <img src="img/logo.jpg" alt="logo">
                    <h2>Sample Website</h2>
                </a>
                <ul class="links">
                    <span class="close_btn material-symbols-outlined">close</span>
                    <li><a href="home.php">Home</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <button class="login_btn">Log in</button>
            </nav>
        </div>
    </header>

    <div class="blur-bg-overlay"></div>

    <div class="form_popup">
        <!-- login -->
        <span class="close_btn material-symbols-outlined">close</span>
        <div class="form_box login">
            <div class="form_details">
                <h2>Welcome Back</h2>
                <p>Please Login using your Personal Information to stay connected with us.</p>
            </div>
            <div class="form_content">
                <h2>LOGIN</h2>
                <form action="#">
                    <div class="input_field">
                        <input type="text" required>
                        <label>Email</label>
                    </div>
                    <div class="input_field login">
                        <input type="password" id="lpassword" required autocomplete="off">
                        <label>Password</label>
                        <div class="show-hide toggle" onclick="showhide();"></div>
                    </div>
                    <div class="middle_link">
                    <a href="#" id="ForgetPassword_links">Forgot Password?</a>
                    </div>
                    <button type="submit">Log In</button>
                </form>
                <div class="bottom_link">
                    Don't have an account?
                    <a href="#" id="signup_link">Sign up</a>
                </div>
            </div>
        </div>

        <!-- sign up -->
        <div class="form_box SignUp">
            <div class="form_details">
                <h2>Create Account</h2>
                <p>Want to become part of our community? Please Sign up</p>
            </div>
            <div class="form_content">
                <h2>SIGNUP</h2>
                <form method="#" id="signup_form" onsubmit="return validatePassword()">
                    <div class="input_field sucess">
                        <input type="text" id="signupEmail" autocomplete="off" required >
                        <label>Enter your Email</label>
                            <div class="error-label">
                                <small>Invalid Email</small>
                            <i class="fa fa-exclamation-circle"></i>
                            </div>
                    </div>
                    <div class="input_field">
                        <input type="text" id="signup_username"  autocomplete="off" required>
                        <label>Enter your Username</label>
                    </div>
                    <div class="input_field">
                        <input type="password" id="cpassword" required>
                        <label>Create Password</label>
                        <div class="show-hide toggle" onclick="showhide();"></div>
                    </div>
                    <div class="input_field">
                        <input type="password" id="cfPassword" required>
                        <label>Confirm Password</label>
                        <div class="show-hides toggle" onclick="show_hide();"></div>
                    </div>
                    <div class="policy-text">
                        <input type="checkbox" id="policy" required>
                        <label for="policy">I agree to the <a href="#" id="termsLink">terms & Conditions</a></label>
                    </div>
                    <button type="submit" id="submit" name="SignUp">Sign Up</button>
                </form>
                <div class="bottom_link">
                    Already have an account?
                    <a href="#" id="login_link">Log in</a>
                </div>
            </div>
        </div>
        <!-- Forgot Password -->
        <div class="form_box fgPassword">
            <div class="form_details">
                <h2>Your Forgot your Password?</h2>
                <p>Please Login Your Email</p>
            </div>
            <div class="form_content">
                <h2>Forgot Password</h2>
                <form action="#">
                <div class="input_field">
                        <input type="text" autocomplete="off" required >
                        <label>Enter your Email</label>
                    </div>
                    <button type="submit" id="code">Send Code</button>
                </form>
                <div class="bottom_link">
                    Do you want to 
                    <a href="#" id="login_link">log in?</a>
                </div>
            </div>
        </div>

        <!-- code -->
        <div class="form_box code">
            <div class="form_details">
                <h2>Code</h2>
                <p>Your code while be receipt at the moment</p>
            </div>
            <div class="form_content">
                <h2>Code</h2>
                <form action="#">
                    <div class="input_field">
                        <input type="text" required>
                        <label>Please Enter your Code</label>
                    </div>
                    <button  type="submit">Submit</button>
                </form>
                <div class="bottom_link">
                    Do you want to 
                    <a href="#" id="login_link">resend again?</a>
                </div>
            </div>
        </div>
        </div>
    </div> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons+Outlined" rel="stylesheet">
    <title>WEBSITE</title>
    <script src="js/script.js" defer></script>
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <nav class="navbar">
        <span class="menu_btn material-icons-outlined" >menu</span>
        <a href="index.html" class="logo">
            <img src="img/logo.jpg" alt="logo">
            <h2>Sample Website</h2>
        </a>
        <ul class="links">
            <span class="close_btn material-icons-outlined">close</span>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Portfolio</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <img class="user" src="img/user.png" onclick="profileMenu();">

        <div class="sub_menu_wrap" id="subMenu">
            <div class="sub_menu">
                <div class="user_info">
                    <img src="img/user.png" alt="user">
                    <h2>Username</h2>
                </div>
                <hr>

                <a href="#" class="sub_menu_link">
                    <img src="img/edit.png" alt="edit">
                    <p>Edit Profile</p>
                    <span>&gt;</span>
                </a>

                <a href="#" class="sub_menu_link">
                    <img src="img/sign-out.png" alt="sign-out">
                    <p>Log out</p>
                    <span>&gt;</span>
                </a>
            </div>
        </div>
    </nav>
</div>
</body>
</html>

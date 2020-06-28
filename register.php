<?php include('functions.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Register a new account</title>
    <meta name="description" content="Register a new account on the NPS Crime Stoppers Reporting System.">
    <meta name="keywords" content="police, crime, crime report, crimestoppers,">
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <main>
        <header>
            <div class="logo">
                <div class="logo_img">
                    <img src="img/logo.png" alt="PNP Logo" height="auto" width="13%"></img>
                </div>
                <div class="logo_text">
                    <h1><a class="logo_colour" href="#">CrimeSTOPPERS</a></h1>
                    <h2>National Police Service</h2>
                </div>
            </div>
            <nav>
                <ul id="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="anonymous/anonymous.php">Report</a></li>
                    <li><a href="login.php">Login</a></li>
                    <li class="selected"><a href="register.php">Register</a></li>
                    <li style="float: right;"><a href="#">Contact Us</a></li>
                </ul>
            </nav>
        </header>
        <section class="login_form">
           <form method="post" action="register.php">
               <?php echo display_error(); ?>

               <section class="inputs">
                   <label for="username">Username</label>
                   <input type="text" name="username" value="<?php echo $username; ?>" required>
                   
                   <label for="email">Email</label>
                   <input type="email" name="email" placeholder="email@domain.com" value="<?php echo $email; ?>" required>
                   
                   <label for="password_1">Password</label>
                   <input type="password" name="password_1" required>

                   <label for="password_2">Confirm password</label>
                   <input type="password" name="password_2" required>

                   <span><a class="register" href="login.php">Login Instead</a></span>
               </section>
                    <button type="submit" class="btn" name="register_btn">Register</button>
            </form>
        </section>
    </main>
</body>

</html>
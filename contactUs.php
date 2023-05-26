<?php
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    // checking if the user has clicked the button
    if(isset($_POST['action'])){
        $name = $_POST['name']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone'];
        $message = $_POST['message'];
        echo "Thank you. We will get back to you as soon as possible";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mystyles.css">
    <title>Contact Us</title>
</head>
<body>
    <!-- Logo -->
    <div id="logo">
    <a href="index.html"><img src="images/logo.png" alt="TipToe Soles logo" width="200px" height="200px"></a>
    </div>

    <!-- Link to wishlist page -->
    <div id="wishlist-icon">
        <a href="wishlist.html"><img src="images/wishlist.png" alt="Wishlist icon"></a>
    </div>

    <!-- Link to login page -->
    <div id="login-icon">
        <a href="login.html"><img src="images/login.png" alt="login icon"></a>
    </div>

    <!-- Search button-->
    <form class="search">
        <input type="text" placeholder="Search.." name="search">
        <button type="search"><i class="fa fa-search"></i></button>
    </form>

    <!-- Navigation menu -->
    <nav role="navigation">
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="products.html">Products</a></li> 
            <li><a href="services.html">Services</a></li> 
            <li><a href="aboutUs.html">About Us</a></li> 
            <li><a href="contactUs.php">Contact Us</a></li>    
            <li><a href="login.html">Login</a></li>           
        </ul>
    </nav>

    <div id="contact-form">
    <!-- Contact form heading -->
    <h1 style="margin-left:10px;">Get in touch with us!</h1>

    <!-- Contact form -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"> 
        
        <!-- Name -->
        <div class="row">
            <label for="name">Name:</label>
            <input type="text" require id="name" name="name">
        </div>

        <!-- Email -->
        <div class="row">
            <label for="email">Email:</label>
            <input type="email" require id="email" name="email">
        </div>

        <!-- Phone number -->
        <div class="row">
            <label for="phone">Phone number: </label>
            <input type="text" require id="phone" name="phone">
        </div>

        <!-- Message-->
        <div class="row">
            <label for="message">Type us a message:</label>
            <input type="text" id="message" name="name">
        </div>

        <!-- send button -->
        <input type="submit" value="send" name="action">
    </form>
    </div>

    <div id="contact-details">
        <h1>Other ways to get in touch</h1>
        <p>
        <div class="contact-header">
        Address:<br>
        </div>
        322 Avondale Road<br>
        Enfield NSW 2133
        </p>

        <div class="contact-header">
        Cusotmer service:<br>
        </div>
        Telephone: 02 9210 5000<br>
        Email us at: TipToeShoes@gmail.com
    </div>

    <!-- Footer -->
    <footer> 
        <nav id="footerLinks">
            <ul>
                <li><a href="delivery.html">Delivery policy</a></li>
                <li><a href="return.html">Returns and exchanges policy</a></li>
            </ul>
        </nav>
        <p>Copyright &copy; TipToe Soles 2022</p>
    </footer>
</body>
<!doctype html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="fonts/stylesheet.css">
        <link rel="stylesheet" type="text/css" href="index.css">
        <link rel="stylesheet" type="text/css" href="nav.css">
        <link rel="stylesheet" type="text/css" href="ambassador.css">
        <script src="ambassador.js"></script> 
    </head>
    <body>
        <div id="nav-bar">
            <div id="logo">
                <a href="index.html"><img src="img/logo.png"></a>
                <a href="index.html"><h2>Pebble</h2></a>
            </div>
            <ul id="nav-menu">
                <li><a href="index.html">Home</a></li>
                <li><a href="products.html">Products</a></li>
                <li class="active"><a href="ambassador.php">Brand Ambassador</a></li>
                <li><a href="feedback.html">Feedback</a></li>
                <li><a href="contact.html">Contact</a></li>   
            </ul>
        </div>

        <div id="banner">
            <img src="img/pebblebanner.png">
        </div>


        <div id="ambassador-form">
            <h1>Apply to be a brand ambassador.</h1>
            <p> We're psyched that you want to represent Pebble! Fill out the information below and we'll reach out to you once we review your application.</p>
            <form action="?action=send" method="post">
                <label>Name: </label>
                <input type="text" id="fname" name="name" placeholder="Name">
            
                <label>Instagram Handle: </label>
                <input type="text" id="handle" name="handle" placeholder="@your.handle">

                <label>Email: </label>
                <input type="text" id="email" name="email" placeholder="E-mail">

                <label>Why would you be a good addition to our team? </label>
                <textarea rows="5" id="why" placeholder="Because..."></textarea>

                <input type="submit" value="send">
            </form>
            
            <!-- <form action="?action=save" name="myform" method="post">
                <input type=text name="mytext">
                <input type="submit" value="save">
            </form> -->
        </div>

        <div id="footer">
            <ul>
                <li> <img src="img/instagram-logo.png"> <h3> @pebble.gear </h3></li>
                <li> <img src="img/email-logo.png"> <h3> contact.pebble.gear@gmail.com </h3></li>
                <li> <img src="img/store-logo.png"> <h3> https://www.etsy.com/shop/PebbleGear </h3></li>
                <li> <img src="img/photo-logo.png"> <h3> Photo Credits </h3></li>
            </ul>
        </div>

    </body>
</html>
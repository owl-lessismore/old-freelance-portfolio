<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../img/my-logo-icon.png">
    <title>Portfolio | Contact</title>
</head>
<body>
    <header>   
        <nav>
            <img src="../img/my-logo.svg" alt="My Robot">
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../html/project.html">Project</a></li>
                <li><a href="../html/contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <section class="contact-sec">
        <div class="container conheight-5">
            <form action="../php/contactDB.php" method="POST" onSubmit = "return validateContact();">
                <div class="contact">
                    <h1>Get in Touch</h1>
                    <div class="input_field">
                    <input type="text" placeholder="Name" class="input" name="fullname" id="fullnameID">
                    </div>
                    <div class="input_field">
                    <input type="email" placeholder="Email" class="input" name="email" id="emailID">
                    </div>
                    <div class="input_field">
                    <textarea cols="30" rows="10" placeholder="Message..." class="input" name="message" id="messageID"></textarea>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Send Message" class="btn-send">
                    </div>
                </div>
            </form>
        </div>
    </section>
    <footer>
        <p>© Darwin Serocefino. All rights reserved.</p>
    </footer>
    <script src="../js/validate.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="Posttest4.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <a href=""><img src="cat logo.png" class="img"></a>
        </div>
        <div class="menu-items">
            <a href="Posttest4.php">Home</a>
            <img src="moon.png" alt="" id="icon">
        </div>
    </nav>

    <section class="contact-sec">
        <div class="container-form">
            <h1>Contact Us</h1>
            <p>If You Find A Cat That Needs Help <br> Please Contact Us</p>
            <form action="output.php" method="POST" enctype="multipart/form-data">
                <label for="name">Name :</label>
                <input type="text" name="name" id="name" required>
                <label for="email">Email :</label>
                <input type="email" name="email" id="email" required>
                <label for="number">No.Telp :</label>
                <input type="tel" name="phone" id="tel" required>
                <label for="message">Message:</label>
                <textarea id="message" name="message" rows="4" required></textarea>
                <label for="image">Upload Image:</label>
                <input type="file" id="image" name="image" accept="image/*">
                <button type="submit">SEND</button>
            </form>
        </div>

      
    </section>
    <footer class="site-footer">
        <div class="footer-content">
            <p>&copy; 2023 Cat Guardians. All rights reserved.</p>
        </div>
    </footer>

    <script src="Posttest4.js"></script>
</body>
</html>

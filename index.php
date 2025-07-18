<?php
// index.php - Main Page for Saving Strays
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saving Strays</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to top, #A0522D, #FFDEAD);
            color: white;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        header {
            background: rgba(0, 0, 0, 0.3);
            padding: 20px;
        }
        header img {
            width: 100px;
        }
        nav ul {
            list-style: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin: 0 15px;
        }
        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        main {
            padding: 50px;
        }
        footer {
            background: rgba(0, 0, 0, 0.3);
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <header>
        <img src="logo.png" alt="Saving Strays Logo">
        <h1>Saving Strays</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="animals.php">Rescued Animals</a></li>
                <li><a href="adoption.php">Adoption</a></li>
                <li><a href="donations.php">Donations</a></li>
                <li><a href="volunteers.php">Volunteers</a></li>
                <li><a href="community.php">Community Mapping</a></li>
                <li><a href="directory.php">Online Directory</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Welcome to Saving Strays</h2>
            <p>Your one-stop platform for helping stray animals find loving homes.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Saving Strays. All rights reserved.</p>
    </footer>
</body>
</html>

<?php
session_start();

// Check if the user is logged in
if (isset($_SESSION['prenom'])) {
    $prenom = $_SESSION['prenom'];
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Creation - Welcome</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            width: 80%;
            margin: 0 auto;
        }
        .navbar {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
        }
        .navbar .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar .logo {
            font-size: 24px;
            text-transform: uppercase;
            color: #fff;
            text-decoration: none;
        }
        .navbar .nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }
        .navbar .nav-item {
            margin-left: 20px;
        }
        .navbar .nav-link {
            text-decoration: none;
            color: #fff;
            text-transform: uppercase;
            font-weight: bold;
        }
        .hero {
            background: url('car-image.jpg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }
        .hero h1 {
            font-size: 50px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
        }
        .section {
            padding: 50px 0;
            background-color: #fff;
            text-align: center;
        }
        .section h2 {
            margin-bottom: 20px;
        }
        .section p {
            font-size: 18px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
        @media (max-width: 768px) {
            .navbar .menu-toggle {
                display: flex;
                flex-direction: column;
                cursor: pointer;
            }
            .navbar .menu-toggle .bar {
                width: 25px;
                height: 3px;
                background-color: #fff;
                margin: 4px 0;
            }
            .navbar .nav-list {
                display: none;
                flex-direction: column;
                width: 100%;
                position: absolute;
                top: 60px;
                left: 0;
                background-color: #333;
            }
            .navbar .nav-list.active {
                display: flex;
            }
            .navbar .nav-item {
                margin: 10px 0;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar">
            <div class="container">
                <a href="home.php" class="logo">CarCreation</a>
                <div class="menu-toggle" id="mobile-menu">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
                <ul class="nav-list">
                    <li class="nav-item"><a href="index_admin.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="listusers.php" class="nav-link">list users</a></li>
                    <li class="nav-item"><a href="listaction.php" class="nav-link">list action</a></li>
                    <li class="nav-item"><a href="regist_er.php" class="nav-link">register user</a></li>

                    <?php if(! empty($prenom)): ?>
                        <li class="nav-item"><a href="#" class="nav-link"><?php echo $prenom; ?></a></li>
                        <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>
                    <?php else: ?>
                        <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </nav>
    </header>
    <section id="register" class="form-section">
        <div class="container">
            <h1>Register</h1>
         
            <form action="register.php" method="post">
                <label for="nom">Nom:</label><br>
                <input type="text" id="nom" name="nom" required><br><br>
                
                <label for="prenom">Prenom:</label><br>
                <input type="text" id="prenom" name="prenom" required><br><br>
                
                <label for="cin">CIN:</label><br>
                <input type="text" id="cin" name="cin" required><br><br>
                
                <label for="password">Password:</label><br>
                <input type="password" id="password" name="password" required><br><br>
                
                <button type="submit">Register</button>
            </form>
        </div>
    </section>
</body>
</html>

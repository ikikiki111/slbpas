<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        /* CSS styles with blue and purple color scheme */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        
        header {
            background-color: #4e2d6e;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        
        nav {
            background-color: #3370b7;
            padding: 10px;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }
        
        nav a:hover {
            color: #d0d0d0;
        }
        
        main {
            padding: 20px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Admin Dashboard</h1>
    </header>
    
    <nav>
        <a href="dashboard.php">Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>
    
    <main>
        <?php
        echo "selamat datang di admin dashboard!";
        ?>
    </main>
</body>
</html>
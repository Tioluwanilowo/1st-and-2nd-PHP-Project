<!DOCTYPE html>
<html>
<head>
    <title>Dumpyard Search</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../styles.css" />
    <style>
    nav {
        background-color: #333;
        position: fixed;
        width: 100%;
        z-index: 100;
    }

    .navbar-container {
        width:75%;
        margin:auto;
        height:70px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
    }

    .navbar-brand a {
        color: #fff;
        font-size: 18px;
        text-decoration: none;
        font-weight: bold;
    }

    .navbar-brand img{
        width:100%;
        height:100%;
    }

    .navbar-toggle {
        display: none;
        flex-direction: column;
        cursor: pointer;
    }

    .navbar-toggle span {
        height: 2px;
        width: 25px;
        background-color: #fff;
        margin-bottom: 4px;
        border-radius: 2px;
    }

    .navbar-menu {
        display: flex;
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .navbar-menu li {
        margin-left: 20px;
    }

    .navbar-menu li a {
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }

    @media (max-width: 768px) {
        .navbar-container {
            flex-wrap: wrap;
        }

        .navbar-menu {
            display: none;
            width: 100%;
            text-align: center;
            padding-bottom: 10px;
        }

        .navbar-menu li {
            margin: 10px 0;
        }

        .navbar-toggle {
            display: block;
        }

        .navbar-toggle.active {
            color: #fff;
        }

        .navbar-toggle span {
            background-color: #fff;
            transition: background-color 0.3s ease-in-out;
        }

        .navbar-toggle.active span:nth-child(1) {
            transform: rotate(45deg) translate(5px, 5px);
        }

        .navbar-toggle.active span:nth-child(2) {
            opacity: 0;
        }

        .navbar-toggle.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -6px);
        }
    }
</style>

</head>
<body>
    <nav>
        <div class="navbar-container">
            <div class="navbar-brand">
                <a href="index.php"><img src="./assests/images/img.png"></a>
            </div>
            <div class="navbar-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="navbar-menu">
                <li><a href="index.php">Home</a></li>
                <li><a href="features.php">Features</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>
    </nav>
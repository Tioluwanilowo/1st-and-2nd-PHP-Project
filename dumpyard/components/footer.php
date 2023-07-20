
<link rel="stylesheet" href="../styles.css" />

<footer class="footer_container">
        <div class="footer-content">
            <img src="./assests/images/img.png" width="100px">
            <p>&copy; 2023 Dumpyard Search. All rights reserved.</p>
        </div>
</footer>

<script>
    // Navbar toggle functionality
    const navbarToggle = document.querySelector('.navbar-toggle');
    const navbarMenu = document.querySelector('.navbar-menu');

    navbarToggle.addEventListener('click', function () {
        navbarToggle.classList.toggle('active');
        navbarMenu.classList.toggle('active');
    });
</script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <div class="navbar-icon">
            <i class="fa-solid fa-user"></i>
        </div>

        <div class="navbar-page">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Portofolio</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
        </div>

        <div class="navbar-sosmed">
            <ul type='none'>
                <li><i class="fa-brands fa-linkedin"></i></li>
                <li><i class="fa-brands fa-square-instagram"></i></li>
                <li><i class="fa-brands fa-facebook"></i></li>
                <li><i class="fa-brands fa-square-whatsapp"></i></li>
            </ul>
        </div>

        <div class="hamburger" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>

    </div>

    <div class="banner">
        <span class="name">Faizal Imam Safangat</span><br><span class="description">Mahasiswa lulusan Teknik Informatika Jurusan Teknik Informatika 2023</span>
    </div>
    <?= $this->renderSection('content') ?>
    <script>
        function toggleMenu() {
            const navPage = document.querySelector('.navbar-page');
            navPage.classList.toggle('active');
        }
    </script>

</body>

</html>
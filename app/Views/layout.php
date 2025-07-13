<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Welcome to My Website</h1>
    </header>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/profile">Profile</a></li>
            <li><a href="/experience">Experience</a></li>
        </ul>
    </nav>

    <main>
        <?= $this->renderSection('content')?>
    </main>

    <footer>
        <p>@2025 My website. All rights reserved</p>
    </footer>
</body>
</html>
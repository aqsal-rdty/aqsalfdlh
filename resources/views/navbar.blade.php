<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://kit.fontawesome.com/de8de52639.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="navbar">
        <nav>
            <h2 class="logo">portofo<span>lio</span></h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/services">Services</a></li>
                <li><a href="/skill">Skill</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="konten">
        @yield('content')
    </div>

</body>

</html>
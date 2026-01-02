<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
</head>

<body>
    <nav>
        <x-nav-link href="/about">About</x-nav-link>
        <x-nav-link href="/welcome">Home</x-nav-link>
        <x-nav-link href="/contact" style="color:aqua">contact</x-nav-link>
        <x-nav-link href="#">Team</x-nav-link>
    </nav>

    {{ $slot }}
</body>

</html>

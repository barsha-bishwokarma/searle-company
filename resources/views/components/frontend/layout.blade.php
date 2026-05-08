<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --background-color: white;
            --primary-color: #486199;
            --secondary-color: #1b3981;

        }

        /* scrool smooth */
        html {
            scroll-behavior: smooth;
        }

        body {
            overscroll-behavior: none;
            background-color: var(--background-color);
        }

        .brand-card:hover {
            border-color: var(--secondary-color);
        }


        button {
            cursor: pointer;
        }
    </style>
</head>

<body>

     <x-frontend.header />

    <main>
        {{ $slot }}
    </main>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <x-frontend.footer />
</body>

</html>
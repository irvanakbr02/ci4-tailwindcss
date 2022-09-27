<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;700;900&display=swap" rel="stylesheet">
    <!-- tailwindcss -->
    <link rel="stylesheet" href="/css/app.css">
    <!-- Flowbite CSS CDN -->
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <title>Coba</title>
</head>

<body>


    <!-- navigasi -->
    <?= $this->include('layout/nav'); ?>

    <!-- Isi -->
    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <?= $this->include('layout/footer'); ?>
    <?= $this->include('layout/backtotop'); ?>








    <!-- Flowbite -->
    <!-- <script src="/node_modules/flowbite/dist/flowbite.js"></script> -->
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <!-- Javascript -->
    <script src="/js/app.js"></script>

</body>

</html>
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
    <!-- Summernote -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <title>Login</title>
</head>

<body>


    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"><?= lang('Auth.loginTitle') ?></h2>

            </div>
            <?= view('Myth\Auth\Views\_message_block') ?>

            <form class="mt-8 space-y-6" action="<?= route_to('login') ?>" method="POST">
                <?= csrf_field() ?>

                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <?php if ($config->validFields === ['email']) : ?>
                        <div>
                            <label for="email-address" class="sr-only">Email address</label>
                            <input id="email-address" name="login" type="email" autocomplete="email" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.email') ?>">
                        </div>
                    <?php else : ?>
                        <div>
                            <label for="text" class="sr-only">Username</label>
                            <input id="text" name="login" type="text" autocomplete="text" required class="relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                        </div>
                    <?php endif; ?>
                    <div>
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>
                </div>
                <?php if ($config->allowRemembering) : ?>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500">
                            <label for="remember-me" class="ml-2 block text-sm text-gray-900">Remember me</label>
                        </div>

                        <div class="text-sm">
                            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                        </div>
                    </div>
                <?php endif; ?>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <?= lang('Auth.loginAction') ?>
                    </button>

                </div>
                <?php if ($config->allowRegistration) : ?>
                    <div class="text-sm">
                        <a href="<?= route_to('register') ?>" class="font-medium text-indigo-600 hover:text-indigo-500"><?= lang('Auth.needAnAccount') ?></a>
                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
    <?= $this->include('layout/backtotop'); ?>








    <!-- Flowbite -->
    <!-- <script src="/node_modules/flowbite/dist/flowbite.js"></script> -->
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <!-- <script src="https://unpkg.com/flowbite@1.4.4/dist/flowbite.js"></script> -->

    <!-- Summernote -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <!-- Javascript -->
    <script src="/js/app.js"></script>

</body>

</html>
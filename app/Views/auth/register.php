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
    <title>Register</title>
</head>

<body>


    <div class="flex min-h-full items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
        <div class="w-full max-w-md space-y-8">
            <div>
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900"><?= lang('Auth.register') ?></h2>

            </div>
            <?= view('Myth\Auth\Views\_message_block') ?>

            <form class="mt-8 space-y-6" action="<?= route_to('register') ?>" method="POST">
                <?= csrf_field() ?>

                <input type="hidden" name="remember" value="true">
                <div class="-space-y-px rounded-md shadow-sm">
                    <div class="mb-2">
                        <label for="email-address" class="sr-only">Email </label>
                        <input id="email-address" name="email" type="email" autocomplete="email" required class="<?php if (session('errors.email')) : ?>is-invalid<?php endif ?> relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm " placeholder="<?= lang('Auth.email') ?>" value="<?= old('email') ?>">
                        <p class="text-sm text-slate-600 hover:text-slate-500"> <?= lang('Auth.weNeverShare') ?></p>
                    </div>
                    <div class="mb-2">
                        <label for="text" class="sr-only">Username</label>
                        <input id="text" name="username" type="text" autocomplete="text" required class="<?php if (session('errors.username')) : ?>is-invalid<?php endif ?> relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm " placeholder="<?= lang('Auth.username') ?>" value="<?= old('username') ?>">
                    </div>
                    <div class="mb-2">
                        <label for="password" class="sr-only">Password</label>
                        <input id="password" name="password" type="password" placeholder="<?= lang('Auth.password') ?>" autocomplete="off" required class="<?php if (session('errors.password')) : ?>is-invalid<?php endif ?> relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>
                    <div>
                        <input id="password" name="pass_password" type="password" placeholder="<?= lang('Auth.repeatPassword') ?>" autocomplete="off" required class="<?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?> relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm" placeholder="Password">
                    </div>
                </div>

                <div>
                    <button type="submit" class="group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <!-- Heroicon name: mini/lock-closed -->
                            <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <?= lang('Auth.register') ?>
                    </button>

                </div>
                <div class="text-sm">
                    <a href="<?= route_to('login') ?>" class="font-medium text-indigo-600 hover:text-indigo-500"><?= lang('Auth.alreadyRegistered') ?> <?= lang('Auth.signIn') ?></a>
                </div>
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
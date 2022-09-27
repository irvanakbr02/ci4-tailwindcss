<header class="bg-slate-700 absolute top-0 left-0 w-full flex items-center z-10 font-Montserrat">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4 flex">
                <div class="w-20 h-14 p-4  mx-auto ">
                    <img src="/img/bumdes.jpg" alt="" class="w-full">
                </div>
                <a href="#home" class="font-bold text-lg text-white block py-6">Bumdesa Tambaknegara</a>
            </div>
            <div class="flex items-center px-4">
                <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                    <span class="w-[30px] h-[2px] my-2 block bg-white transition origin-top-left duration-300 ease-in-out"></span>
                    <span class="w-[30px] h-[2px] my-2 block bg-white transition duration-300 ease-in-out"></span>
                    <span class="w-[30px] h-[2px] my-2 block bg-white transition origin-bottom-left duration-300 ease-in-out"></span>
                </button>

                <nav id="nav-menu" class="hidden absolute py-5 bg-slate-700 shadow-lg rounded-lg max-w-[250px] w-full right-5 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex">
                        <li class="group">
                            <a href="<?= base_url('/') ?>" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Home</a>
                        </li>
                        <!-- Coba Flowbite -->
                        <li class="group">
                            <button id="dropdownNavbarButton" data-dropdown-toggle="dropdownNavbar" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Profil <svg class="m-1 w-3 h-3" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="hidden z-10 w-44 bg-slate-700 rounded divide-y divide-slate-100 shadow dark:bg-white dark:divide-white" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(0px, 412px);" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom">
                                <ul class="py-4 text-sm text-white hover:text-slate-700 dark:text-slate-400" aria-labelledby="dropdownNavbarButton">
                                    <li>
                                        <a href="#" class="font-semibold text-white py-2 mx-4 group-hover:text-slate-200 flex">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-semibold text-white py-2 mx-4 group-hover:text-slate-200 flex">Settings</a>
                                    </li>
                                    <li>
                                        <a href="#" class="font-semibold text-white py-2 mx-4 group-hover:text-slate-200 flex">Earnings</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="group">
                            <a href="<?= base_url('/kontak') ?>" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Kontak</a>
                        </li>
                        <li class="group">
                            <a href="#clients" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Artikel</a>
                        </li>
                        <li class="group">
                            <a href="#blog" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Laporan</a>
                        </li>
                        <li class="group">
                            <a href="#contact" class="font-semibold text-white py-2 mx-8 mb-1 group-hover:text-slate-200 flex">Kategori</a>
                        </li>
                        <li class="group">
                            <a href="#contact" class="font-semibold bg-slate-300 text-slate-700 py-2 px-5 rounded-full mx-8 group-hover:text-slate-500 flex">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
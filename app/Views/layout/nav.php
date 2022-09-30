<header class="bg-slate-700 absolute top-0 left-0 w-full flex items-center z-10 ">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-4 flex">
                <a href="<?= base_url('/') ?>" class="w-20 h-14 p-4  mx-auto ">
                    <img src="/img/bumdes.jpg" alt="" class="w-full">
                </a>
                <a href="<?= base_url('/') ?>" class="font-bold text-lg text-white block py-6">Bumdesa Tambaknegara</a>
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
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar" class="flex justify-between items-center font-semibold text-white py-2 mx-8 group-hover:text-slate-200 border-b   md:border-0  md:py-2 md:w-auto ">Profil <svg class="ml-1 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar" class="hidden z-10 w-44 font-normal bg-slate-600 rounded divide-y divide-slate-500 shadow dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                                    <li aria-labelledby="dropdownNavbarLink">
                                        <button id="doubleDropdownButton" data-dropdown-toggle="doubleDropdown" data-dropdown-placement="right-start" type="button" class="flex justify-between items-center text-white py-2 px-4 w-full">Periode 2017<svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                            </svg></button>
                                        <button type="button" id="doubleDropdown" class="hidden z-10 w-44 bg-white rounded shadow dark:bg-gray-700">
                                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="doubleDropdownButton">
                                                <li>
                                                    <a href="<?= base_url('/profil/struktur') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Struktur Kepengurusan</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('/profil/pengurus') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Profil Pengurus</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('/profil/visi') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Visi dan Misi</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('/profil/unit') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Unit Usaha</a>
                                                </li>
                                                <li>
                                                    <a href="<?= base_url('/profil/regulasi') ?>" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-400 dark:hover:text-white">Regulasi</a>
                                                </li>
                                            </ul>
                                        </button>
                                    </li>
                            </div>
                        </li>
                        <li class="group">
                            <a href="<?= base_url('/kontak') ?>" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Kontak</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url('/berita') ?>" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Berita</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url('/laporan') ?>" class="font-semibold text-white py-2 mx-8 group-hover:text-slate-200 flex">Laporan</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url('/kategori') ?>" class="font-semibold text-white py-2 mx-8 mb-1 group-hover:text-slate-200 flex">Kategori</a>
                        </li>
                        <li class="group">
                            <a href="<?= base_url('/admin/dashboard') ?>" class="font-semibold bg-slate-300 text-slate-700 py-2 px-5 rounded-full mx-8 group-hover:text-slate-500 flex">Login</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
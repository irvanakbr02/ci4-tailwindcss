<!-- Mobile Header & Nav -->
<header x-data="{ isOpen: false }" class="w-full bg-sidebar py-5 px-6 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="index.html" class="text-white text-3xl font-semibold  hover:text-slate-300">Dashboard</a>
        <button @click="isOpen = !isOpen" class="text-white text-3xl focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex': 'hidden'" class="flex flex-col pt-4">
        <a href="<?= base_url('/admin/dashboard') ?>" class="flex items-center active-nav-link text-slate-200 hover:font-semibold py-4 pl-6 nav-item">
            Artikel
        </a>
        <a href="<?= base_url('/admin/dashboard') ?>" class="flex items-center text-slate-200 opacity-75 hover:opacity-100 hover:font-semibold py-4 pl-6 nav-item">
            Laporan
        </a>
        <button id="dropdownBottomButton" data-dropdown-toggle="dropdownBottom" data-dropdown-placement="bottom" class="mr-3 mb-3 md:mb-0 text-white rounded-lg text-sm  py-4 pl-6 text-left inline-flex hover:font-semibold " type="button">Kategori
            <svg class="ml-2 w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdownBottom" class="hidden z-10 w-44 bg-slate-700">
            <ul class="py-1 text-sm text-slate-200" aria-labelledby="dropdownBottomButton">
                <li>
                    <a href="<?= base_url('/admin/dashboard') ?>" class="block py-2 px-4 hover:text-slate-100 hover:font-semibold ">Wisata</a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/dashboard') ?>" class="block py-2 px-4 hover:text-slate-100 hover:font-semibold ">Kuliner</a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/dashboard') ?>" class="block py-2 px-4 hover:text-slate-100 hover:font-semibold ">Kesenian</a>
                </li>
                <li>
                    <a href="<?= base_url('/admin/dashboard') ?>" class="block py-2 px-4 hover:text-slate-100 hover:font-semibold ">Budaya</a>
                </li>
            </ul>
        </div>
        <a href="<?= base_url('/admin/dashboard') ?>" class="hover:font-semibold flex items-center text-slate-200 opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            Logout
        </a>
    </nav>
</header>
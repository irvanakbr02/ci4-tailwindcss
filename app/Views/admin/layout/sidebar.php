<aside class="relative bg-slate-700  w-64 hidden sm:block shadow-xl">
    <div class="p-6">
        <button class="w-full bg-slate-200 text-slate-600 cta-btn font-semibold py-2 mt-5 rounded-br-lg rounded-bl-lg rounded-tr-lg shadow-lg hover:shadow-xl hover:bg-gray-300 flex items-center justify-center">
            <a href="<?= base_url('/admin/dashboard') ?>">Dashboard </a>
        </button>
    </div>
    <nav class="text-slate-600 text-base font-semibold pt-3">
        <a href="<?= base_url('/admin/berita') ?>" class="flex items-center active-nav-link text-slate-200 py-4 pl-6 nav-item">
            Artikel
        </a>
        <a href="<?= base_url('/admin/laporan') ?>" class="flex items-center text-slate-200 opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            Laporan
        </a>
        <button type="button" class="flex items-center p-2 w-full  text-slate-300 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700" aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
            <span class="flex-1 ml-4 text-left whitespace-nowrap" sidebar-toggle-item>Kategori</span>
            <svg sidebar-toggle-item class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
        </button>
        <ul id="dropdown-example" class="hidden py-2 space-y-2">
            <li>
                <a href="<?= base_url('/admin/kategori/wisata') ?>" class="flex items-center p-2 pl-11 w-full text-base text-slate-300 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Wisata</a>
            </li>
            <li>
                <a href="<?= base_url('/admin/kategori/kuliner') ?>" class="flex items-center p-2 pl-11 w-full text-base text-slate-300 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kuliner</a>
            </li>
            <li>
                <a href="<?= base_url('/admin/kategori/kesenian') ?>" class="flex items-center p-2 pl-11 w-full text-base text-slate-300 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Kesenian</a>
            </li>
            <li>
                <a href="<?= base_url('/admin/kategori/budaya') ?>" class="flex items-center p-2 pl-11 w-full text-base text-slate-300 rounded-lg transition duration-75 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Budaya</a>
            </li>
        </ul>

        <a href="<?= base_url('/logout') ?>" class="flex items-center text-slate-200 opacity-75 hover:opacity-100 py-4 pl-6 nav-item">
            Logout
        </a>
    </nav>
</aside>
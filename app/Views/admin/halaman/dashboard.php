<?= $this->extend('admin/layout/tamplate'); ?>

<?= $this->section('content'); ?>
<div class="w-full p-10 ">
    <h1 class="text-base mt-8 mb-3  md:text-xl lg:text-2xl font-semibold text-slate-700"> <span class="block font-bold text-slate-100 text-3xl">Data Artikel Bumdesa</span></h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium"> <?= session()->getFlashdata('pesan') ?>
            </span>
        </div>
    <?php endif ?>

    <div class="bg-white overflow-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-xl">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-4 px-6 font-bold">
                        Foto
                    </th>
                    <th scope="col" class="py-4 px-6 font-bold">
                        Judul
                    </th>
                    <th scope="col" class="py-4 px-6 font-bold">
                        Penulis
                    </th>
                    <th scope="col" class="py-4 px-6 font-bold">
                        Deskripsi
                    </th>
                    <th scope="col" class="py-4 px-1 font-bold0">

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($berita as $berita) : ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

                        <th scope="row" class="py-8 px-6 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                            <img src="/img/<?= $berita['foto']; ?>" class="w-30 h-24" alt="">
                        </th>
                        <th scope="row" class="py-8 px-6 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo substr($berita['judul'], 0, 30) . "..";  ?>
                        </th>
                        <th scope="row" class="py-8 px-6 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $berita['penulis']; ?>
                        </th>
                        <th scope="row" class="py-8 px-6 font-semibold text-gray-900 whitespace-nowrap dark:text-white">
                            <?php echo substr($berita['deskripsi'], 0, 50) . "..";  ?>
                        </th>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $pager->links('berita', 'pagination'); ?>
    <div class="mt-8">
        <a href="/admin/berita/" class="py-3 px-8  hover:bg-slate-200 duration-300 ease-in-out shadow-md bg-slate-300 text-slate-600 rounded-xl text-base font-semibold hover:font-bold hover:text-slate-700">Ubah Data Artikel </a>
    </div>
</div>

<div class="w-full p-10 ">
    <h1 class="text-base mt-8 mb-3  md:text-xl lg:text-2xl font-semibold text-slate-700"> <span class="block font-bold text-slate-100 text-3xl">Data Laporan Bumdesa</span></h1>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="p-4 mb-4 text-sm text-blue-700 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
            <span class="font-medium"> <?= session()->getFlashdata('pesan') ?>
            </span>
        </div>
    <?php endif ?>
    <div class="bg-white overflow-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 rounded-xl">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="py-6 px-8">
                        Laporan
                    </th>
                    <th scope="col" class="py-6 px-8">
                        Nama Laporan
                    </th>
                    <th scope="col" class="py-6 px-8">

                    </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($laporan as $laporan) : ?>
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

                        <th scope="row" class="py-8 px-8 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $laporan['judul']; ?>
                        </th>
                        <th scope="row" class="py-8 px-8 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?= $laporan['nama_file']; ?>
                        </th>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="mt-8">
        <a href="/admin/laporan" class="py-3 px-8  hover:bg-slate-200 duration-300 ease-in-out shadow-md bg-slate-300 text-slate-600 rounded-xl text-base font-semibold hover:font-bold hover:text-slate-700">Ubah Laporan </a>
    </div>
</div>

<?= $this->endsection(); ?>
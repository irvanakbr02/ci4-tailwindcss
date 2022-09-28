<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-center px-4  mb-4">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300">Laporan <span class="block font-bold text-slate-300 text-3xl">Bumdesa Tambaknegara Berkarya</span></h1>
                <p class="font-medium leading-relaxed text-slate-300 mb-1">
                    Berikut merupakan laporan bumdesa </p>
            </div>
            <div class="sm:w-full self-end p-6 ">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Laporan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($laporan as $laporan) : ?>
                                <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">

                                    <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <?= $laporan['judul']; ?>
                                    </th>
                                    <td class="py-4 px-6">
                                        <a href="<?= base_url('laporan/download/' . $laporan['id']); ?>" class="font-medium bg-slate-300 text-slate-700 py-2 px-5 rounded-full ">Download</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
</section>

<?= $this->endsection(); ?>
<?= $this->extend('admin/layout/tamplate'); ?>

<?= $this->section('content'); ?>
<div class="w-full p-10 ">
    <h1 class="text-base mt-8 mb-3  md:text-xl lg:text-2xl font-semibold text-slate-700"> <span class="block font-bold text-slate-100 text-3xl">Artikel Bumdesa</span></h1>
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
                        <td class="py-8 px-8 flex ">
                            <a href="<?= base_url('admin/berita/edit/' . $berita['slug']); ?>" class="font-medium hover:font-semibold bg-orange-300 hover:bg-orange-500 text-slate-700 py-2 px-5 rounded-full ">Edit</a>

                            <form action="/admin/berita/<?= $berita['id']; ?>" method="POST" class="inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="font-medium hover:font-semibold  bg-red-600 hover:bg-red-700 text-slate-700 py-2 px-5 rounded-full " onclick="return confirm('apakah anda yakin?');">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <?= $pager->links('berita', 'pagination'); ?>
    <div class="mt-8">
        <a href="/admin/berita/create" class="py-3 px-8  hover:bg-slate-200 duration-300 ease-in-out shadow-md bg-slate-300 text-slate-600 rounded-xl text-base font-semibold hover:font-bold hover:text-slate-700">Buat Artikel Baru </a>
    </div>
</div>

<?= $this->endsection(); ?>
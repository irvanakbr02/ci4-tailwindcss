<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section class="pt-36 pb-16 bg-slate-600">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-end p-6 ">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-200"> <span class="block font-bold text-slate-200 text-3xl">Pariwisata Bumdesa Tambaknegara Berkarya</span></h1>
            </div>
            <div class="flex flex-wrap">
                <?php foreach ($wisata as $wisata) : ?>
                    <div class="sm:w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                            <img src="/img/<?= $wisata['foto']; ?>" alt="wisata" class="w-full ">
                            <div class="py-8 px-6">
                                <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#"><?= $wisata['nama']; ?></a></h3>
                                <p class="font-medium text-base text-slate-600 mb-6"><?php echo substr($wisata['deskripsi'], 0, 150) . "..";  ?></p>
                                <a href="/kategori/wisata/<?= $wisata['slug']; ?>" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?= $pager->links('wisata', 'pagination'); ?>
        </div>
    </div>
</section>

<section class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-end p-6 ">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-200"> <span class="block font-bold text-slate-200 text-3xl">Kuliner Bumdesa Tambaknegara Berkarya</span></h1>
            </div>
            <div class="flex flex-wrap">
                <?php foreach ($kuliner as $kuliner) : ?>
                    <div class="sm:w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                            <img src="/img/<?= $kuliner['foto']; ?>" alt="kuliner" class="w-full ">
                            <div class="py-8 px-6">
                                <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#"><?= $kuliner['nama']; ?></a></h3>
                                <p class="font-medium text-base text-slate-600 mb-6"><?php echo substr($kuliner['deskripsi'], 0, 150) . "..";  ?></p>
                                <a href="/kategori/kuliner/<?= $kuliner['slug']; ?>" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?= $pager->links('kuliner', 'pagination'); ?>
        </div>
    </div>
</section>

<section class="pt-36 pb-16 bg-slate-500">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-end p-6 ">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-200"> <span class="block font-bold text-slate-200 text-3xl">Kesenian Bumdesa Tambaknegara Berkarya</span></h1>
            </div>
            <div class="flex flex-wrap">
                <?php foreach ($kesenian as $kesenian) : ?>
                    <div class="sm:w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                            <img src="/img/<?= $kesenian['foto']; ?>" alt="kesenian" class="w-full ">
                            <div class="py-8 px-6">
                                <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#"><?= $kesenian['nama']; ?></a></h3>
                                <p class="font-medium text-base text-slate-600 mb-6"><?php echo substr($kesenian['deskripsi'], 0, 150) . "..";  ?></p>
                                <a href="/kategori/kesenian/<?= $kesenian['slug']; ?>" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?= $pager->links('kesenian', 'pagination'); ?>
        </div>
    </div>
</section>

<section class="pt-36 pb-16 bg-slate-600">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-end p-6 ">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-200"> <span class="block font-bold text-slate-200 text-3xl">Budaya Bumdesa Tambaknegara Berkarya</span></h1>
            </div>
            <div class="flex flex-wrap">
                <?php foreach ($budaya as $budaya) : ?>
                    <div class="sm:w-full px-4 md:w-1/2 lg:w-1/3">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                            <img src="/img/<?= $budaya['foto']; ?>" alt="budaya" class="w-full ">
                            <div class="py-8 px-6">
                                <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#"><?= $budaya['nama']; ?></a></h3>
                                <p class="font-medium text-base text-slate-600 mb-6"><?php echo substr($budaya['deskripsi'], 0, 150) . "..";  ?></p>
                                <a href="/kategori/budaya/<?= $budaya['slug']; ?>" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?= $pager->links('budaya', 'pagination'); ?>
        </div>
    </div>
</section>
<?= $this->endsection(); ?>
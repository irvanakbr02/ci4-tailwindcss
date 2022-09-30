<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-end p-6 ">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300"> <span class="block font-bold text-slate-300 text-3xl">Artikel Bumdesa Tambaknegara Berkarya</span></h1>
            </div>
            <div class="flex flex-wrap">
                <?php foreach ($berita as $berita) : ?>
                    <div class="sm:w-full px-4 md:w-1/2 ">
                        <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                            <img src="/img/<?= $berita['foto']; ?>" alt="berita" class="w-full ">
                            <div class="py-8 px-6">
                                <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#"><?= $berita['judul']; ?></a></h3>
                                <p class="font-medium text-base text-slate-600 mb-6">Ditulis oleh : <?= $berita['penulis']; ?></p>
                                <p class="font-medium text-base text-slate-600 mb-6"><?php echo substr($berita['deskripsi'], 0, 150) . "..";  ?></p>
                                <a href="/berita/<?= $berita['slug']; ?>" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?= $pager->links('berita', 'pagination'); ?>
        </div>

    </div>
</section>

<?= $this->endsection(); ?>
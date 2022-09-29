<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="max-w-4xl mx-auto">

            <div class="sm:w-full self-end p-6 ">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300"> <span class="block font-bold text-slate-300 text-3xl"><?= $budaya['nama']; ?></span></h1>
            </div>
            <div class="sm:w-full self-end p-6 ">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg mb-5 ">
                    <img src="/img/<?= $budaya['foto']; ?>" alt=".. " class="img-fluid mb-6" />
                    <p class="font-medium leading-relaxed text-slate-300 mb-6">
                        <?= $budaya['deskripsi']; ?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endsection(); ?>
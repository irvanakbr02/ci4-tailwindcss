<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>


<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="">
            <div class="flex flex-wrap">
                <div class="sm:w-full self-center px-4 lg:w-1/2">
                    <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300">Selamat datang di website <span class="block font-bold text-slate-300 text-3xl">Bumdesa Tambaknegara Berkarya</span></h1>
                    <p class="font-medium leading-relaxed text-slate-300 mb-10">
                        Badan Usaha Milik Desa Tambaknegara adalah Lembaga Usaha Desa yang dikelola oleh Masyarakat dan Pemerintah Desa Tambaknegara dalam upaya memperkuat perekonomi desa dan di bentuk berdasarkan kebutuhan dan potensi desa. </p>
                    <a href="#" class="py-3 px-8 bg-slate-700 duration-300 ease-in-out shadow-md hover:bg-slate-300 hover:text-slate-600 rounded-xl text-base font-semibold text-slate-300">Yuk Bergabung! </a>
                </div>
                <div class="sm:w-full self-center justify-center px-4 lg:w-1/2">
                    <div class="relative mt-10 lg:mt-9 lg:right-0">
                        <img src="/img/bumdes.jpg" alt="bumdes" class="w-1/2 mx-auto ">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Client Section -->
<section id="clients" class="pt-36 pb-32 bg-slate-600">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h2 class="font-bold text-3xl text-white mb-3 md:text-5xl">Unit Usaha</h2>
                <p class="font-medium text-md text-white">Berikut merupakan unit usaha Bumdesa Tambaknegara Berkarya</p>
            </div>
        </div>
        <div class="w-full px-4">
            <div class="flex flex-wrap items-center justify-center">
                <a href="#" class="max-w-[120px] mx-4 py-4 rounded-md grayscale transition duration-300 hover:grayscale-0 lg:mx-6 xl:mx-8">
                    <img src="https://source.unsplash.com/360x200?dish" alt="">
                </a>
                <a href="#" class="max-w-[120px] mx-4 py-4 rounded-md grayscale transition duration-300 hover:grayscale-0 lg:mx-6 xl:mx-8">
                    <img src="https://source.unsplash.com/360x200?cake" alt="">
                </a>
                <a href="#" class="max-w-[120px] mx-4 py-4 rounded-md grayscale transition duration-300 hover:grayscale-0 lg:mx-6 xl:mx-8">
                    <img src="https://source.unsplash.com/360x200?food" alt="">
                </a>
                <a href="#" class="max-w-[120px] mx-4 py-4 rounded-md grayscale transition duration-300 hover:grayscale-0 lg:mx-6 xl:mx-8">
                    <img src="https://source.unsplash.com/360x200?hack" alt="">
                </a>
            </div>
        </div>
    </div>
</section>
<!-- Client End Section -->

<!-- Blog Section -->
<section id="blog" class="pt-36 pb-32 bg-slate-500">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-white text-lg mb-2 md:text-3xl">Artikel</h4>
                <h2 class="font-bold text-3xl text-white mb-3 md:text-5xl">Kegiatan Terbaru Bumdesa</h2>
                <!-- <p class="font-medium text-md text-slate-200">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laudantium excepturi quaerat reiciendis? Possimus tenetur laborum inventore quod optio vero.</p> -->
            </div>
        </div>
        <div class="flex flex-wrap">
            <div class="sm:w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="https://source.unsplash.com/360x200?hack" alt="berita" class="w-full">
                    <div class="py-8 px-6">
                        <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#">Tips Belajar programing</a></h3>
                        <p class="font-medium text-base text-slate-600 mb-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis pariatur quis aspernatur modi eligendi! Esse.</p>
                        <a href="#" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                    </div>
                </div>
            </div>
            <div class="sm:w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="https://source.unsplash.com/360x200?linux" alt="berita" class="w-full">
                    <div class="py-8 px-6">
                        <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#">Tips Belajar programing</a></h3>
                        <p class="font-medium text-base text-slate-600 mb-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis pariatur quis aspernatur modi eligendi! Esse.</p>
                        <a href="#" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                    </div>
                </div>
            </div>
            <div class="sm:w-full px-4 md:w-1/2 xl:w-1/3">
                <div class="bg-white rounded-xl overflow-hidden shadow-lg mb-10">
                    <img src="https://source.unsplash.com/360x200?uiux" alt="berita" class="w-full">
                    <div class="py-8 px-6">
                        <h3 class="font-bold mb-4 hover:text-white truncate"><a href="#">Tips Belajar programing</a></h3>
                        <p class="font-medium text-base text-slate-600 mb-6">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis pariatur quis aspernatur modi eligendi! Esse.</p>
                        <a href="#" class="font-medium px-3 py-2 rounded-xl bg-slate-500 hover:bg-slate-700 text-white">Baca Selengkapnya..</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog End Section -->
<?= $this->endsection(); ?>
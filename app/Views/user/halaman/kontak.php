<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="mx-auto">
            <div class="flex flex-wrap">
                <div class="sm:w-full self-center px-4 lg:w-1/2 mb-4">
                    <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300">Kontak Kami <span class="block font-bold text-slate-300 text-3xl">Bumdesa Tambaknegara Berkarya</span></h1>
                    <p class="font-medium leading-relaxed text-slate-300 mb-1">
                        tambaknegaraberkarya@gmail.com </p>
                    <p class="font-medium leading-relaxed text-slate-300 mb-10">
                        +629619646104 </p>
                    <a href="#" class="py-3 px-8  bg-slate-700 duration-300 ease-in-out shadow-md hover:bg-slate-300 hover:text-slate-600 rounded-xl text-base font-semibold text-slate-300">Yuk Bergabung! </a>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31644.325302191664!2d109.17579731860569!3d-7.515849203052833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655d56c1244603%3A0x5027a76e3550020!2sTambaknegara%2C%20Rawalo%2C%20Banyumas%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1659954637821!5m2!1sen!2sid" width="400" height="250" class="mt-8 rounded-lg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="sm:w-full self-end p-6 lg:w-1/2 bg-slate-200 rounded-lg shadow-md">
                    <form action="" name="submit-to-google-sheet">
                        <div class=" px-4 mb-8">
                            <label for="name" class="font-bold text-slate-700 mb-3">Nama</label>
                            <input type="text" id="name" name="nama" class="w-full bg-slate-200 text-slate-700 p-3 rounded-lg focus:outline-none focus:ring-slate-700 focus:ring-1 focus:border-slate-700">
                        </div>
                        <div class="px-4 mb-8">
                            <label for="email" class="font-bold text-slate-700 mb-3">Email</label>
                            <input type="text" id="email" name="email" class="w-full bg-slate-200 text-slate-700 p-3 rounded-lg focus:outline-none focus:ring-slate-700 focus:ring-1 focus:border-slate-700">
                        </div>
                        <div class="px-4 mb-8">
                            <label for="pesan" class="font-bold text-slate-700 mb-3">Pesan</label>
                            <textarea type="text" id="email" name="pesan" class="w-full bg-slate-200 text-slate-700 p-3 rounded-lg focus:outline-none focus:ring-slate-700 focus:ring-1 focus:border-slate-700"></textarea>
                        </div>
                        <div class="w-full px-4">
                            <button class="font-semibold text-white bg-slate-700 py-3 px-8 rounded-full w-full shadow-xl hover:bg-slate-500 transition duration-300 ">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endsection(); ?>
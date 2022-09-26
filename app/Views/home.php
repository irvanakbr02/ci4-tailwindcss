<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="contact" class="pt-36 pb-32">
    <div class="container">
        <div class="w-full px-4">
            <div class="max-w-xl mx-auto text-center mb-16">
                <h4 class="font-semibold text-slate-700 text-lg mb-2 md:text-3xl">Contact Us</h4>
                <!-- <h2 class="font-bold text-3xl text-slate-700 mb-3 md:text-5xl">Hubungi Disini</h2> -->
                <p class="font-medium text-md text-slate-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit laudantium excepturi quaerat reiciendis? Possimus tenetur laborum inventore quod optio vero.</p>
            </div>
        </div>
        <form action="" class="">
            <div class="max-w-xl mx-auto shadow-md  p-4 rounded-lg">
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
            </div>
        </form>
    </div>
</section>

<?= $this->endsection(); ?>
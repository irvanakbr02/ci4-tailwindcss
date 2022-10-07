<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="mx-auto">
            <div class="hidden alert-kirim p-4 m-4 text-sm text-slate-800 bg-blue-100 rounded-lg dark:bg-blue-200 dark:text-blue-800" role="alert">
                <span class="font-semibold">
                    Terimakasih!
                </span>
                Pesan berhasil terkirim
            </div>
            <div class="flex flex-wrap">
                <div class="sm:w-full self-center px-4 lg:w-1/2 mb-4">
                    <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300">Kontak Kami <span class="block font-bold text-slate-300 text-3xl">Bumdesa Tambaknegara Berkarya</span></h1>
                    <p class="font-medium leading-relaxed text-slate-300 mb-1">
                        tambaknegaraberkarya@gmail.com </p>
                    <p class="font-medium leading-relaxed text-slate-300 mb-10">
                        +629619646104 </p>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31644.325302191664!2d109.17579731860569!3d-7.515849203052833!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e655d56c1244603%3A0x5027a76e3550020!2sTambaknegara%2C%20Rawalo%2C%20Banyumas%20Regency%2C%20Central%20Java!5e0!3m2!1sen!2sid!4v1659954637821!5m2!1sen!2sid" width="400" height="250" class="mt-8 rounded-lg" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="sm:w-full self-end p-6 lg:w-1/2 bg-slate-200 rounded-lg shadow-md">
                    <form action="" name="submit-to-google-sheet" method="POST">
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
                            <button type="submit" class="btn-kirim font-semibold text-black bg-slate-700 py-3 px-8 rounded-full w-full shadow-xl hover:bg-slate-500 transition duration-300 ">
                                Submit
                            </button>
                        </div>
                        <div class="w-full px-4">
                            <button disabled type="button" class="btn-load hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800  items-center">
                                <svg role="status" class="inline mr-3 w-4 h-4 text-white animate-spin" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="#E5E7EB" />
                                    <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentColor" />
                                </svg>
                                Loading...
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endsection(); ?>
<?= $this->extend('layout/tamplate'); ?>

<?= $this->section('content'); ?>
<section id="home" class="pt-36 pb-16 bg-slate-800">
    <div class="container">
        <div class="max-w-4xl mx-auto">
            <div class="sm:w-full self-center px-4  mb-4">
                <h1 class="text-base mb-2 md:text-xl lg:text-2xl font-semibold text-slate-300"> <span class="block font-bold text-slate-300 text-3xl">Profil Pengurus Bumdesa Tambaknegara Berkarya</span></h1>
                <p class="font-medium leading-relaxed text-slate-300 mb-1">
                    Berikut profil Anggota kepengurusan Badan Usaha Milik Desa "Tambaknegara Berkarya"
                </p>
            </div>
            <div class="sm:w-full self-end p-6 ">
                <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 shadow-lg">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="py-3 px-6">
                                    Foto
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Jabatan
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Nama
                                </th>
                                <th scope="col" class="py-3 px-6">
                                    Alamat
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    <img src="/img/pengurus/Aris.jpeg" alt="" class="w-14 h-14 rounded-full shadow-xl border ">
                                </td>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Direktur
                                </th>

                                <td class="py-4 px-6">
                                    Aris Mulyono Narjan
                                </td>
                                <td class="py-4 px-6">
                                    Tambaknegara, RT 06 RW 02
                                </td>
                            </tr>

                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    <img src="/img/pengurus/Novi.jpeg" alt="" class="w-14 h-14 rounded-full shadow-xl border ">
                                </td>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Sekertaris
                                </th>
                                <td class="py-4 px-6">
                                    Novi Utami, S.T.
                                </td>
                                <td class="py-4 px-6">
                                    Tambaknegara, RT 01 RW 03
                                </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <td class="py-4 px-6">
                                    <img src="/img/pengurus/Kuat.jpeg" alt="" class="w-14 h-14 rounded-full shadow-xl border ">
                                </td>
                                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    Bendahara
                                </th>
                                <td class="py-4 px-6">
                                    Kuat Agung Suroso
                                </td>
                                <td class="py-4 px-6">
                                    Tambaknegara, RT 01 RW 04
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endsection(); ?>
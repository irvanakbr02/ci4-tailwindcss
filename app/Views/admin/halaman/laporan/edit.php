<?= $this->extend('admin/layout/tamplate'); ?>

<?= $this->section('content'); ?>

<div class="w-full p-10 ">
    <div class="bg-white overflow-auto">
        <h1 class="text-base mt-8 mb-3 mx-12 md:text-xl lg:text-2xl font-semibold text-slate-700"> <span class="block font-bold text-slate-700 text-3xl">Tambah Data Laporan</span></h1>
        <div class="leading-loose">

            <form action="/admin/laporan/update/<?= $laporan['id']; ?>" method="POST" enctype="multipart/form-data" class="p-10 bg-white rounded shadow-xl">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" id="slug" value="<?= $laporan['slug']; ?>">
                <input type="hidden" name="fileLama" value="<?= $laporan['nama_file']; ?>">
                <div class="mb-2">
                    <label class="block text-sm text-gray-600 mb-3  " for="judul">Judul</label>
                    <input class="<?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?> w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" value="<?= (old('judul')) ? old('judul') : $laporan['judul'] ?>" id="judul" name="judul" type="text" required="" placeholder="Judul Laporan..." aria-label="Name">
                </div>
                <div class="mt-2">
                    <label class="block text-sm mb-3 text-gray-600" for="nama_file">File</label>
                    <input class="<?= ($validation->hasError('nama_file')) ? 'is-invalid' : '' ?> w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="nama_file" name="nama_file" type="file" aria-label="file">
                </div>

                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

    <?= $this->endsection(); ?>
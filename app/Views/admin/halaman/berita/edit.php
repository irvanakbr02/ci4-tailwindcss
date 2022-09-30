<?= $this->extend('admin/layout/tamplate'); ?>

<?= $this->section('content'); ?>

<div class="w-full p-10 ">
    <div class="bg-white overflow-auto">
        <h1 class="text-base mt-8 mb-3 mx-12 md:text-xl lg:text-2xl font-semibold text-slate-700"> <span class="block font-bold text-slate-700 text-3xl">Update Data Artikel</span></h1>
        <div class="leading-loose">

            <form action="/admin/berita/update/<?= $berita['id']; ?>" method=" POST" enctype="multipart/form-data" class="p-10 bg-white rounded shadow-xl">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" id="slug" value="<?= $berita['slug']; ?>">
                <input type="hidden" name="fotoLama" value="<?= $berita['foto']; ?>">
                <div class="mb-2">
                    <label class="block text-sm text-gray-600 mb-3  " for="judul">Judul</label>
                    <input class="<?= ($validation->hasError('judul')) ? 'is-invalid' : '' ?> w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="judul" name="judul" type="text" value="<?= (old('judul')) ? old('judul') : $berita['judul'] ?>" s required="" aria-label="Name">
                </div>
                <div class="mb-2">
                    <label class="block text-sm text-gray-600 mb-3  " for="penulis">Penulis</label>
                    <input class="<?= ($validation->hasError('penulis')) ? 'is-invalid' : '' ?> w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="penulis" name="penulis" type="text" value="<?= (old('penulis')) ? old('penulis') : $berita['penulis'] ?>" required="" placeholder="" aria-label="Name">
                </div>
                <div class="mb-2">
                    <label class="block text-sm text-gray-600 mb-3  " for="deskripsi">Isi</label>
                    <textarea class="<?= ($validation->hasError('deskripsi')) ? 'is-invalid' : '' ?> w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="deskripsi" name="deskripsi" type="text" required="" aria-label="Name">
                    <?= $berita['deskripsi']; ?>
                    </textarea>
                </div>
                <div class="mt-2">
                    <label class="block text-sm mb-3 text-gray-600" for="foto">Foto</label>
                    <input class="<?= ($validation->hasError('foto')) ? 'is-invalid' : '' ?> w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="foto" name="foto" type="file" aria-label="file">
                </div>

                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Update</button>
                </div>
            </form>
        </div>
    </div>

    <?= $this->endsection(); ?>
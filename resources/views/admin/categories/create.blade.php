<x-app-layout>
    <div class="container mt-4">
        <h4 class="mb-3">Tambah Kategori</h4>

        <x-card title="Form Kategori" subtitle="Isi data kategori baru">
            <form action="{{ route('admin.categories.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Kode Kategori</label>
                    <input type="text" name="kode_kategori" class="form-control" value="{{ old('kode_kategori') }}" placeholder="cth: KAT-001">
                    @error('kode_kategori')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Kategori</label>
                    <input type="text" name="nama_kategori" class="form-control" value="{{ old('nama_kategori') }}" placeholder="Nama kategori">
                    @error('nama_kategori')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Deskripsi <span class="text-muted">(opsional)</span></label>
                    <textarea name="deskripsi" class="form-control" rows="3" placeholder="Deskripsi kategori">{{ old('deskripsi') }}</textarea>
                    @error('deskripsi')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
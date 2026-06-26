@extends('layouts.admin')

@section('content')
<h1 class="fw-bold mb-4">Tambah Produk</h1>

<div class="bg-white p-4 rounded shadow-sm" style="max-width: 600px;">
    <form action="{{ route('admin.products.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Kode Barang</label>
            <input type="text" name="kode_barang" class="form-control" placeholder="BRG-005" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Satuan</label>
            <select name="satuan" class="form-select" required>
                <option value="">-- Pilih Satuan --</option>
                <option value="Pcs">Pcs</option>
                <option value="Kg">Kg</option>
                <option value="Box">Box</option>
                <option value="Unit">Unit</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" class="form-control" placeholder="3000" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori</label>
            <select name="category_id" class="form-select" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
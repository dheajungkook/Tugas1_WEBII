<x-app-layout>
    <div class="container mt-4">
        <h4 class="mb-3">Edit Customer</h4>

        <x-card title="Form Customer" subtitle="Perbarui data customer">
            <form action="{{ route('admin.customers.update', $customer->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label">Kode Customer</label>
                    <input type="text" name="kode_customer" class="form-control" value="{{ old('kode_customer', $customer->kode_customer) }}">
                    @error('kode_customer')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama Customer</label>
                    <input type="text" name="nama_customer" class="form-control" value="{{ old('nama_customer', $customer->nama_customer) }}">
                    @error('nama_customer')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Alamat</label>
                    <textarea name="alamat" class="form-control" rows="3">{{ old('alamat', $customer->alamat) }}</textarea>
                    @error('alamat')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" value="{{ old('email', $customer->email) }}">
                    @error('email')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">No. Telp</label>
                    <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp', $customer->no_telp) }}">
                    @error('no_telp')
                        <div class="text-danger small mt-1">{{ $message }}</div>
                    @enderror
                </div>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.customers.index') }}" class="btn btn-secondary">Batal</a>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </x-card>
    </div>
</x-app-layout>
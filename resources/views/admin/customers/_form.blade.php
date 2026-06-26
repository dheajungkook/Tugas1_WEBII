<div class="mb-3">
    <label class="form-label">Kode Customer</label>
    <input type="text" name="kode_customer" class="form-control"
        value="{{ old('kode_customer') }}"
        placeholder="cth: CST-001">
    @error('kode_customer')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Nama Customer</label>
    <input type="text" name="nama_customer" class="form-control"
        value="{{ old('nama_customer') }}"
        placeholder="Nama lengkap customer">
    @error('nama_customer')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Alamat</label>
    <textarea name="alamat" class="form-control" rows="3"
        placeholder="Alamat lengkap">{{ old('alamat') }}</textarea>
    @error('alamat')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control"
        value="{{ old('email') }}"
        placeholder="customer@email.com">
    @error('email')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>

<div class="mb-3">
    <label class="form-label">No. Telp</label>
    <input type="text" name="no_telp" class="form-control"
        value="{{ old('no_telp') }}"
        placeholder="08xxxxxxxxxx">
    @error('no_telp')
        <div class="text-danger small mt-1">{{ $message }}</div>
    @enderror
</div>
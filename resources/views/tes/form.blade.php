<div class="mb-3">
    <label for="">Code Client</label>
    <input type="text" name="product_client" class="form-control"
        value="{{ old('product_client', $tes->product_client ?? ($generatedCode ?? '')) }}" readonly>
</div>
<div class="mb-3">
    <label for="">Name</label>
    <input type="text" name="name_client" class="form-control" value={{ old('name_client', $tes->name_client ?? '') }}>
</div>
<div class="mb-3">
    <label for="">Alamat</label>
    <input type="text" name="alamat" class="form-control" value={{ old('alamat', $tes->alamat ?? '') }}>
</div>
<div class="mb-3">
    <label for="">PIC</label>
    <input type="text" name="pic" class="form-control" value={{ old('pic', $tes->pic ?? '') }}>
</div>
<div class="mb-3">
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" value={{ old('email', $tes->email ?? '') }}>
</div>
<div class="mb-3">
    <label for="">Nomor HP</label>
    <input type="nomor_hp" name="nomor_hp" class="form-control" value={{ old('nomor_hp', $tes->nomor_hp ?? '') }}>
</div>

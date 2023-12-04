<x-layout pageTitle="Tambah Data Produk">
    <div class="d-flex vh-100 align-items-center justify-content-center bg-dark-subtle">
        <form action="/produk" method="post" class="w-50 p-4 rounded bg-white">
            @csrf
            <h3>Tambah Data Produk</h3>

            <div class="form-group mb-4">
              <label for="nama_produk">Nama Produk</label>
              <input type="text" name="nama_produk" class="form-control" placeholder="Masukkan nama produk" required>
            </div>
            @error('nama_produk')
            <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror

            <div class="form-group mb-4">
              <label for="harga">Harga</label>
              <input name="harga" type="number" class="form-control" placeholder="Masukkan harga" required>
            </div>
            @error('harga')
            <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror

            <div class="form-group mb-4">
                <label for="merk_id">Merk</label>
                <select name="merk_id" class="form-control">
                    <option value="" selected>Pilih merk...</option>
                    @foreach(App\Models\Merk::all() as $merk)
                        <option value="{{$merk->id}}">{{$merk->nama_merk}}</option>
                    @endforeach
                </select>
            </div>
            @error('merk_id')
            <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror

            <div class="form-group mb-4">
                <label for="kategori_id">Kategori</label>
                <select name="kategori_id" class="form-control">
                    <option value="" selected>Pilih kategori...</option>
                    @foreach(App\Models\Kategori::all() as $kategori)
                        <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
                    @endforeach
                </select>
            </div>
            @error('kategori_id')
            <p class='text-danger inputerror'>{{ $message }} </p>
            @enderror
            <div class="d-flex w-100 justify-content-between">
                <button type="submit" class="btn btn-primary">Tambah</button>
                <a href="/produk" class="btn btn-outline-primary">Batal</a>
            </div>
        </form>
    </div>
</x-layout>
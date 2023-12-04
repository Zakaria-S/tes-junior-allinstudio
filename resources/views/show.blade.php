<x-layout pageTitle="Lihat Data Produk">
    <div class="d-flex vh-100 align-items-center justify-content-center bg-dark-subtle">
        <div class="d-flex w-50 flex-column align-items-center bg-white p-4 rounded-4">
            <h3>Data Produk</h3>
            <p><b>Nama: </b> {{$produk->nama_produk}}</p>
            <p><b>Harga: </b> Rp{{number_format($produk->harga, 2, ",", ".")}}</p>
            <p><b>Merk: </b> {{$produk->merk->nama_merk}}</p>
            <p><b>Kategori: </b> {{$produk->kategori->nama_kategori}}</p>
            <div class="d-flex w-100 justify-content-left">
                <a href="/produk" class="btn btn-outline-primary">Kembali</a>
            </div>
        </div>
    </div>
</x-layout>
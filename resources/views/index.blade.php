<x-layout pageTitle="Tabel Produk">
    <div class="container">
        <div class="d-flex w-100 justify-content-between align-items-center my-4">
            <a href="/produk/create" class="btn btn-primary">Tambah Data</a>
            <form method="POST" action="/sign-out" class="d-none" id="logout-form">
                @csrf
            </form>
            <a href="javascript:;" class="btn btn-outline-primary">
                <i class="fa fa-user me-md-2"></i>
                <span class="d-sm-inline d-none"
                      onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign
                      Out</span>
            </a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>              
                    <th>Merk</th>       
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach($list_produk as $produk)
                <tr>
                    <td>{{$loop->index + 1}}</td>
                    <td>{{$produk->nama_produk}}</td>
                    <td>Rp{{number_format($produk->harga, 2, ",", ".")}}</td>
                    <td>{{$produk->merk->nama_merk}}</td>
                    <td>{{$produk->kategori->nama_kategori}}</td>
                    <td>
                        <a href="/produk/{{$produk->id}}" class="btn btn-success">Show</a>
                        <a href="/produk/{{$produk->id}}/edit" class="btn btn-warning">Edit</a>
                        <form method="post" action="/produk/{{$produk->id}}" accept-charset="UTF-8" class="d-inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger"
                                onclick="return confirm ('Apakah anda yakin ingin menghapus data ini?')">
                                Hapus
                                <div class="ripple-container"></div>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
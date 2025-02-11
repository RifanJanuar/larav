@extends('layout.appadmin')

@section("content")
        <div class="row">
            <div class="col-6">
            <h2 class>Input Kategori </h2>
                <form action="{{ route('admin.storekategori') }}" method="post" enctype="multipart/form-data">
                  @csrf 
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Nama Kategori </label>
                        <input type="text" class="form-control" name="nama" >
                    </div>
                    <div class="mb-3">
                        <label for="namaBuku" class="form-label">Deskripsi Kategori </label>
                        <input type="text" class="form-control" name="deskripsi" >
                    </div>

                    <div class="mb-3">
                        <input type="submit" value="Input Data Buku" class="btn btn-primary" name="btnInputBukuGambar">
                    </div>

                    <table class="table">
                      <tr>
                        <td>#</td>
                        <td>Nama</td>
                        <td colspan=2>Menu</td>
                      </tr>
                    @forelse ($kat as $k )
                      <tr>
                        <td>{{ $k->id }}</td>
                        <td>{{ $k->nama }}</td>
                        <td>Edit</td>
                        <td>Delete</td>
                      </tr>

                      @empty
                      no info
                      @endforelse
                    </table>
                  </form>

                  @if (session('error'))
                  {{session('error')}}
                  @endif

                  @if (session('succes'))
                  {{session('succes')}}
                  @endif
@endsection
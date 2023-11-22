@extends('layouts.app')
  
@section('title')
  
@section('contents')
<div class="d-flex align-items-center justify-content-between">
    <h1 class="mb-0">Tampilan Halaman Customers</h1>
</div>
<hr />

<table class="table table-hover">
    <thead class="table-primary">
        <tr>
            <th scope="col">#</th>
            <th scope="col">NamaProduct</th>
            <th scope="col">JenisTanaman</th>
            <th scope="col">Foto</th>
            <th scope="col">Deskripsi</th>
            <th scope="col">Stock</th>
            <th scope="col">Harga</th>
            <th scope="col">Aksi</th>
          </tr>
    </thead>
    <tbody>
        @if($product->count() > 0)
            @foreach($product as $rs)
                <tr>
                    <td class="align-middle">{{ $loop->iteration }}</td>
                    <td class="align-middle">{{ $rs->NamaProduk }}</td>
                    <td class="align-middle">{{ $rs->JenisTanaman }}</td>
                    <td>
                        @if($rs->image)
                        <img src="{{ asset('storage/images/' . $rs->image) }}" alt="Gambar" style="max-width: 200px; max-height: 200px;">

                        @else
                        <p>Tidak ada gambar yang tersedia</p>
                        @endif
                    
                    </td>
                    <td class="align-middle">{{ $rs->Deskripsi }}</td>
                    <td class="align-middle">{{ $rs->stock }}</td>
                    <td class="align-middle">{{ $rs->harga }}</td>     
                    <td class="align-middle">
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('login') }}" type="button" class="btn btn-success">Buy</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td class="text-center" colspan="5">Product not found</td>
            </tr>
        @endif
    </tbody>
</table>
@endsection


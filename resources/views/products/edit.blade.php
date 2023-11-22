@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">NamaProduk</label>
                <input type="text" name="NamaProduk" class="form-control" placeholder="NamaProduk" value="{{ $product->NamaProduk }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">JenisTanaman</label>
                <input type="text" name="JenisTanaman" class="form-control" placeholder="JenisTanaman" value="{{ $product->JenisTanaman }}" >
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Gambar</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image" value="{{ $product->image }}">
             @error('image')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea class="form-control" name="Deskripsi" placeholder="Deskripsi" >{{ $product->Deskripsi }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">stock</label>
                <input type="text" name="stock" class="form-control" placeholder="stock" value="{{ $product->stock }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">harga</label>
                <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $product->harga }}" >
            </div>
        </div>

        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
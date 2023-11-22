@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h1 class="mb-0">Add Product</h1>
    <hr />
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="NamaProduk" class="form-control" placeholder="NamaProduk">
            </div>
            <div class="col">
                <input type="text" name="JenisTanaman" class="form-control" placeholder="JenisTanaman">
            </div>
        </div>
        <div class="form-group">
            <label class="font-weight-bold">Gambar</label>
            <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
             @error('image')
            <div class="alert alert-danger mt-2">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="row mb-3">
            <div class="col">
                <textarea class="form-control" name="Deskripsi" placeholder="Deskripsi"></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="number" name="stock" class="form-control" placeholder="stock">
            </div>
            <div class="col">
                <input type="number" name="harga" class="form-control" placeholder="harga">
            </div>
        </div>

 
        <div class="row">
            <div class="d-grid">
                <button type="submit" class="btn btn-primary m-3">Submit</button>
            </div>
        </div>
    </form>
@endsection
@extends('layouts.app')
  
@section('title')
  
@section('contents')
    <h3 class="mb-0">Detail Product</h3>
    <hr />
    <div class="container">
        <div class="row justify-content-center">
          <div class="col-8">
            <div class="card">
              <div class="card-body">
    <div class="row">
        <div class="col mb-3 text-center">
        <img src="{{ asset('storage/images/' . $product->image) }}" alt="Gambar" style="max-width: 300px; max-height: 300px;"  alt="">
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">NamaProduk</label>
            <input type="text" name="NamaProduk" class="form-control" placeholder="NamaProduk" value="{{ $product->NamaProduk }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">JenisTanaman</label>
            <input type="text" name="JenisTanaman" class="form-control" placeholder="JenisTanaman" value="{{ $product->JenisTanaman }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="Deskripsi" placeholder="Deskripsi" readonly>{{ $product->Deskripsi }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">stock</label>
            <input type="text" name="stock" class="form-control" placeholder="stock" value="{{ $product->stock }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">harga</label>
            <input type="text" name="harga" class="form-control" placeholder="harga" value="{{ $product->harga }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->updated_at }}" readonly>
        </div>
    </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    
@endsection
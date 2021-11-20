@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="container">
        <form action="/update-product/{{ $product->id }}" method="post">
            @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
                </div>
                <input class="col-lg-5" name="name" type="text" class="form-control" maxlength="50" value="{{ $product->name }}">

                <div class="input-group-prepend">
                    <span class="input-group-text">Stock</span>
                </div>
                <input class="col-lg-1" name="stock" type="number" class="form-control" maxlength="2" value="{{ $product->stock }}">

                <div class="input-group-prepend">
                    <span class="input-group-text">State</span>
                </div>
                <select class="col-lg-4" name="state" id="state">
                    <option value="">Select option</option>
                    {{-- @if ({{ $product->state }} == "IN")
                    <option value="{{ $product->state }}">{{ $product->state }}</option> --}}
                    <option value="AC">Active</option>
                    {{-- @else --}}
                    {{-- <option value="{{ $product->state }}">{{ $product->state }}</option> --}}
                    <option value="IN">Inactive</option>
                    {{-- @endif --}}
                  </select>
                {{-- <input type="select" aria-label="{{ $product->state }}" class="form-control"> --}}
                <div class="input-group my-2">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Image</span>
                        </div>
                        <input name="image" accept="image/*" type="image" placeholder="Imagen" class="form-control"  required>

                        <div class="input-group-prepend">
                            <span class="input-group-text">Catalogue</span>
                        </div>

                        <select class="col-lg-4" name="id_catalogue" id="id_catalogue" required>
                            @foreach ($catalogue as $catalogues)
                            <option value="{{ $catalogues->id }}">{{ $catalogues->name }}</option> 
                            @endforeach
                        </select>
                </div>
                <button class="btn btn-outline-success mx-2" type="submit">Update</button>
            </div>
            
        </form>
    </div>
</div>

        
@endsection
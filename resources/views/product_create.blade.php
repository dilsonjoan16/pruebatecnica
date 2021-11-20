    @extends('layouts.app')
    @section('content')
    <div class="row justify-content-center">
        <div class="container">
            <form action="/create-product" method="post">
                @csrf
                <div class="input-group">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Name</span>
                    </div>
                    <input class="col-lg-3" name="name" type="text" placeholder="Name" class="form-control" maxlength="50" required>

                    <div class="input-group-prepend">
                    <span class="input-group-text">Stock</span>
                    </div>
                    <input class="col-lg-1" name="stock" type="number" placeholder="Stock" class="form-control" maxlength="2" required>
                    
                    <div class="input-group-prepend">
                        <span class="input-group-text">State</span>
                    </div>
                    <select class="col-lg-3" name="state" id="state" required>
                        <option value="AC">Active</option>  
                        <option value="IN">Inactive</option>
                    </select>
                    {{-- <input type="select" aria-label="{{ $usuario->state }}" class="form-control"> --}}

                    <div class="input-group my-2">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Image</span>
                        </div>
                            <input name="image" accept="image/*" type="file" placeholder="Imagen" class="form-control col-lg-6"  required>

                            <div class="input-group-prepend">
                                <span class="input-group-text">Catalogue</span>
                            </div>

                            <select class="col-lg-4" name="id_catalogue" id="id_catalogue" required>
                                @foreach ($catalogue as $catalogues)
                                <option value="{{ $catalogues->id }}">{{ $catalogues->name }}</option> 
                                @endforeach
                            </select>
                    </div>
                    <button class="btn btn-outline-success mx-2" type="submit">Create</button>
                </div>
            </form>
        </div>
    </div>
    @endsection
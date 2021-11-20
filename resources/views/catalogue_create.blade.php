@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="container">
        <form action="/create-catalogue" method="post">
            @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
                </div>
                <input name="name" type="text" placeholder="Name" class="form-control col-lg-6" maxlength="40" required>

                <div class="input-group-prepend">
                    <span class="input-group-text">State</span>
                </div>
                <select name="state" id="state" class="col-lg-4" required>
                    <option value="AC">Active</option>
                    <option value="IN">Inactive</option>
                  </select>
                {{-- <input type="select" aria-label="{{ $usuario->state }}" class="form-control"> --}}
                <button class="btn btn-outline-success mx-2" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
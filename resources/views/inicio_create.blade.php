@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="container">
        <form action="/create" method="post">
            @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">User</span>
                </div>
                <input name="user" type="text" placeholder="Username" class="form-control" maxlength="20" required>

                <div class="input-group-prepend">
                    <span class="input-group-text">password</span>
                </div>
                <input name="user" type="password" placeholder="Password" class="form-control" maxlength="20" required>

                <div class="input-group-prepend">
                    <span class="input-group-text">State</span>
                </div>
                <select name="state" id="state" required>
                    <option value="AC">Active</option>
                    <option value="IN">Inactive</option>
                  </select>
                {{-- <input type="select" aria-label="{{ $usuario->state }}" class="form-control"> --}}
                <div class="input-group-prepend">
                    <span class="input-group-text">Profile</span>
                </div>
                <select name="profile" id="profile" required>
                    <option value="2">Edit</option>
                    <option value="1">Admin</option>
                  </select>
                {{-- <input type="text" aria-label="{{ $usuario->profile }}" class="form-control"> --}}
                <button class="btn btn-outline-success mx-2" type="submit">Create</button>
            </div>
        </form>
    </div>
</div>
@endsection
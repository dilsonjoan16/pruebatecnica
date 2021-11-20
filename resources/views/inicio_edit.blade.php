@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="container">
        <form action="/update/{{ $usuario->id }}" method="post">
            @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">User</span>
                </div>
                <input name="user" type="text" class="form-control" maxlength="20" value="{{ $usuario->user }}">

                <div class="input-group-prepend">
                    <span class="input-group-text">password</span>
                </div>
                <input name="user" type="password" class="form-control" maxlength="20" value="{{ $usuario->password }}">

                <div class="input-group-prepend">
                    <span class="input-group-text">State</span>
                </div>
                <select name="state" id="state">
                    <option value="">Select option</option>
                    {{-- @if ({{ $usuario->state }} == "IN")
                    <option value="{{ $usuario->state }}">{{ $usuario->state }}</option> --}}
                    <option value="AC">Active</option>
                    {{-- @else --}}
                    {{-- <option value="{{ $usuario->state }}">{{ $usuario->state }}</option> --}}
                    <option value="IN">Inactive</option>
                    {{-- @endif --}}
                  </select>
                {{-- <input type="select" aria-label="{{ $usuario->state }}" class="form-control"> --}}
                <div class="input-group-prepend">
                    <span class="input-group-text">Profile</span>
                </div>
                <select name="profile" id="profile">
                    <option value="">Select option</option>
                    {{-- @if ({{ $usuario->profile }} == "1")
                    <option value="{{ $usuario->profile }}">Admin</option> --}}
                    <option value="2">Edit</option>
                    {{-- @else
                    <option value="{{ $usuario->profile }}">Edit</option> --}}
                    <option value="1">Admin</option>
                    {{-- @endif --}}
                  </select>
                {{-- <input type="text" aria-label="{{ $usuario->profile }}" class="form-control"> --}}
                <button class="btn btn-outline-success mx-2" type="submit">Update</button>
            </div>
            
        </form>
    </div>
</div>

        
@endsection
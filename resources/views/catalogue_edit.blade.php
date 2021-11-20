@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="container">
        <form action="/update-catalogue/{{ $catalogue->id }}" method="post">
            @csrf
            <div class="input-group">
                <div class="input-group-prepend">
                <span class="input-group-text">Name</span>
                </div>
                <input name="name" type="text" class="form-control col-lg-6" maxlength="40" value="{{ $catalogue->name }}">

                <div class="input-group-prepend">
                    <span class="input-group-text">State</span>
                </div>
                <select name="state" id="state" class="col-lg-4">
                    <option value="">Select option</option>
                    {{-- @if ({{ $catalogue->state }} == "IN")
                    <option value="{{ $catalogue->state }}">{{ $catalogue->state }}</option> --}}
                    <option value="AC">Active</option>
                    {{-- @else --}}
                    {{-- <option value="{{ $catalogue->state }}">{{ $catalogue->state }}</option> --}}
                    <option value="IN">Inactive</option>
                    {{-- @endif --}}
                  </select>
                {{-- <input type="select" aria-label="{{ $catalogue->state }}" class="form-control"> --}}
                <button class="btn btn-outline-success mx-2" type="submit">Update</button>
            </div>
        </form>
    </div>
</div>

        
@endsection
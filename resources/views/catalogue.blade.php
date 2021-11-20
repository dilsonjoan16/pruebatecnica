@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10 col-md-6 col-sm-6">
        <table class="container">
            <div>
                @if (Auth::user()->profile == 1)
                    <a class="btn btn-outline-warning" href="/create-catalogue">Create Catalogue</a>
                @endif
            </div>
            <thead class="row justify-content-center">
              <tr>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Name</th>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">State</th>
                @if (Auth::user()->profile == 1)
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Edit</th>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Delete</th>
                @else
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Edit</th>
                @endif
              </tr>
            </thead>
            @foreach ($catalogue as $catalogues)
            <tbody class="row justify-content-center">
                <tr class="my-2">
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto">{{ $catalogues->name }}</td>
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto">{{ $catalogues->state }}</td>
                    @if (Auth::user()->profile == 1)
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><a  class="btn btn-outline-success btn-sm" href="/edit-catalogue/{{ $catalogues->id }}">Edit</a></th>
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><a  class="btn btn-outline-danger btn-sm" href="/delete-catalogue/{{ $catalogues->id }}">Delete</a></th>
                    @else
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><a  class="btn btn-outline-success btn-sm" href="/edit-catalogue/{{ $catalogues->id }}}">Edit</a></th>
                    @endif
                  </tr>
                </tbody>
                @endforeach
          </table>
    </div>
</div>
    
@endsection
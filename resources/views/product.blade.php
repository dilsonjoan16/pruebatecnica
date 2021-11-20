@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
    <div class="col-lg-10 col-md-6 col-sm-6">
        <table class="container">
            <div>
                @if (Auth::user()->profile == 1)
                    <a class="btn btn-outline-warning" href="/create-product">Create Product</a>
                @endif
            </div>
            <thead class="row justify-content-center">
              <tr>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Name</th>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Stock</th>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Image</th>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">State</th>
                @if (Auth::user()->profile == 1)
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Edit</th>
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Delete</th>
                @else
                <th class="col-lg-4 col-md-2 col-sm-2 mx-auto">Edit</th>
                @endif
              </tr>
            </thead>
            @foreach ($product as $products)
            <tbody class="row justify-content-center">
                <tr class="my-2">
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto">{{ $products->name }}</td>
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto">{{ $products->stock }}</td>
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><img src="/images/{{ $products->image }}" alt=""/></td>
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto">{{ $products->state }}</td>
                    @if (Auth::user()->profile == 1)
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><a  class="btn btn-outline-success btn-sm" href="/edit-product/{{ $products->id }}">Edit</a></th>
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><a  class="btn btn-outline-danger btn-sm" href="/delete-product/{{ $products->id }}">Delete</a></th>
                    @else
                    <td class="col-lg-2 col-md-2 col-sm-2 mx-auto"><a  class="btn btn-outline-success btn-sm" href="/edit-product/{{ $products->id }}}">Edit</a></th>
                    @endif
                  </tr>
                </tbody>
                @endforeach
          </table>
    </div>
</div>
    
@endsection
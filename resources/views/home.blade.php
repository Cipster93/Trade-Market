@extends('layouts/app')

@push('styles')
<link rel="stylesheet" href="{{ asset('style/home.css') }}">
@endpush

@section('content')
<div class="mainHome">
  <form action="{{ route('search') }}" method="GET" class="search">
      <input type="search" name="query" placeholder="Search item" value="{{ request('query') }}">
      <button type="submit" class="btnSearch">Search</button>
  </form>

  @if($sellers->isEmpty())
      <p class="noItem">No results found for '{{ request('query') }}'.</p>
  @else
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Profile</th>
            <th scope="col">Seller Name</th>
            <th scope="col">Item</th>
            <th scope="col">Price</th>
          </tr>
        </thead>
        <tbody>
          @foreach($sellers as $seller)
              @foreach($seller->products->unique('id') as $product)
              <tr>
                <td>
                  @if ($seller->profile == 'Male')
                  <img src="{{ asset('photo/mele.jpg') }}" class="mele" style="width: 50px;" height="50px">
                  @elseif ($seller->profile == 'Female')
                  <img src="{{ asset('photo/female.jpg') }}" class="female" style="width: 50px;" height="50px">
                  @endif
                </td>
                <td>{{ $seller->seller_name }}</td> 
                <td>{{ $product->product_name }}</td>
                <td>{{ $product->pivot->price }} $</td>
              </tr>
              @endforeach
          @endforeach
        </tbody>
      </table>
  @endif
</div>
@endsection

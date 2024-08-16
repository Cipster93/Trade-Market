@extends('layouts/app')


@push('styles')
<link rel="stylesheet" href="{{ asset('style/create.css') }}">
@endpush

@section('content')
<div class="creapte-page">
    <form action="{{ route('store') }}" method="post">
        @csrf
        Item Name: <br>
        <input type="text" name="product_name"> <br>

        Set Price: <br>
        <input type="number" name="price" step="0.01" min="0.01"> <br><br>

        <button type="submit" class="btn btn-success">Sell Item</button>
    </form>
</div>

@endsection
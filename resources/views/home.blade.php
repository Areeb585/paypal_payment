@extends('layouts.app')

@section('content')
<div class="card w-75 mx-auto my-8">
    <div class="row no-gutters">
        <div class="col-md-6">
            <img src="{{ asset('images/T-shirt.png') }}" class="card-img" alt="Product Image">
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h5 class="card-title">White T-shirt</h5>
                <p class="card-text"><strong>Price: $200</strong></p>
                <p class="card-text">Demand offers graphic tees, hoodies, clothing and accessories from a vast selection of popular brands and independent content creators.</p>
                <form action="{{ route('payment') }}" method="post">
                    @csrf
                    <input type="hidden" name="amount" value="200">
                    <button type="submit" class="btn btn-primary btn-block">
                        Pay with PayPal
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <h1>Order for {{ $pizza->name }}</h1>
            <p class="type">Type - {{$pizza->type}}</p>
            <p class="base">Base - {{$pizza->base}}</p>
            <p class="toppings">Toppings: </p>
            <ul>
                @foreach($pizza->toppings as $topping)
                    <li>{{$topping}}</li>
                @endforeach
            </ul>
        </div>

    </div>
@endsection


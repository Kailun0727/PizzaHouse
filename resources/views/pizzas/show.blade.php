@extends('layouts.app')

@section('content')
<div class="wrapper pizza-details">
    <h1>Order for {{$pizza->name}}</h1>
    <p class="type">Type - {{$pizza->type}}</p>
    <p class="base">Base - {{$pizza->base}}</p>
    <p class="id">ID - {{$pizza->id}}</p>
    <p class="toppings">Extra toppings:</p>
    <ul>
        @if($pizza->toppings == null)
            <p>No toppings</p>
        @else
            <ul>
                @foreach( $pizza->toppings as $key=>$topping )
                <li>{{$topping}}</li>
                @endforeach
            </ul>
        @endif
    </ul>
    <form action="/pizzas/{{$pizza->id}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="delete">Complete Order</button>
    </form>
</div>
<a href="/pizzas" class="back"><- Back to all pizzas</a>
@endsection
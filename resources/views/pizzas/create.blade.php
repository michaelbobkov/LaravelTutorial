@extends('layouts.layout')

@section('content')
    <div class="wrapper create-pizza">
        <h1>Create a New Pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name: </label>
            <input type="text" name="name" id="name">
            <label for="type">Choose type: </label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="vegetarian">Vegetarian</option>
                <option value="volcano">Volcano</option>
            </select>
            <label for="base">Choose base: </label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy crust</option>
                <option value="garlic crust">Garlic crust</option>
                <option value="thin">Thin</option>
                <option value="thick">Thick</option>
            </select>
            <fieldset>
                <label>Toppings: </label>
                <input name="toppings[]" type="checkbox" value="mushrooms">Mushrooms <br>
                <input name="toppings[]" type="checkbox" value="peppers">Peppers <br>
                <input name="toppings[]" type="checkbox" value="garlic">Garlic <br>
                <input name="toppings[]" type="checkbox" value="olives">Olives <br>
            </fieldset>
            <input type="submit" name="submit" id="submit" value="Order Pizza">
        </form>

    </div>
@endsection

@extends('layouts.layout')

@section('content')
    <div class="flex-center position-ref full-height">
        <div class="content">
            <div class="title m-b-md justify-center">
                Pizza List
            </div>
{{--            <p>--}}
{{--                {{$type}} - {{$base}} - {{$price}}--}}
{{--            </p>--}}

{{--            @if($price > 15)--}}
{{--                <p>This pizza is expensive</p>--}}
{{--            @elseif($price < 5)--}}
{{--                <p>This pizza is cheap</p>--}}

{{--            @endif--}}


{{--            @unless($base == 'cheesy crust')--}}
{{--                <p>You don't have a cheesy crust</p>--}}
{{--            @endunless--}}

{{--            @php--}}
{{--                $name = 'Michael';--}}
{{--                echo($name)--}}
{{--            @endphp--}}
{{--            @for($i =0; $i < 5; $i++)--}}
{{--                <p>The value of i is {{$i}}</p>--}}
{{--            @endfor--}}
    {{--            @for($i = 0; $i < count($pizzas); $i++)--}}
    {{--                <p>--}}
    {{--                    {{$pizzas[$i]['type']}}--}}
    {{--                </p>--}}
    {{--            @endfor--}}



{{--            @foreach($pizzas as $pizza)--}}
{{--                <div>--}}
{{--                    {{$loop->index}} - {{$pizza['type']}} - {{$pizza['base']}}--}}
{{--                    @if($loop->first)--}}
{{--                        <span> - first in the loop</span>--}}
{{--                    @endif--}}
{{--                    @if($loop->last)--}}
{{--                        <span> - last in the loop</span>--}}
{{--                    @endif--}}
{{--                </div>--}}
{{--            @endforeach--}}
                @foreach($pizzas as $pizza)
                    <div>
                        {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
                    </div>
                @endforeach
        </div>
    </div>
@endsection


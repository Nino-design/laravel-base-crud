
@extends('layout.app')

@section('main_content')
<div class="container">
    <ul>
        @foreach ($comic as $item)
        <li>
            <h3>{{$item->title}}</h3>
            <p>{{$item->description}}</p>
        </li>
        @endforeach
    </ul>
</div>


@endsection
   

@extends('layout')

@section('content')
    <div class="o-send-email">
        <h3>Email sent to the following recepients:</h3>
        <ul>
            @foreach ($emails as $element)
                <li>{{json_decode($element)->email}}</li>
            @endforeach

        </ul>
    </div>



@endsection

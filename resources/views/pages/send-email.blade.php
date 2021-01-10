@extends('layout')

@section('content')
    <div class="o-send-email">
        <h2 class="a-send-email-header">Email sent to the following recepients:</h2>
        <ul>
            @foreach ($emails as $element)
                <li>{{json_decode($element)->email}}</li>
            @endforeach

        </ul>
    </div>



@endsection

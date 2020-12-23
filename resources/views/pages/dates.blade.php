@extends('layout')

@section('content')
    <div class="pages">
        <div class="searchStudent">
            <div class="title">
                <h2>Exams - Dates</h2>
            </div>

            <div class="container">

                <div class="container__results">

                    @if (isset($dates))
                        @foreach ( $dates as $date)
                            <button  class="classroom">
                                <a href="{{route('examsStudents', [$date->scan_date, $date->classroom_id]) }}">{{ $date->scan_date }}</a>
                            </button>
                        @endforeach
                    @endif
                    {{-- <button  class="classroom"> <a href="{{route('examsStudents') }}">8/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">11/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">14/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">15/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">21/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">24/01/2021</a></button> --}}

                </div>
            </div>
        </div>
    </div>
@endsection

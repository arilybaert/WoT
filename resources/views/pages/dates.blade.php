@extends('layout')

@section('content')
    <div class="pages">
        <div class="searchStudent">
            <div class="title">
                <h2>Exams - Dates</h2>
            </div>

            <div class="container">

                <div class="container__results">

                    {{-- @if (isset($classrooms))
                        @foreach ( $classrooms as $classroom)
                            <button  class="classroom">
                                <a href="{{route('examsStudents', $classroom->classroom_id) }}">{{ $classroom->classroom->title }}</a>
                            </button>



                        @endforeach
                    @endif --}}
                    <button  class="classroom"> <a href="{{route('examsStudents') }}">8/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">11/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">14/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">15/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">21/01/2021</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">24/01/2021</a></button>

                </div>
            </div>
        </div>
    </div>
@endsection

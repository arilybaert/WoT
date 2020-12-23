@extends('layout')

@section('content')
    <div class="pages">
        <div class="searchStudent">
            <div class="title">
                <h2>Exams - Classrooms</h2>
            </div>

            <div class="container">

                <div class="container__results">

                    @if (isset($classrooms))
                        @foreach ( $classrooms as $classroom)
                            <button  class="classroom">
                                <a href="{{route('examsStudents', $classroom->classroom_id) }}">{{ $classroom->classroom->title }}</a>
                            </button>



                        @endforeach
                    @endif
                    {{-- <button  class="classroom"> <a href="{{route('examsStudents') }}">A11</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A12</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A13</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A14</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A21</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A22</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A23</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">A24</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B11</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B12</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B13</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B14</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B21</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B22</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B23</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">B24</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C1</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C2</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C3</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C4</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C5</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C6</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C7</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">C8</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">AUDI 1</a></button>
                    <button class="classroom"><a href="{{route('examsStudents') }}">AUDI 2</a></button> --}}
                </div>
            </div>
        </div>
    </div>
@endsection

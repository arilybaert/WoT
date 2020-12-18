@extends('layout')

@section('content')
    <div class="pages">
        <div class="searchStudent">
            <div class="title">
                <h2>Search student</h2>
            </div>

                <div class="container">
                    <div class="container__header">

                        <form class="form" method="POST" action=" {{ route('search.student') }}">
                            @csrf
                            <label>Student number:</label>
                            <input type="text" id="studentnumber" name="studentnumber" value="{{ old('studentnumber') }}">
                            <label>Start searching from:</label><input type="date" id="date" name="date">
                            <button class="img-box" type="submit"><img  class="img-box__search" src="{{ asset('../images/search.png')}}"></button>
                        </form>
                    </div>
                    @if (isset($search_student_name))
                            {{-- @foreach ($students as $student ) --}}
                                <p class="name">Name: {{$search_student_name}}</p>
                            {{-- @endforeach --}}
                    @endif

                    <div class="container__results">
                        <form action="{{route('sendAlert')}}" method="post">
                            @csrf
                        <TABLE>
                            <COLGROUP ALIGN="left" WIDTH="90">
                            </COLGROUP>
                            <COLGROUP SPAN="2" ALIGN="center" WIDTH="60">
                            </COLGROUP>
                            <TR>
                            <TD class="title">Firstname</TD>
                            <TD  class="title">Lastname</TD>
                            <TD  class="title">Student ID</TD>
                            <TD  class="title">Notified</TD>
                            <TD><button>Send notification</button></TD>
                            </TR>
                            @if (isset($students))
                                @foreach ($students as $student)

                                    <TR>
                                        <TD>{{$student->student->firstname}}</TD>
                                        <TD>{{$student->student->email}}</TD>
                                        <input value="{{$student->student}}" name="ids[]" type="hidden">
                                        <TD>{{$student->student_id}}</TD>
                                        <TD>{{$student->notified ? 'Yes' : 'No' }}</TD>
                                    </TR>
                                @endforeach
                            @endif

                            </TABLE>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

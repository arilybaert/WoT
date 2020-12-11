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
                        @if (isset($students))
                            @foreach ($students as $student )
                                <p class="name">Name: {{$student->firstname}} {{$student->lastname}}</p>
                            @endforeach
                        @endif
                <div class="container__results">
                    <TABLE>
                        <COLGROUP ALIGN="left" WIDTH="90"></COLGROUP>
                        <COLGROUP SPAN="2" ALIGN="center" WIDTH="60"></COLGROUP>
                        <TR>
                            <TD class="title">DATE</TD><TD  class="title">Classroom</TD><TD  class="title">AMOUNT</TD><TD  class="title">SEND</TD><TD  class="title">NOTIFICATION SEND</TD>
                        </TR>
                            @if (isset($classrooms))
                                @foreach ($classrooms as $classroom)
                                    <TR>
                                        <TD>{{$classroom->scan_date}}</TD><TD><a href="{{route('students.classroom', [$classroom->scan_time, $classroom->scan_date])}}">{{$classroom->classroom->title}}</a></TD><TD>{{$classroom->amount}}</TD><TD><button>Send notification</button></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                                    </TR>
                                @endforeach
                            @endif
                    </TABLE>
                </div>
            </div>
        </div>
    </div>
@endsection

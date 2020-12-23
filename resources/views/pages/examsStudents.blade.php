@extends('layout')

@section('content')
    <div class="pages">
        <div class="searchStudent">
            <div class="title">
                <a class="img-box" href="{{route('search')}}"><img class="img-box__back" src="{{ asset('../images/back.png')}}"></a>
                <h2>Students in local</h2>
            </div>

            <div class="container">
                <div class="container__header">
                    <p class="local">C6</p>
                </div>

                <div class="container__results">
                    <TABLE>
                        <COLGROUP ALIGN="left" WIDTH="90"></COLGROUP>
                        <COLGROUP SPAN="2" ALIGN="center" WIDTH="60"></COLGROUP>
                        <TR>
                            <TD class="title">DATE</TD><TD  class="title">HOUR</TD><TD  class="title">NAME</TD>
                        </TR>
                        @if (isset($students))
                            @foreach ($students as $student)
                            <TR>
                                <TD>{{$student->scan_date}}</TD>
                                <TD>{{$student->scan_time}}</TD>
                                <TD>{{$student->student->firstname . ' ' . $student->student->lastname}}</TD>
                            </TR>
                            @endforeach
                        @endif

                    </TABLE>
                </div>
            </div>
        </div>
    </div>
@endsection

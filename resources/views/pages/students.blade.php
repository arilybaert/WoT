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
                    @if (isset($classroom))
                        <p class="local">Local: {{$classroom->classroom->title}}</p>
                    @endif
                </div>

                <div class="container__results">
                    <TABLE>
                        <COLGROUP ALIGN="left" WIDTH="90"></COLGROUP>
                        <COLGROUP SPAN="2" ALIGN="center" WIDTH="60"></COLGROUP>
                        <TR>
                            <TD class="title">DATE</TD><TD  class="title">NAME</TD>
                        </TR>
                            @foreach ($classrooms as $classroom)
                                <TR>
                                    <TD>{{$classroom->scan_date}}</TD>
                                    <TD>{{$classroom->student->firstname}}</TD>
                                </TR>
                            @endforeach

                                {{-- <TR>
                                    <TD>5/10/2020</TD><TD>morgbeka... post empty</TD>
                                </TR> --}}
                    </TABLE>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout')

@section('content')
    <div class="pages">
        <div class="searchStudent">
            <div class="title">
                <a class="img-box" href="{{route('search')}}"><img  class="img-box__back" src="{{ asset('../images/back.png')}}"></a>
                <h2>Logbook</h2>
            </div>

            <div class="container">
                <div class="container__header">
                    <p>Your search history</p>
                </div>

                <div class="container__results">
                    <TABLE>
                        <COLGROUP ALIGN="left" WIDTH="90"></COLGROUP>
                        <COLGROUP SPAN="2" ALIGN="center" WIDTH="60"></COLGROUP>
                        <TR>
                            <TD class="title">NAME</TD><TD  class="title">DATE</TD>
                        </TR>
                        @if (isset($logs))
                            @foreach ($logs as $log)
                                <TR>
                                    <TD>{{$log->student->firstname . ' ' . $log->student->lastname}}</TD>
                                    <TD>{{$log->notified_on}}</TD>

                                </TR>
                            @endforeach

                        @endif
                    </TABLE>
                </div>
            </div>
        </div>
    </div>
@endsection

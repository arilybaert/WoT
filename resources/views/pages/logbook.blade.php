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
                            <COLGROUP ALIGN="left" WIDTH="90">
                            </COLGROUP>
                            <COLGROUP SPAN="2" ALIGN="center" WIDTH="60">
                            </COLGROUP>
                            <TR>
                                <TD class="title">DATE</TD><TD  class="title">LOCAL</TD><TD  class="title">NOTIFICATION SEND</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD><a href="{{route('students')}}">C6</a></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD><a href="{{route('students')}}">C6</a></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD><a href="{{route('students')}}">C6</a></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD><a href="{{route('students')}}">C6</a></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/check.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD><a href="{{route('students')}}">C6</a></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/check.png')}}"></TD>
                            </TR>
                        </TABLE>
                    </div>
                </div>

        </div>
    </div>

@endsection

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
                        <p>Number of students:</p>
                    </div>

                    <div class="container__results">
                        <TABLE>
                            <COLGROUP ALIGN="left" WIDTH="90">
                            </COLGROUP>
                            <COLGROUP SPAN="2" ALIGN="center" WIDTH="60">
                            </COLGROUP>
                            <TR>
                            <TD class="title">DATE</TD><TD  class="title">NAME</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>morgbeka</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>morgbeka</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>morgbeka</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>morgbeka</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>morgbeka</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>morgbeka</TD>
                            </TR>
                        </TABLE>
                    </div>
                </div>

        </div>
    </div>

@endsection

@extends('layout')

@section('content')

      <div class="pages">

        <div class="exams">
                <div class="title">
                    <a class="img-box" href="{{route('search')}}"><img class="img-box__back" src="{{ asset('../images/back.png')}}"></a>
                    <h2>Students in local</h2>
                </div>

                <div class="container">
                    <div class="container__header">
                        <p class="local">C6</p>
                        <p>Mediatechnologie</p>
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
                                <TD>8/01/2021</TD><TD>An-Sophie</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Janne</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Adam</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Lise</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Lukas</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Robin</TD>
                            </TR>
                        </TABLE>
                    </div>
                </div>

        </div>
    </div>

@endsection

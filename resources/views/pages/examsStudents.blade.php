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
                        <button class="notification">Send notification</button>
                    </div>

                    <div class="container__results">
                        <TABLE>
                            <COLGROUP ALIGN="left" WIDTH="90">
                            </COLGROUP>
                            <COLGROUP SPAN="2" ALIGN="center" WIDTH="60">
                            </COLGROUP>
                            <TR>
                            <TD class="title">DATE</TD><TD  class="title">VOORMIDDAG</TD><TD  class="title">NAMIDDAG</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>An-Sophie</TD><TD>An-Sophie</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Janne</TD><TD>An-Sophie</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Adam</TD><TD>An-Sophie</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Lise</TD><TD>An-Sophie</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Lukas</TD><TD>An-Sophie</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Robin</TD><TD>An-Sophie</TD>
                            </TR>
                        </TABLE>
                    </div>
                </div>

        </div>
    </div>

@endsection

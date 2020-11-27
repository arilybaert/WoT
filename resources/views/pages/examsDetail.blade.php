@extends('layout')

@section('content')

      <div class="pages">

        <div class="searchStudent">
                <div class="title">
                    <a class="img-box" href="{{route('search')}}"><img class="img-box__back" src="{{ asset('../images/back.png')}}"></a>
                    <h2>Students in exam local</h2>
                </div>

                <div class="container">
                    <div class="container__search">
                        <p class="local">AUDI 1</p>
                    </div>

                    <div class="container__results">
                        <TABLE>
                            <COLGROUP ALIGN="left" WIDTH="90">
                            </COLGROUP>
                            <COLGROUP SPAN="2" ALIGN="center" WIDTH="60">
                            </COLGROUP>
                            <TR>
                            <TD class="title">DATE</TD><TD  class="title">EXAM</TD><TD  class="title">NUMBER OF STUDENTS</TD>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Mediatechnologie</TD><TD>110</TD><button>Students</button>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Besturingssystemen</TD><TD>113</TD><button>Students</button>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Web Technology</TD><TD>76</TD><button>Students</button>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Web Development</TD><TD>24</TD><button>Students</button>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Colour Science</TD><TD>115</TD><button>Students</button>
                            </TR>
                            <TR>
                                <TD>8/01/2021</TD><TD>Marketing</TD><TD>89</TD><button>Students</button>
                            </TR>
                        </TABLE>
                    </div>
                </div>

        </div>
    </div>

@endsection

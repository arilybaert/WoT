@extends('layout')

@section('content')
    <div class="pages">

        <div class="searchStudent">
                <div class="title">
                    <h2>Search student</h2>
                </div>

                <div class="container">
                    <div class="container__search">

                        <form class="form" method="POST" action=" {{ route('search.student') }}">
                            @csrf
                            <label>Student number:</label>
                            <input type="text" id="studentnumber" name="studentnumber">
                            <label>Start searching from:</label><input type="date" id="date" name="date">
                            <button class="img-box" type="submit"><img  class="img-box__search" src="{{ asset('../images/search.png')}}"></button>
                        </form>
                    </div>

                    <div class="container__results">
                        <TABLE>
                            <COLGROUP ALIGN="left" WIDTH="90">
                            </COLGROUP>
                            <COLGROUP SPAN="2" ALIGN="center" WIDTH="60">
                            </COLGROUP>
                            <TR>
                                <TD class="title">DATE</TD><TD  class="title">LESSON</TD><TD  class="title">LOCAL</TD><TD  class="title">AMOUNT</TD><TD  class="title">SEND</TD><TD  class="title">NOTIFICATION SEND</TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>1&2</TD><TD><a href="{{route('students')}}">C6</a></TD><TD>26</TD><TD><button>Send notification</button></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>1&2</TD><TD><a href="{{route('students')}}">C6</a></TD><TD>26</TD><TD><button>Send notification</button></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/check.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>1&2</TD><TD><a href="{{route('students')}}">C6</a></TD><TD>26</TD><TD><button>Send notification</button></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/check.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>1&2</TD><TD><a href="{{route('students')}}">C6</a></TD><TD>26</TD><TD><button>Send notification</button></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                            </TR>
                            <TR>
                                <TD>5/10/2020</TD><TD>1&2</TD><TD><a href="{{route('students')}}">C6</a></TD><TD>26</TD><TD><button>Send notification</button></TD><TD class="img-box"><img  class="img-box__icon" src="{{ asset('../images/cross.png')}}"></TD>
                            </TR>
                        </TABLE>
                    </div>
                </div>
        </div>
    </div>

@endsection

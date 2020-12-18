<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <title>Backoffice</title>
</head>
<body>
    <div class="row column">
        <ul class="header">
            <li role="headeritem"><a href="{{route('search') }}">Search student</a></li>
            <li role="headeritem"><a href="{{route('logbook') }}">Logbook</a></li>
            <li role="headeritem"><a href="{{route('exams') }}">Exams</a></li>
            <li class="logout" role="headeritem"><a  ref="{{route('logout') }}">Log Out</a></li>
        </ul>
    </div>
</body>
</html>

@include('headers')

<h1>Test Blade</h1>

@php
    $name='Jenifer';   

    $fruits = array('a', 'b', 'c', 'd', 'e');
    $age = 18;
@endphp

<h2>{{$name}}</h2>

<h2>Array</h2>

@foreach($fruits as $fruit)
    <ul>
        <li>{{$fruit}}</li>
    </ul>
@endforeach
<br>

@for($i=0;$i<=9;$i++)
    {{$i}} <br>
@endfor
<br>
<br>
@for($i=0;$i<=9;$i++)
    @if($i%2==0)
        {{$i}} <br>
    @endif
@endfor
<br>
{{$age>='18'?'Adult':'Not adult'}}
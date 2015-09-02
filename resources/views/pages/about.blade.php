@extends('app')

@section('content')

<h1>About</h1>

@if (count($people))
    <h3>People I Like:</h3>

    <ul>
        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
    </ul>
@endif


  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
  Dolorum iure obcaecati quos? Dolorem, obcaecati perspiciatis?
  Ad, consequuntur delectus enim error est fugit illum impedit
  incidunt iure labore magni, nisi nostrum quaerat quibusdam quos
  repellat tenetur voluptas. Aliquid aut dicta ducimus, ex facilis
   hic odit reprehenderit!
  Fugit illo nesciunt numquam tempore!</p>
@stop
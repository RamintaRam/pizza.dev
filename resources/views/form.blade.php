
<!DOCTYPE html>
<html>
<body style="background-image: url('http://cdn1.buuteeq.com/upload/23279/pizza.jpg.1920x807_default.jpg'); color: #f5f8fa">

@if(isset($name))
    <div style="background-color: lightgreen">Jūsų užsakymas pridėtas
        sėkmingai: {{$name  . ', id: ' . $id}}</div>

@endif

{!! Form::open(['url' => route('app.pizza.create')]) !!}



Picos padas: <br>
@foreach($pad as $key => $pad)
    {{Form::checkbox('pad[]', $key)}}
    {{$pad}}
    <br>
@endforeach

<br>
Ingredientai :<br>
@foreach($ingredients as $key => $ingredient)
    {{Form::checkbox('ingredients[]', $key)}}
    {{$ingredient}}
    <br>
@endforeach
<br>
Sūris: <br>
@foreach($cheese as $key => $cheese)
    {{Form::checkbox('cheese[]', $key)}}
    {{$cheese}}
    <br>
@endforeach

<br>


{{ Form::submit('Submit')}}

{!! Form::close() !!}

    </body>
    </html>

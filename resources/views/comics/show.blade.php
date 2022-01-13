<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>comic</title>
</head>
<body>
    <div>
        <h1>
           {{$comic->title}}
        </h1>
        <p>
            {{$comic->series}}
    </div>
   <a href="{{route('comics.edit', $comic->id)}}">modifica</a>>
   <form action="{{route('comics.destroy', $comic->id)}}" method="post">
    @csrf
        @method("DELETE")
       <input type="submit" value="elimina">
   </form>

   
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>single comic</title>
</head>
<body>
    
    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method("PUT")
        
        <div class="mb-3">
            <label for="form-title" class="form-label">Title</label>
            <input type="text" class="form-control"   name="title" id="form-title" 
            value='{{$comic["title"]}}'>
            
        </div>
        {{-- <div class="mb-3">
            <label for="form-description" class="form-label">description/label>
            <input type="text" class="form-control" name="description" id="form-description" >
        </div>'
        <div class="mb-3">
            <label for="form-price" class="form-label">price</label>
            <input type="text" class="form-control" name="price" id="form-price" >
        </div> --}}
        <div class="mb-3">
            <label for="form-series" class="form-label">series</label>
            <input type="text" class="form-control"   name="series" id="form-series" 
            value='{{$comic["series"]}}'>
        </div>
        
        <input type="submit" value="modifica">
    
        {{-- <div>
            <button class="btn btn-secondary" type="reset ">Reset</button>
            <button class="btn btn-success" type="submit">Create</button>
         </div> --}}
      
    </form>

   
</body>
</html>
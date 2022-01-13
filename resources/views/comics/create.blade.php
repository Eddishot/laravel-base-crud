@extends("comics.layout")
@section("content")


<form action="{{route("comics.store")}}" methods="post">
    @csrf

    <div class="mb-3">
        <label for="form-title" class="form-label">Title</label>
        <input type="text" class="form-control"  {{ $errors->has("title") ? 'is-invalid' : '' }}"  name="title" id="form-title" >
    </div>
    {{-- <div class="mb-3">
        <label for="form-description" class="form-label">description/label>
        <input type="text" class="form-control" name="description" id="form-description" >
    </div>
    <div class="mb-3">
        <label for="form-price" class="form-label">price</label>
        <input type="text" class="form-control" name="price" id="form-price" >
    </div> --}}
    <div class="mb-3">
        <label for="form-series" class="form-label">series</label>
        <input type="text" class="form-control"  {{ $errors->has("title") ? 'is-invalid' : '' }}"  name="series" id="form-series" >
    </div>

    <div>
        <button class="btn btn-secondary" type="reset ">Reset</button>
        <button class="btn btn-success" type="submit">Create</button>
     </div>
  
</form>
@endsection
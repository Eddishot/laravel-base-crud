@extends("comics.layout")

@section("content")

<div>
    <h1>
        Comics list
    </h1>
    <a class="btn btn-link" href="{{route("comics.create")}}">Add</a>

    <div>
        <ul>
            @foreach($comics as $comic)
            <li>
                <a href="{{route("comics.show", $comic->id)}}">{{$comic["title"]}}</a>
            </li>
            @endforeach
            {{-- @dump($comics) --}}
        </ul>
    </div>
</div>
@endsection


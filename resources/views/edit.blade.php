@extends('layout')

@section('content')
    <div>
        <h1>Update Blog</h1>

        <form method="POST" action="/blog/{{$article->id}}">
            @csrf
            @method('PUT')
            <div>
                <label for="title">Titel</label>

                <div>
                    <input type="text" name="title" id="title" value="{{$article->title}}">
                </div>
            </div>

            <div>
                <label for="excerpt">Uittreksel</label>

                <div>
                    <textarea name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                </div>
            </div>

            <div>
                <label for="body">Tekst</label>

                <div>
                    <textarea name="body" id="body">{{$article->body}}</textarea>
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </div>

        </form>
    </div>
@endsection

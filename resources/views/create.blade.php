@extends('layout')

@section('content')
    <div class="blogs">
        <h1>Blogs</h1>

        <form method="POST" action="/blog">
            @csrf
            <div class="error500">
            <div>
                <label for="title">Title</label>

                <div>
                    <textarea {{$errors->has('title') ? 'is-danger' : ''}} type="text" name="title" id="title" placeholder="Enter title here..."></textarea>

                    @if ($errors->has('title'))
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>
            </div>

            <div>
                <label for="excerpt">Excerpt</label>

                <div>
                    <textarea name="excerpt" id="excerpt" placeholder="Enter excerpt here..."></textarea>
                    @if ($errors->has('excerpt'))
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @endif
                </div>
            </div>

            <div>
                <label for="body">Text</label>

                <div>
                    <textarea name="body" id="body" placeholder="Enter text here..." ></textarea>
                    @if ($errors->has('body'))
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                    @endif
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Save</button>
                </div>
            </div>

            </div>

        </form>
    </div>

@endsection

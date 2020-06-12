@extends('layout')

@section('content')
    <div class="blogs">
        <h1>Blogs</h1>

        <form method="POST" action="/blog">
            @csrf
            <div class="error500">
            <div>
                <label for="title">Titel</label>

                <div>
                    <textarea {{$errors->has('title') ? 'is-danger' : ''}} type="text" name="title" id="title" placeholder="Vul hier de titel in..."></textarea>

                    @if ($errors->has('title'))
                    <p class="help is-danger">{{$errors->first('title')}}</p>
                    @endif
                </div>
            </div>

            <div>
                <label for="excerpt">Uittreksel</label>

                <div>
                    <textarea name="excerpt" id="excerpt" placeholder="Vul hier een uittreksel in..."></textarea>
                    @if ($errors->has('excerpt'))
                        <p class="help is-danger">{{$errors->first('excerpt')}}</p>
                    @endif
                </div>
            </div>

            <div>
                <label for="body">Tekst</label>

                <div>
                    <textarea name="body" id="body" placeholder="Vul hier de tekst in..." ></textarea>
                    @if ($errors->has('body'))
                        <p class="help is-danger">{{$errors->first('body')}}</p>
                    @endif
                </div>
            </div>

            <div>
                <div>
                    <button type="submit">Opslaan</button>
                </div>
            </div>

            </div>

        </form>
    </div>

@endsection

@extends('layout')
@section('content')
    @foreach($articles as $article)
        <div class="blog-style">
            <a href="{{$article->path()}}" class="no-hyperlink">
            <li class="titles">
                {{$article->title}}
            </li>
            </a>

                <li class="excerpt">
                    {{$article->excerpt}}
                </li>

        </div>

    @endforeach
    @can('create-blog')
    <li class="excerpt">
    <a  href="/blog/create">Add</a>
    </li>
    @endcan
@endsection

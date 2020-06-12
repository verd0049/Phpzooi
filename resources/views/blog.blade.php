@extends('layout')
@section('content')




<div>
<ul>
    <li class="titles">
        <p>{{$articles->title}}</p>
    </li>
    <li class="excerpt">
        <p>{{$articles->excerpt}}</p>
    </li>
    <li class="excerpt">
        <p>{{$articles->body}}</p>
    </li>
</ul>
    @auth()
    <li class="excerpt">
        <a  href="/blog/{{$articles->id}}/edit">Update</a>
    </li>
        @endauth
</div>



    @endsection

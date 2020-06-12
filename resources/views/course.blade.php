@extends('layout')
@section('content')

    @foreach($course as $course)
        <div class="blog-style">
{{--            <a href="{{$course->path()}}" class="no-hyperlink">--}}
                <li class="name">
                    {{$course->name}}
                </li>
            </a>

            <li class="ECs">
                {{$course->ECs}}
            </li>

        </div>

    @endforeach

@endsection

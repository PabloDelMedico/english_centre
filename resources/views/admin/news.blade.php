@extends('admin.layout.default')

@section('content')
    @foreach($listNews as $news)
        {{$news->id}}
        {{$news->title}}
        {{$news->description}}
    @endforeach
@stop
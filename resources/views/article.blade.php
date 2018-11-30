@extends('template')

@section('main')
<h4>{{$article->title}} (Posted by {{$article->author}} at {{$article->created_at}}) 
    <strong> {{ $article->created_at != $article->updated_at ? "Updated at ".$article->updated_at : "" }}</strong></h4>
<p>{{$article->article}}</p>
@if(Auth::check())
<p><a href="{{ url('article/'.$article->id.'/edit') }}">Edit</a> • <a href="{{ url('article/'.$article->id.'/delete') }}">Delete</a></p>
@endif
@stop
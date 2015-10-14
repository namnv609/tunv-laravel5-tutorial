@extends('layouts.app')
@section('title','All articles')

@section('content')
    <h1>All Articles</h1>
    @if ($articles->count())
        @foreach ($articles as $index => $item)
            {{ $index+1 }} - {{ $item->name }}
            <div>
                <a class="btn btn-success" href="{{ url('article/'.$item->id) }}">Read more</a>
            </div>
        @endforeach
    @else
        <div class="panel panel-default">
            <div class="panel-body">
                No articles found.
            </div>
        </div>
    @endif
@endsection

@extends('layouts.app')
@section('title', 'All categories')

@section('content')
    <h1>All categories</h1>
    @if ($categories->count())
        @foreach ($categories as $index => $item)
            {{ $index+1 }} - {{ $item->name }}
        @endforeach
    @else
        <div class="panel panel-default">
            <div class="panel-body">
                No articles found.
            </div>
        </div>
    @endif
@endsection

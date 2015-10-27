@extends('layouts.app')
@section('title', $category->name)

@section('content')
    <h3>{{ $category->name }}</h3>
    <p>{{ $category->description }}</p>
    <div>
        <span class="badge badge-info">Posted {{ $category->created_at }} </span>
    </div>
@endsection

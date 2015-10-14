@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')

{!! Form::model($category, [
    'action' => [
        'Admin\CategoriesController@update',
        $category->id
    ],
    'method' => 'patch'
]) !!}

    <div class="form-group">
        {!! Form::label('name') !!}
        {!! Form::text('name', null, [
            'required' => 'true',
            'class'=>'form-control'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description') !!}
        {!! Form::textarea('description', null , [
            'required' => 'true',
            'class' => 'form-control'
        ]) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('update', [
            'class'=>'btn btn-primary'
        ]) !!}
    </div>

{!! Form::close() !!}
@endsection

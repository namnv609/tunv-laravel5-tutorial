@extends('layouts.app')

@section('title', 'Create New Category')

@section('content')

    {!! Form::open(['action' => 'Admin\CategoriesController@store']) !!}
        <div class="form-group">
            {!! Form::label('Name') !!}
            {!! Form::text('name', null, [
                'required' => 'true',
                'class'=>'form-control'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description') !!}
            {!! Form::textarea('description', null, [
                'required' => 'true',
                'class' => 'form-control'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Create', [
                'class'=>'btn btn-primary'
            ]) !!}
        </div>

    {!! Form::close() !!}
@endsection

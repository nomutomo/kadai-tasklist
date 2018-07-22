@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>
    
    {!! Form::model($task, ['route' => 'tasks.store']) !!}
    
        <p>
            {!! Form::label('status', 'ステータス:') !!}
            {!! Form::text('status') !!}
        </p>
        <p>
            {!! Form::label('content', 'タスク:') !!}
            {!! Form::text('content') !!}
        </p>
        
        {!! Form::submit('登録') !!}
        
    {!! Form::close() !!}

@endsection
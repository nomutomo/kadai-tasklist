@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }}のタスク編集ページ</h1>
    
    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
    
            <p>
                {!! Form::label('status', 'ステータス:') !!}
                {!! Form::text('status') !!}
            </p>
            <p>
                {!! Form::label('content', 'タスク:') !!}
                {!! Form::text('content') !!}
            </p>
        
            {!! Form::submit('更新') !!}
        
    {!! Form::close() !!}

@endsection
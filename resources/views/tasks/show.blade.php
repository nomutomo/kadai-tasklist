@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }}のタスク詳細</h1>
    
    <p>{{ $task->content }}</p>
    
    <p> {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id]) !!}</p>

@endsection
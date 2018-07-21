@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }}のタスク詳細</h1>
    
    <p>{{ $task->content }}</p>

@endsection
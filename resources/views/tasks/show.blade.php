@extends('layouts.app')

@section('content')

    <h1>id: <a href="mailto:"></a> {{ $task->id }}のタスク詳細</h1>
    
        <table class="table table-borderd">
            <tr>
                <th>id</th>
                <td>{{ $task->id }}</td>
            </tr>
            <tr>
                <td>ステータス</td>
                <td>{{ $task->status }}</td>
            </tr>
            <tr>
                <td>タスク</td>
                <td>{{ $task->content }}</td>
            </tr>
        </table>

        <p>
            {!! link_to_route('tasks.edit', 'このタスクを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
        </p>
        <p>
            {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                {!! Form::submit('このタスクを削除', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </p>

@endsection
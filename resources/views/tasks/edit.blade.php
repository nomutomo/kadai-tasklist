@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }}のタスク編集ページ</h1>
    
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="col-lg-offset-3 col-sm-6">
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
                </div>
            </div>
        </div>
    </div>

@endsection
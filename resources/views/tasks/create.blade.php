@extends('layouts.app')

@section('content')

    <h1>タスク新規登録ページ</h1>
    
    <div class="row">
        <div class="col-xs-12">
            <div class="col-sm-offset-2 col-sm-8">
                <div class="col-lg-offset-3 col-sm-6">
                    {!! Form::model($task, ['route' => 'tasks.store']) !!}
                    
                        <div class="form-group">
                            {!! Form::label('status', 'ステータス:') !!}
                            {!! Form::text('status') !!}
                        </div>
                        <div>
                            {!! Form::label('content', 'タスク:') !!}
                            {!! Form::text('content') !!}
                        </div>
                        
                        {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
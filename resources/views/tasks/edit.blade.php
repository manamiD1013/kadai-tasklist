@extends('layouts.app')

@section('content')
    <h1>タスクの編集</h1>
    <div class="row">
        {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
        
            <div class="form-group">
                {!! Form::label('content','タスク') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            {!! Form::submit('更新', ['class' => 'btn btn-light']) !!}
            
        {!! Form::close() !!}
    </div>

@endsection
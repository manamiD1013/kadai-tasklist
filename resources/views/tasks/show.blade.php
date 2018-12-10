@extends('layouts.app')

@section('content')
    <h1>タスクの詳細</h1>
    <table class="table table-borderd">
        <tr>
            <th>id</th>
            <th>{{ $task->id }}</th>
        </tr>
        <tr>
            <th>ステータス</th>
            <th>{{ $task->status }}</th>
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $task->content }}</td>
        </tr>
    </table>
    {!! link_to_route('tasks.edit', 'タスクを編集', ['id' => $task->id], ['class' => 'btn btn-light']) !!}
    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
@endsection
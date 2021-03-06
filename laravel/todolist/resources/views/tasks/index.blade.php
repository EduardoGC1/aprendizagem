@extends('layouts.main')

@section('title', 'Tasks Home')
    
@section('content')
    <div class="row justify-content-center">
        <div class="col-sm-4">
            <a href="{{ route('task.create') }}" class="btn btn-block btn-success">Create Task</a>
        </div>
    </div>

    @if($tasks->count() == 0)
        <p class="lead text-center">There are no tasks, go on and create one!</p>
    @else
        @foreach ($tasks as $task)    
            <div class="row">
                <div class="col-sm-12">
                    <h3>
                        {{ $task->name }}
                        <small>{{ $task->created_at }}</small>
                    </h3>
                    <p>{{ $task->description }}</p>
                    <h4>Due date: <small>{{ $task->due_date }}</small></h4>

                    {!! Form::open(['route' => ['task.destroy', $task->id], 'method' => 'DELETE']) !!}
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-small btn-primary">Edit</a>

                        <button type="submit" class="btn btn-small btn-danger">Remove</button>
                    {!! Form::close() !!}
                </div>
            </div>
            <hr>
        @endforeach
    @endif


    <div class="row justify-content-center">
        <div class="col-sm-6 text-center">
            {{ $tasks->links() }}
        </div>
    </div>
@endsection
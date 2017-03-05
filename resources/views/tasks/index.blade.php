@extends('layouts.app')

@section('content')

        <ul>
            @foreach ($tasks as $tasks)
                 <li>{!! link_to_route('tasks.show', $tasks->id, ['id' => $tasks->id]) !!} : {{ $tasks->content }}</li>
            @endforeach
        </ul>

@endsection
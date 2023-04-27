@extends('application')
@section('content')
<p class="text-end">
    <a href="{{ route('tasks.create') }}" class="btn btn-primary">New task</a>
</p>
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Job</th>
                <th colspan="2">Scheduled</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)           
            <tr>
                <td>{{ $task->job->name }}</td>
                <td style="width:160px">{{ $task->scheduled_date_human }}</td>
                <td style="width:160px">{{ $task->scheduled_time_human }}</td>
                <td class="text-end">
                    <a href="{{ route('tasks.show', $task) }}" class="btn btn-outline-primary btn-sm">Show</a>
                    <a href="{{ route('tasks.edit', $task) }}" class="btn btn-outline-warning btn-sm">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

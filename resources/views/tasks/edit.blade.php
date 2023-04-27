@extends('application')
@section('content')
<form action="{{ route('tasks.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="inputScheduleDate" class="form-label">Schedule</label>
        <input type="date" class="form-control mb-3" id="inputScheduleDate" name="scheduled_date" value="{{ old('scheduled_date', $task->scheduled_date) }}">
        <input type="time" class="form-control" id="inputScheduleTime" name="scheduled_time" value="{{ old('scheduled_time', $task->scheduled_time) }}">
    </div>
    <div class="mb-3">
        <label for="selectJob" class="form-label">Job</label>
        <div class="form-control">{{ $task->job->name }}</div>
    </div>
    <br>
    <button class="btn btn-warning" type="submit">Update task</button>
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
</form>
@endsection

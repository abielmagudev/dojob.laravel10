@extends('application')
@section('content')
<p class="text-end">
    <a href="{{ route('tasks.index') }}" class="btn btn-primary">Back</a>
</p>

<small>Job</small>
<p>{{ $task->job->name }}</p>

<small>Scheduled</small>
<p>{{ $task->full_scheduled_human }}</p>

<small>Timeline</small>
<p>Created, Started, finished, closed, updated...</p>

<small>Media</small>
<p>All files and photos</p>
@endsection

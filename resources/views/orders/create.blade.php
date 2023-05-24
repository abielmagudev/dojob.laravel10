@extends('application')
@section('content')
<form action="{{ route('orders.store') }}" method="post">
    @csrf
    <div class="mb-3">
        <label for="inputScheduleDate" class="form-label">Schedule</label>
        <input type="date" class="form-control mb-3" id="inputScheduleDate" name="scheduled_date" value="{{ old('scheduled_date') }}">
        <input type="time" class="form-control" id="inputScheduleTime" name="scheduled_time" value="{{ old('scheduled_time') }}">
    </div>
    <div class="mb-3">
        <label for="selectJob" class="form-label">Job</label>
        <select class="form-select" name="job">
            <option disabled selected label="Choose a job"></option>
            @foreach($jobs as $job)
            <option value="{{ $job->id }}">{{ $job->name }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <button class="btn btn-success" type="submit">Save order</button>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">Cancel</a>
</form>
@endsection

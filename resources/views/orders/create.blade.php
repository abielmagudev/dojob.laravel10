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
        <select class="form-select" name="job" id='selectJob'>
            <option disabled selected label="Choose a job"></option>
            @foreach($jobs as $job)
            <option value="{{ $job->id }}">{{ $job->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="alert alert-light mb-3" id='jobExtensionsContainer'></div>
    <br>
    <button class="btn btn-success" type="submit">Save order</button>
    <a href="{{ route('orders.index') }}" class="btn btn-primary">Cancel</a>
</form>
<script>

const selectJob = document.getElementById('selectJob');

const loaderRoute = '<?= route('extensions.loader', 'job_id') ?>';

const jobExtensionsContainer = document.getElementById('jobExtensionsContainer');

selectJob.addEventListener('change', function (e) {
    jobExtensionsContainer.empty
    let route = loaderRoute.replace('job_id', this.value) + '/create';
    
    let templates = fetch(route)
    .then(response => response.json())
    .then(json => json.templates)
    .then( function (templates) {

        let fragments = '';
        
        console.log(templates)
        templates.forEach(template => {
            fragments += template.view + '<hr class="my-4">'
        });
        
        jobExtensionsContainer.innerHTML = fragments

    })

})
</script>
@endsection

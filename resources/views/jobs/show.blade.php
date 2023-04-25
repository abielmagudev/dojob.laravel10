@extends('application')
@section('content')
<h3>{{ $job->name }}</h3>
<p class="text-body-secondary">{{ $job->description }}</p>
@endsection
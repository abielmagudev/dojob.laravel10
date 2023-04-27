@extends('application')
@section('content')
<div class="text-end">
    <form action="{{ route('extensions.index') }}" method="get">
        <div class="input-group mb-3">
            <span class="input-group-text" id="addon-wrapping">Category</span>
            <select class="form-select" onchange="this.form.submit()" name="category">
                <option value="all" selected>All</option>
                @foreach($api_categories as $api_category)
                <option value="{{ $api_category }}" @selected( $api_category == $api_category_selected )>{{ ucfirst($api_category) }}</option>
                @endforeach
            </select>
        </div>
    </form>
</div>
<div class="table-responsive">
    <table class="table table-hover align-middle">
        <thead>
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Category</th>
                <th>Price</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
                @foreach($api_extensions as $api_extension)             
                <tr>
                    <td>{{ $api_extension->name }}</td>
                    <td>{{ $api_extension->description }}</td>
                    <td>{{ $api_extension->category }}</td>
                    <td>${{ $api_extension->price }}</td>
                    <td class="text-end">
                        @if( $extensions->contains('api_extension_id', '=', $api_extension->id) )
                        <span class="btn btn-outline-secondary btn-sm disabled w-100">Got it</span>

                        @elseif( $api_extension->price <= 0 )
                        <button class="btn btn-outline-success btn-sm w-100">It's free!</button>
                        
                        @elseif( $api_extension->free_try )
                        <button class="btn btn-outline-success btn-sm w-100">Free try</button>

                        @else
                        <button type="button" class="btn btn-outline-success btn-sm w-100">Purchase</button>

                        @endif

                    </td>
                </tr>
                @endforeach
            </tbody>
    </table>
</div>

@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <a href="{{ url('/admin/user-tracking-data') }}">All data</a> | <a href="{{ url('/admin/user-tracking-data?total-number-per-user') }}">Total number of visits per user</a>
                @include('admin.user-tracking-data.partials.'.$tableView)
            </div>
        </div>
    </div>
@endsection

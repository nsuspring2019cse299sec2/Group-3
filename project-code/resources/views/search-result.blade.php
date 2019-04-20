@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h4 style="color: #fff;">
                Search Results
            </h4>
            @if(count($jobs) > 0)
                <h5>Jobs</h5>
                @foreach ($jobs as $job)
                    <a href="{{url('job/'.$job->id)}}">{{$job->title}}</a>
                @endforeach
            @else
                <h4>No result found.</h4>
            @endif
        </div>
    </div>
</div>
@endsection

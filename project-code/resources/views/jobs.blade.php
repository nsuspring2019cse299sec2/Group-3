@extends('app')
@section('content-summary')
<div class="list-group">
    <div class="list-group-item list-group-item-action active">
        <div class="d-flex w-100 justify-content-between">
            <h3 class="mb-1">Job Information</h3>
        </div>
        <p class="mb-1">
            If you’re ready for a new and challenging job, take a look at our wide range of
            Enterprise jobs.
            Whatever type of job in Enterprise you’re seeking, you can find it on our website. View
            our listings of
            Enterprise job opportunities and find your perfect fit today.
        </p>
    </div>
</div>
@endsection
@section('content')
<div class="card col-md-12">
        <div class="card-body">
            <div class="list-group">
                @if(count($jobs) > 0)
                @foreach($jobs as $job)
                <a href="{{url('job/'.$job->id)}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1" style="color:#f4623a !important;">{{$job->title}}</h5>
                        <small>{{$job->created_at->format('Y m d')}}</small>
                    </div>
                    <p class="mb-1">{{str_limit(strip_tags($job->description), 20)}}</p>
                    Category: <span class="badge badge-danger">{{$job->category->name}}</span>
                </a>
                @endforeach
                @else
                <p>No Active Job</p>
                @endif
            </div>
            {{$jobs->links()}}
        </div>
    </div>
@endsection

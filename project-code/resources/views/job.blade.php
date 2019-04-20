@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <h4 style="color: #fff;">
                {{$job->title}}
            </h4>
        </div>
        <div class="col-lg-4">
            @if(\Auth::user()->role == 'jobseeker')
            <a href="{{url('apply-job/'.$job->id)}}" class="btn btn-danger float-right" role="button">
                Apply for this Job
            </a>
            @endif
        </div>
    </div>
</div>
<br>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    {!!$job->description!!}
                </div>
            </div>
        </div>
    </div>

    <div class="row" style="margin-top: 5%;">
        <div class="col-lg-12">
            <h4 style="color: #fff;">Similar Jobs</h4>
            <div class="list-group">
                @foreach($similar as $sjob)
                <a href="{{url('job/'.$sjob->id)}}" class="list-group-item list-group-item-action">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1" style="color:#f4623a !important;">{{$sjob->title}}</h5>
                        <small>{{$sjob->created_at}}</small>
                    </div>
                    Category: <span class="badge badge-danger">{{$sjob->category->name}}</span>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection

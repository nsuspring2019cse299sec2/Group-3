@extends('app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Manage jobs and applications</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    @if(count($jobs) > 0)
                    @if(\Auth::user()->role == 'company')
                    <h3>Created jobs</h3>
                    @foreach ($jobs as $job)
                        <h4>{{$job->title}}</h4>
                    @endforeach
                    @endif
                    @if(\Auth::user()->role == 'jobseeker')
                    <h3>Applied jobs</h3>
                    @foreach ($jobs as $job)
                        <h4>{{str_limit(strip_tags($job->description), 50)}}</h4>
                    @endforeach
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

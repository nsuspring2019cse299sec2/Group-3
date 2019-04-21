@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 style="color: #fff;">Hired People
            </h4>
            @for ($i=0;$i<sizeof($hired);$i++)
                <h5>Job Title: {{$jobs[$i]->title ?: ''}}</h5>
                <p>Hired: {{$hired[$i]->name ?: ''}}</p>
            @endfor
        </div>
    </div>
</div>
@endsection

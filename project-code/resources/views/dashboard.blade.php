@extends('admin-app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card text-white bg-primary mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Jobs</div>
            <div class="card-body">
                <h5 class="card-title">Active jobs</h5>
                <p class="card-text">{{\App\Job::where('status',1)->count()}}</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Applications</div>
            <div class="card-body">
                <h5 class="card-title">Active Applications</h5>
                <p class="card-text">{{\App\Application::count()}}</p>
            </div>
        </div>
        <div class="card text-white bg-success mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Hired</div>
            <div class="card-body">
                <h5 class="card-title">Till now</h5>
                <p class="card-text">{{\App\Job::where('applicant_id',1)->count()}}</p>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Employers</div>
            <div class="card-body">
                <h5 class="card-title">Till now</h5>
                <p class="card-text">{{\App\User::where('role','company')->count()}}</p>
            </div>
        </div>
        <div class="card text-white bg-dark mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Job Seeker</div>
            <div class="card-body">
                <h5 class="card-title">Till now</h5>
                <p class="card-text">{{\App\User::where('role','jobseeker')->count()}}</p>
            </div>
        </div>
    </div>
    <br id="users">
    <h3 style="color: #fff;">Users</h3>
    <div class="row">
        <div class="card col-md-12">
            <div class="card-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joined</th>
                            <th scope="col">Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(count($users) > 0)
                        @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{$user->id}}</th>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>{{$user->role}}</td>
                        </tr>
                        @endforeach
                        @endif
                    </tbody>
                </table>
                {{$users->links()}}
            </div>
        </div>
    </div>
    <br id="jobsl">
    <h3 style="color: #fff;">Jobs</h3>
    <div class="row">
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
                        <p class="mb-1">{!!$job->description!!}</p>
                        Category: <span class="badge badge-danger">{{$job->category->name}}</span>
                    </a>
                    @endforeach
                    @endif
                </div>
                {{$jobs->links()}}
            </div>
        </div>
    </div>
    <br id="applications">
    <h3 style="color: #fff;">Applications</h3>
    <div class="row">
        <div class="card col-md-12">
            <div class="card-body">
                <div class="list-group">
                    @if(count($applications) > 0)
                    @foreach($applications as $application)
                    <a href="#" type="button" class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal{{$application->id}}">{{Illuminate\Support\Str::limit($application->description, 100)}}</a>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$application->id}}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel{{$application->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel{{$application->id}}">Application</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!!$application->description!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
                {{$applications->links()}}
            </div>
        </div>
    </div>
    <br id="categories">
    <h3 style="color: #fff;">Categories <span class="float-right">
            <a href="" type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                data-target="#exampleModal">Create</a></span>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h4 style="color: #555;">Create Category</h4>
                        <form action="{{url('create-category')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="category-name">Category</label>
                                <input type="text" class="form-control" id="category-name" name="category_name"
                                    placeholder="Category">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </h3>
    <div class="row">
        <div class="card col-md-12">
            <div class="card-body">
                <ul class="list-group">
                    @if(count($categories) > 0)
                    @foreach($categories as $category)
                    <li class="list-group-item">{{$category->name}}</li>
                    @endforeach
                    @endif
                </ul>
                {{$categories->links()}}
            </div>
        </div>
    </div>
</div>
@endsection

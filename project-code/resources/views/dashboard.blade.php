@extends('admin-app')
@section('content')
<div class="container">
    <div class="row">
        <div class="card text-white bg-primary mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Jobs</div>
            <div class="card-body">
                <h5 class="card-title">Active jobs</h5>
                <p class="card-text">2045</p>
            </div>
        </div>
        <div class="card text-white bg-secondary mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Applications</div>
            <div class="card-body">
                <h5 class="card-title">Active Applications</h5>
                <p class="card-text">5034</p>
            </div>
        </div>
        <div class="card text-white bg-success mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Hired</div>
            <div class="card-body">
                <h5 class="card-title">Till now</h5>
                <p class="card-text">4302</p>
            </div>
        </div>
        <div class="card text-white bg-danger mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Employers</div>
            <div class="card-body">
                <h5 class="card-title">Till now</h5>
                <p class="card-text">250</p>
            </div>
        </div>
        <div class="card text-white bg-dark mb-3 col-lg-4 mr-3" style="max-width: 18rem;">
            <div class="card-header">Total Job Seeker</div>
            <div class="card-body">
                <h5 class="card-title">Till now</h5>
                <p class="card-text">8946</p>
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
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Email</th>
                            <th scope="col">Joined</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>12th March 19</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>12th March 19</td>
                        </tr>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>12th March 19</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>12th March 19</td>
                        </tr>
                    </tbody>
                </table>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <br id="jobsl">
    <h3 style="color: #fff;">Jobs</h3>
    <div class="row">
        <div class="card col-md-12">
            <div class="card-body">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="color:#f4623a !important;">List group item heading</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        Category: <span class="badge badge-danger">Accounting</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="color:#f4623a !important;">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        Category: <span class="badge badge-danger">Accounting</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="color:#f4623a !important;">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        Category: <span class="badge badge-danger">Accounting</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="color:#f4623a !important;">List group item heading</h5>
                            <small>3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        <small>Donec id elit non mi porta.</small>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="color:#f4623a !important;">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        Category: <span class="badge badge-danger">Accounting</span>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1" style="color:#f4623a !important;">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                            varius blandit.</p>
                        Category: <span class="badge badge-danger">Accounting</span>
                    </a>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection

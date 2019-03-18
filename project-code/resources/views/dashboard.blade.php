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
    <div class="row" id="users">
        <h5>Users</h5>
        <table class="table table-bordered" style="background-color: #fff;">
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
    </div>
</div>
@endsection

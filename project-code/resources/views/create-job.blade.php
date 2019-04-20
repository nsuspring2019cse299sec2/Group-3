@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 style="color: #fff;">Create a new job post
            </h4>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('job')}}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group row">
                            <label for="job-title" class="col-sm-2 col-form-label">Job Title</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="job-title" type="text" placeholder="Job Title"
                                    name="title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="summary-ckeditor">Description</label>
                            <textarea class="form-control" id="summary-ckeditor" name="description"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="jobCategory">Category</label>
                            <select class="form-control" id="jobCategory" name="category">
                                @foreach ($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor');

</script>
@endsection

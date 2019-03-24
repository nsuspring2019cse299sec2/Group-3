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
                        <div class="form-group">
                            <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>
                        </div>
                        <div class="form-group">
                                <label for="jobCategory">Category</label>
                                <select class="form-control" id="jobCategory">
                                  <option>Accounting</option>
                                  <option>Administrative</option>
                                  <option>Advertising</option>
                                  <option>Aeronautics</option>
                                  <option>Agriculture and Fishing</option>
                                  <option>Animal Services</option>
                                  <option>Automotive</option>
                                  <option>Banking</option>
                                  <option>Biotech</option>
                                  <option>Business</option>
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

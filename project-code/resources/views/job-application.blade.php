@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h4 style="color: #fff;">Apply to {{$job->title}}
            </h4>
            <h5>Category: {{$category->name}}</h5>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{url('apply-job')}}" method="post">
                        {{ csrf_field() }}
                        <input type="hidden" name="job_id" value="{{$job->id}}">
                        <div class="form-group">
                            <label for="summary-ckeditor">Description</label>
                            <textarea class="form-control" id="summary-ckeditor" name="description">
                                <h4>Tell us why do you want to work with us</h4>
                                <p>Your answer here...</p>
                                <h4>What are your achievements?</h4>
                                <p>Write here...</p>
                                <h4>Do you have any previous work experience?</h4>
                                <p>Tell us ...</p>
                            </textarea>
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace('summary-ckeditor',{
      extraPlugins: 'placeholder',
      height: 220
    });

</script>
@endsection

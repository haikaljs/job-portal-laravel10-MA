@extends('admin.layout.app')
@section('heading', 'Home Page Content')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                           
                            <div class="col-md-12">
                                <div class="mb-4">
                                    <label class="form-label">Heading *</label>
                                    <input type="text" class="form-control" name="name" value="Find Your Desire Job">
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Text *</label>
                                    <textarea name="" class="form-control h_100" cols="30" rows="10">Search the best, perfect and suitable jobs that matches your skills in your expertise area.</textarea>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Job Title *</label>
                                            <input type="text" class="form-control" name="" value="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Job Location *</label>
                                            <input type="text" class="form-control" name="" value="Job Location">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-6">
                                        <div class="mb-4">
                                            <label class="form-label">Job Category *</label>
                                            <input type="text" class="form-control" name="" value="Job Category">
                                        </div>
                                    </div>
                                </div>

                             
                               
                               
                                <div class="mb-4">
                                    <label class="form-label">Existing Background *</label>
                                    <div>
                                        <img src="{{ asset('uploads/banner_home.jpg') }}" class="w_300" >
                                    </div>
                                   
                                </div>
                                <div class="mb-4">
                                    <label class="form-label">Change Background *</label>
                                    <div>
                                        <input type="file" class="form-control mt_10" name="photo">
                                    </div>
                                    
                                </div>
                                <div class="mb-4">
                                    <label class="form-label"></label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
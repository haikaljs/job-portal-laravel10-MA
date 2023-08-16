@extends('admin.layout.app')
@section('heading', 'Home Page Content')

@section('main_content')


<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   

                        <div class="row">
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-12">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link active" id="v-1-tab" data-toggle="pill" href="#v-1" role="tab" aria-controls="v-1" aria-selected="true">
                                        Search
                                    </a>
                                    <a class="nav-link" id="v-2-tab" data-toggle="pill" href="#v-2" role="tab" aria-controls="v-2" aria-selected="false">
                                        Category
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-9 col-md-8 col-sm-12">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="pt_0 tab-pane fade show active" id="v-1" role="tabpanel" aria-labelledby="v-1-tab">
                                        <!-- Search Item Start -->
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <form action="{{ route('admin_home_page_update') }}" method="post" enctype="multipart/form-data">
                                                            @csrf
                                                            <div class="row">
                                                               
                                                                <div class="col-md-12">
                                                                    <div class="mb-4">
                                                                        <label class="form-label">Heading *</label>
                                                                        <input type="text" class="form-control" name="heading" value="{{ $page_home_data->heading }}">
                                                                    </div>
                                                                    <div class="mb-4">
                                                                        <label class="form-label">Text *</label>
                                                                        <textarea name="text" class="form-control h_100" cols="30" rows="10">{{ $page_home_data->text }}</textarea>
                                                                    </div>
                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-4">
                                                                                <label class="form-label">Job Title *</label>
                                                                                <input type="text" class="form-control" name="job_title" value="{{ $page_home_data->job_title }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-4">
                                                                                <label class="form-label">Job Location *</label>
                                                                                <input type="text" class="form-control" name="job_location" value="{{ $page_home_data->job_location }}">
                                                                            </div>
                                                                        </div>
                                                                      
                                    
                                                                       
                                                                    </div>
                                    
                                                                    <div class="row">
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-4">
                                                                                <label class="form-label">Job Category *</label>
                                                                                <input type="text" class="form-control" name="job_category" value="{{ $page_home_data->job_category }}">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6 col-md-6">
                                                                            <div class="mb-4">
                                                                                <label class="form-label">Search *</label>
                                                                                <input type="text" class="form-control" name="search" value="{{ $page_home_data->search }}">
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
                                                                            <input type="file" class="form-control mt_10" name="background">
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
                                        <!-- Search Item End -->
                                    </div>

                                    <div class="pt_0 tab-pane fade" id="v-2" role="tabpanel" aria-labelledby="v-2-tab">
                                        <!-- Text Item Start -->
                                        <div class="form-group mb-3">
                                            <label>Text</label>
                                            <input type="text" class="form-control" name="" value="123">
                                        </div>
                                        <div class="form-group mb-3">
                                            <label>Status</label>
                                            <select name="recaptcha_status" class="form-control">
                                                <option value="Show">Show</option>
                                                <option value="Hide">Hide</option>
                                            </select>
                                        </div>
                                        <!-- Text Item End -->
                                    </div>
                                </div>
                            </div>
                        </div>

                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
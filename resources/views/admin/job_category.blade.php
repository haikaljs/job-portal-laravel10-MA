@extends('admin.layout.app')
@section('heading', 'Job Categories')

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post" >
                        @csrf
                        <div class="row">
                          
                            <div class="col-md-9">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Category Name</th>
                                            <th>Category Icon</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($job_categories as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->icon }}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="" class="btn btn-primary btn-sm" >Edit</a>
                                                    <a href="" class="btn btn-danger" onClick="return confirm('Are you sure?');">Delete</a>
                                                </td>
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Detail</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">×</span>
                                                                </button>
                                                            </div>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </tr>
                                            @endforeach
                                            
                                     
                                        </tbody>
                                    </table>
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
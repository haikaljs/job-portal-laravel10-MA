@extends('admin.layout.app')
@section('heading', 'Why Choose Items')

@section('button')
    <div class="ml-auto">
        <a href="{{ route('admin_why_choose_item_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Add New</a>
    </div>
@endsection

@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                   
                        <div class="row">
                          
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="example1">
                                        <thead>
                                        <tr>
                                            <th>SL</th>
                                            <th>Icon</th>
                                            <th>Icon Preview</th>
                                            <th>Heading</th>
                                            <th>Text</th>
                                            <th>Action</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($why_choose_items as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->icon }}</td>
                                                <td><i class="{{ $item->icon }}"></i></i></td>
                                                <td>{{ $item->heading }}</td>
                                                <td>{{ $item->text }}</td>
                                                <td class="pt_10 pb_10">
                                                    <a href="{{ route('admin_why_choose_item_edit', $item->id) }}" class="btn btn-primary btn-sm" >Edit</a>
                                                    <a href="{{route('admin_why_choose_item_delete',$item->id)}}" class="btn btn-danger btn-sm" onClick="return confirm('Are you sure?');">Delete</a>
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
                 
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
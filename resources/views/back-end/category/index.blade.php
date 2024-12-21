@extends('back-end.master')

@section('admin-title')
Category
@endsection

@push('admin-styles')
<style>

</style>
@endpush

@section('admin-content')

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Category</li>
            </ol>
          </div>
        </div>
      </div>
  </div>

  <div class="card">

      <div class="card-header">
          <h4 class="card-title aaa">
            Manage Category
             <a href="{{ route('category.create') }}" class="add_new_btn btn btn-sm btn-primary">
              <i class="fa fa-plus"></i>
                Add New
              </a>
          </h4>
      </div>

          <div class="card-body">
            <div class="table-responsive">
              <table id="zero_config" class="table table-bordered text-center">
                <thead>
                  <tr>
                    <th>SN</th>
                    <th>Thumbnail</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                	@php
                	$i=1
                	@endphp
                  <tr>
                    <td>1</td>
                    <td>No Image</td>
                    <td>Electronics</td>
                    <td>
                      <label class="switch">
                        <input type="checkbox" class="status-switch" data-id="">
                        <span class="slider round"></span>
                      </label>
                    </td>
                   <!--  <td>
                        <a href="" class="btn btn-sm btn-primary text-white edit_btn">
                          <i class="fa fa-edit"></i>
                        </a>
                        <a href="" class="btn btn-sm btn-danger text-white delete_btn">
                          <i class="fa fa-trash"></i>
                        </a>
                    </td> -->
                    <td>
                       <button title="Action" class="btn without-focus border-0 px-1 py-0 mr-2" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-ellipsis-v"></i>
                        </button>

                              <div class="dropdown-menu" role="menu" style="">

                                 <a class="dropdown-item" href="">
                                  <i class="fa fa-edit"></i> Update
                                </a>

                                 <a class="dropdown-item" href=""> 
                                  <i class="fa fa-trash"></i> Delete
                                </a>

                              </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
        </div>
  </div>
@endsection

@push('admin-scripts')

@endpush
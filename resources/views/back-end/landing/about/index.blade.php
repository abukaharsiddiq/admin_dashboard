@extends('back-end.master')

@section('admin-title')
  {{ $title }}
@endsection

@push('admin-styles')
<style>
	.card{
        border-radius: 0;
    }
  .table thead tr th{
    background: #f5f5f5;
   }

   .table thead tr th, .table thead tr td{
      font-size: 14px;
   }

    .supplier-information {
        border: 1px solid rgba(0,0,0,.1);
        margin-bottom: 20px;
        padding: 5px 10px;
    }
    label {
    display: inline-block;
    margin-bottom: .5rem;
    font-size: 14px;
}
h4.card-title{
    font-size: 18px!important;
}
</style>
@endpush

@section('admin-content')

 <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> {{ $name }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active"> {{ $title }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

<div class="card">

  <div class="card-header">
                      <h4 class="card-title"> {{ $title }}</h4>
                    </div>
                <div class="card-body">
                  
                  <div class="table-responsive">
                    <table
                      id="zero_config"
                      class="table table-bordered"
                    >
                      <thead>
                        <tr>
                          <th>SN</th>
                          <th>Title</th>
                          <th>Description</th>
                          <th>Image</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      	@php
                      	$i=1
                      	@endphp
                      	@foreach($lists as $info)
                          <tr>
                              <td>{{ $i++ }}</td>
                              <td>{{ $info->title }}</td>
                              <td>{!! $info->description !!}</td>
                              <td>
                                  <img src="{{ asset('back-end/about/'.$info->image) }}" alt="" style="width: 100px;">
                              <td>
                                  <a href="{{ route('about.edit', $info->id) }}" class="btn btn-sm btn-primary">
                                      <i class="fa fa-edit"></i>
                                  </a>
                                  <a href="{{ route('about.delete', $info->id) }}" class="btn btn-sm btn-danger">
                                      <i class="fa fa-trash"></i>
                                  </a>
                              </td>
                          </tr>
                      @endforeach

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
@endsection

@push('admin-scripts')

@endpush
@extends('back-end.master')

@section('admin-title')
{{ $create }}
@endsection

@push('admin-styles')
<style>
    / .card{
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
            <h1 class="m-0">Social</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">Social</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

<div class="row">
    <div class="col-12 form-area">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                            <h4 class="card-title">{{ $create }}</h4>
                        </div>
                <form class="form-horizontal" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method($method === 'POST' ? 'POST' : 'PATCH')
                    <div class="card-body">
                        

                        <div class="form-group row">
                            <label for="facebook" class="col-sm-3 control-label col-form-label">Facebook</label>
                            <div class="col-sm-9">
                                <input
                                    type="text" name="facebook"
                                    class="form-control"
                                    id="facebook"
                                    placeholder="facebook"
                                    value="{{ $info->facebook ?? '' }}"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-sm-3 control-label col-form-label">Twitter</label>
                            <div class="col-sm-9">
                                <input
                                    type="text" name="twitter"
                                    class="form-control"
                                    id="twitter"
                                    placeholder="twitter"
                                    value="{{ $info->twitter ?? '' }}"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="linkedin" class="col-sm-3 control-label col-form-label">Linkedin</label>
                            <div class="col-sm-9">
                                <input
                                    type="text" name="linkedin"
                                    class="form-control"
                                    id="linkedin"
                                    placeholder="linkedin"
                                    value="{{ $info->linkedin ?? '' }}"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instagram" class="col-sm-3 control-label col-form-label">Instagram</label>
                            <div class="col-sm-9">
                                <input
                                    type="text" name="instagram"
                                    class="form-control"
                                    id="instagram"
                                    placeholder="instagram"
                                    value="{{ $info->instagram ?? '' }}"
                                />
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="youtube" class="col-sm-3 control-label col-form-label">Youtube</label>
                            <div class="col-sm-9">
                                <input
                                    type="text" name="youtube"
                                    class="form-control"
                                    id="youtube"
                                    placeholder="youtube"
                                    value="{{ $info->youtube ?? '' }}"
                                />
                            </div>
                        </div>


                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary float-end">
                                <i class="fa fa-paper-plane"></i> {{ $btn_name }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

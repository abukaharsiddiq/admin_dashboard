
@extends('back-end.master')

@section('admin-title')
  {{ $title }}
@endsection


@push('admin-styles')
<style>
	.card{
        border-radius: 0;
    }
    h4.card-title{
    font-size: 18px!important;
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

</style>
@endpush

@section('admin-content')

  <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ $name }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
              <li class="breadcrumb-item active">{{ $title }}</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

 <div class="row">
 	<div class="col-md-12">
 		<div class="card">
         <div class="card-header">
             <h4 class="card-title">{{ $title }}</h4>
         </div>

          <form class="form-horizontal" action="{{ route('hero.update') }}" method="POST" enctype="multipart/form-data">
          @csrf
              <div class="card-body">
                  <div class="col-sm-8">

                    <div class="form-group row">
                      <label for="title1" class="col-sm-3 text-end control-label col-form-label">Title1</label>
                      <div class="col-sm-9">
                          <input type="text" name="title1" class="form-control" id="title1" placeholder="Title1" value="{{ $info->title1 }}" />
                          @error('title1')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="title2" class="col-sm-3 text-end control-label col-form-label">Title2</label>
                      <div class="col-sm-9">
                          <input type="text" name="title2" class="form-control" id="title2" value="{{ $info->title2 }}" placeholder="Title2" />
                          @error('title2')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="title3" class="col-sm-3 text-end control-label col-form-label">Title3</label>
                      <div class="col-sm-9">
                          <input type="text" name="title3" class="form-control" id="title3" placeholder="Title3" value="{{ $info->title3 }}"/>
                          @error('title3')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="description" class="col-sm-3 text-end control-label col-form-label">Description</label>
                      <div class="col-sm-9">
                          <textarea name="description" class="form-control editor" id="description" placeholder="Description">
                          {{ $info->description }}
                          </textarea>
                          @error('description')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="button_text" class="col-sm-3 text-end control-label col-form-label">Button Text</label>
                      <div class="col-sm-9">
                          <input type="text" name="button_text" class="form-control" id="button_text" placeholder="Button Text" value="{{ $info->button_text }}"/>
                          @error('button_text')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>


                   <div class="form-group row">
                      <label for="image" class="col-sm-3 text-end control-label col-form-label">Image</label>
                      <div class="col-sm-9">
                          <input type="file" name="image" class="form-control" id="image" placeholder="image" />

                          <img src="{{ asset('back-end/hero/'.$info->image) }}" alt="" style="width: 100px;margin-top: 10px;">

                          @error('image')
                          <span class="text-danger">{{ $message }}</span>
                          @enderror
                      </div>
                    </div>

                   <input type="hidden" name="id" value="{{ $info->id }}">


              </div>

            <div class="border-top">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>

        </form>

      </div>
 	</div>
 </div>
@endsection
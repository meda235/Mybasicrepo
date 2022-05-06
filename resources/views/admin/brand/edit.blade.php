@extends('admin.admin_master')
 @section('admin')
    @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
    <div class="py-12">
      <div class="container">
          <div class="row">


<div class="col-md-8">
          <div class="card">
           
            <div class="card-header">
              Edit category
            </div>  
            <div class="card-body">
            <form action="{{ url('brand/update/'.$brands->id)}}" method="POST" enctype="multipart/form-data">
              @csrf
  <div class="mb-3">
    <input type="hidden" name="old_image" value="{{ $brands->brand_image }}">
    <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Update Brand Name</label>
    <input type="test" class="form-control" name="brand_name" value="{{ $brands->brand_name }}" id="exampleInputEmail1" aria-describedby="emailHelp">
  @error('brand_name') 
  <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Update Brand Image</label>
    <input type="file" class="form-control" name="brand_image" value="{{ $brands->brand_image }}" id="exampleInputEmail1" aria-describedby="emailHelp">
  @error('brand_image') 
  <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>
  <div><img src="{{ asset($brands->brand_image) }}" style="width:400px; height:200px;"></div>
  <button type="submit" class="btn btn-primary">Update Brand</button>
</form> 
            </div>
            
            </div>
</div>
</div>
</div>
</div>
@endsection

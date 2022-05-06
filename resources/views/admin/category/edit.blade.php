<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  Edit category<b></b>
           <b style="float:right; ">
        <span class="badge badge-danger"></span></b>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="container">
          <div class="row">


<div class="col-md-8">
          <div class="card">
           
            <div class="card-header">
              Edit category
            </div>  
            <div class="card-body">
            <form action="{{ url('category/update/'.$categories->id)}}" method="POST">
              @csrf
  <div class="mb-3">
    <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Update category Name</label>
    <input type="test" class="form-control" name="category_name" value="{{ $categories->category_name }}" id="exampleInputEmail1" aria-describedby="emailHelp">
  @error('category_name') 
  <span class="text-danger">{{ $message }}</span>
  @enderror
  </div>
  <button type="submit" class="btn btn-primary">Update Category</button>
</form> 
            </div>
            
            </div>
</div>
</div>
</div>
</div>
</x-app-layout>

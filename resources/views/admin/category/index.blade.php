<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
  All category<b></b>
           <b style="float:right; ">
        <span class="badge badge-danger"></span></b>
        </h2>
    </x-slot>

    <div class="py-12">
      <div class="container">
          <div class="row">
        <div class="col-md-8">
          <div class="card">
          @if(session('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>{{ session('success')}}</strong> 
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
            <div class="card-header">
              All category
            </div>
        
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Category Name</th>
      <th scope="col">User</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- @php($i =1) -->
    @foreach($categories as $category)
    <tr>
      <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
      <td>{{ $category->category_name }}</td>
      <td>{{ $category->user->name }}</td>

      <td>
      @if($category->created_at == NULL)
<span class="text-danger"> No date saved</span>
@else  
      {{ carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
@endif
<td>
  <a href="{{ url('category/edit/'.$category->id)}}" class="btn btn-info">Edit</a>
  <a href="{{ url('softdelete/category/'.$category->id) }}" class="btn btn-danger">Delete</a>
</td>

    </tr>
  @endforeach
  </tbody>
</table>
{{ $categories->links()}}
</div>
</div>
<div class="col-md-4">
          <div class="card">
           
            <div class="card-header">
              Add category
            </div>  
            <div class="card-body">
            <form action="{{ route('store.category')}}" method="POSt" >
              @csrf
  <div class="mb-3">
    <div class="form-group">
    <label for="exampleInputEmail1" class="form-label">Category Name</label>
    <input type="test" class="form-control" name="category_name" id="exampleInputEmail1" aria-describedby="emailHelp">
  
  </div>
  <button type="submit" class="btn btn-primary">Add Category</button>
</form> 
            </div>
            
            </div>
</div>
</div>
</div>



<!--Trash Part  -->
<div class="container">
          <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header">
              All category
            </div>
        
          <table class="table">
  <thead>
    <tr>
      <th scope="col">Sl No.</th>
      <th scope="col">Category Name</th>
      <th scope="col">User</th>
      <th scope="col">Created at</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- @php($i =1) -->
    @foreach($trashCat as $category)
    <tr>
      <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
      <td>{{ $category->category_name }}</td>
      <td>{{ $category->user->name }}</td>

      <td>
      @if($category->created_at == NULL)
<span class="text-danger"> No date saved</span>
@else  
      {{ carbon\Carbon::parse($category->created_at)->diffForHumans() }}</td>
@endif
<td>
  <a href="{{ url('category/restore/'.$category->id)}}" class="btn btn-info">Restore</a>
  <a href="{{ url('pdelete/category/'.$category->id) }}" class="btn btn-danger">P Delete</a>
</td>

    </tr>
  @endforeach
  </tbody>
</table>
{{ $trashCat->links()}}
</div>
</div>
<div class="col-md-4">
          
</div>
</div>
</div>
<!-- End Trash -->
</div>
</x-app-layout>

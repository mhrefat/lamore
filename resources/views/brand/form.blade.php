@extends('master')
@section('content')



<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-12">
     
            <div class="card">
                <div class="card-header"><b>Total Brand : </b>
               
                <!-- showing message-->
                @if(session()->has('message'))
                 <p class="alert alert-success">{{session()->get('message')}}</p>
                @endif

                    @if($errors->any())
                       @foreach($errors->all() as $er)
                         <p class="alert alert-danger">{{$er}}</p>
                       @endforeach  
                    @endif

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">
                Add
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add new Brand</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                    <form method="post" action="{{ route('brand.store') }}">
                     @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Brand name" name="name" value="{{old('name')}}">
            
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" class="form-control" id="description" placeholder="Enter Brand description" name="description" value="{{old('description')}}">
            
                    </div>
                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" id="image" placeholder="Enter Brand image" name="image" value="{{old('image')}}">
            
                    </div>
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Brand status" name="status" value="{{old('status')}}">
            

                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Brand url" name="url" value="{{old('url')}}">
            
                    </div>
                   

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input type="submit" value="Insert" class="btn btn-primary">
                
                    </div>
                    </form>
                    </div>
                </div>
                </div>

                </div>

                <div class="card-body">
                 

                   <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Status</th>
                            <th scope="col">URL</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col" style="width:20%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @forelse($brands as $brand)
                            <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$brand->name}}</td>
                            <td>{{$brand->description}}</td>
                            <td>{{$brand->image}}</td>
                            <td>{{$brand->status}}</td>
                            <td>{{$brand->url}}</td>
                            <td>
                             @if(isset($brand->created_at))
                             {{ $brand->created_at->format('d/m/Y')}}
                             @else
                             {{'-'}}
                             @endif
                            </td>
                            <td>
                             @if(isset($brand->updated_at))
                             {{ $brand->updated_at->diffForHumans()}}
                             @else
                             {{'-'}}
                             @endif
                            </td>
                                <td>
                               
                                    <a class="btn btn-sm btn-info float-left" data-toggle="modal" data-target="#modal-<?php echo $brand->id;?>" value=<?php echo $brand->id;?> href="#">Update</a>

                                    <!-- Modal -->
                <div class="modal fade" id="modal-<?php echo $brand->id;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Update Brand Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
    
    
    
                        <form method="post" action="{{ route('brand.update',$brand->id) }}">
                         @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Brand name" name="name" value="{{$brand->name}}">
                
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter Brand description" name="description" value="{{$brand->description}}">
                
                        </div>
                        <div class="form-group">
                            <label for="image">Image</label>
                            <input type="text" class="form-control" id="image" placeholder="Enter Brand image" name="image" value="{{$brand->image}}">
                
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Brand status" name="status" value="{{$brand->status}}">
                
    
                        </div>
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter Brand url" name="url" value="{{$brand->url}}">
                
                        </div>
                       
    
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <input type="submit" value="Update" class="btn btn-primary">
                    
                        </div>
                        </form>
                        </div>
                    </div>
                    </div>

                                    <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')" href="{{ route('delete.brand',$brand->id) }}">Delete</a>
                                </td>
                            @empty
                             <td colspan="10" class="text-center text-danger">No data available</td>
                            @endforelse
                               
                            </tr>
                            
                        </tbody>
                        
                    </table>
                        
                </div>

        </div>
        </div>
 </div>
 
</div>


@stop
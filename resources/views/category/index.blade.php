@extends('master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
   
        <div class="col-12">
     
            <div class="card">
                <div class="card-header"><b>Total category : </b>
               


                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#exampleModalCenter">
                Add
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Add new category</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">



                    <form method="post" action="{{route('category.store')}}">
                     @csrf
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Category name" name="name" value="{{old('name')}}">
            
                    </div>
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type" placeholder="Enter Category type" name="type" value="{{old('type')}}">
            
                    </div>
                    <div class="form-group">
                        <label for="iva">IVA</label>
                        <input type="text" class="form-control" id="iva" placeholder="Enter Category IVA" name="iva" value="{{old('iva')}}">
            
                    </div>
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter Category url" name="url" value="{{old('url')}}">
            
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
                            <th scope="col">Type</th>
                            <th scope="col">IVA</th>
                            <th scope="col">URL</th>
                            <th scope="col">Created at</th>
                            <th scope="col">Updated at</th>
                            <th scope="col" style="width:20%;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            @forelse($categories as $category)
                            <tr>
                            <th scope="row">{{$loop->index+1}}</th>
                            <td>{{$category->name}}</td>
                            <td>{{$category->type}}</td>
                            <td>{{$category->iva}}</td>
                            <td>{{$category->url}}</td>
                            <td>
                             @if(isset($category->created_at))
                             {{ $category->created_at->format('d/m/Y')}}
                             @else
                             {{'-'}}
                             @endif
                            </td>
                            <td>
                             @if(isset($category->updated_at))
                             {{ $category->updated_at->diffForHumans()}}
                             @else
                             {{'-'}}
                             @endif
                            </td>
                                <td>
                               
                                <a class="btn btn-sm btn-info float-left" href="{{route('category.edit',$category)}}">Update</a>
                                
                                <form action="{{route('category.destroy',$category)}}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                </form>
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
@endsection
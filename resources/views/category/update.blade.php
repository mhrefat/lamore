@extends('master')
@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <b>Update the category</b>
                </div>
                <div class="card-body">
                <form method="post" action="{{route('category.update',$data)}}">
                        @csrf
                        @method('PUT')
                    <div class="form-group">
                        <label for="question">Name</label>
                        <input type="text" class="form-control" id="name"  name="name" value="{{$data->name}}">
            
                    </div>
                   
                    <div class="form-group">
                        <label for="type">Type</label>
                        <input type="text" class="form-control" id="type"  name="type" value="{{$data->type}}">
            
                    </div>
                   
                    <div class="form-group">
                        <label for="iva">IVA</label>
                        <input type="text" class="form-control" id="iva"  name="iva" value="{{$data->iva}}">
            
                    </div>
                   
                    <div class="form-group">
                        <label for="url">URL</label>
                        <input type="text" class="form-control" id="url"  name="url" value="{{$data->url}}">
            
                    </div>
                   
                
                   
                    <input type="submit" value="Update" class="btn btn-primary">
                    </div>
                  
                        
                
                   
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
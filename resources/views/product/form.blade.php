@extends('master')
@section('content')



    <div class="container">
        <div class="row justify-content-center">

            <div class="col-12">

                <div class="card">
                    <div class="card-header"><b>Total Product : </b>



                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-success float-right" data-toggle="modal"
                            data-target="#exampleModalCenter">
                            Add
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Add new Brand</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">



                                        <form method="post" action="{{ route('product.store') }}">
                                            @csrf
                                            <div class="form-group">
                                                <label for="barcode">Barcode</label>
                                                <input type="text" class="form-control" id="barcode"
                                                    placeholder="Enter Category name" name="barcode"
                                                    value="{{ old('barcode') }}">

                                            </div>
                                            <div class="form-group">
                                                <label for=" title"> Title</label>
                                                <input title="text" class="form-control" id=" title"
                                                    placeholder="Product title" name=" title" value="{{ old('title') }}">

                                            </div>

                                            <div class="form-group">
                                                <label for="category_id">Category</label>
                                                <select class="form-control" name="category_id" id="">
                                                    @foreach ($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="brand_id">Brand</label>
                                                <select class="form-control" name="brand_id" id="">
                                                    @foreach ($brands as $brand)
                                                        <option value="{{ $brand->id }}">{{ $brand->name }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="number" class="form-control" id="price"
                                                    placeholder="Enter price" name="price" value="{{ old('price') }}">

                                            </div>
                                            <div class="form-group">
                                                <label for="warranty">warranty</label>
                                                <input type="date" class="form-control" id="warranty"
                                                    placeholder="Enter warranty" name="warranty"
                                                    value="{{ old('warranty') }}">

                                            </div>

                                            <div class="form-group">
                                                <label for="sku">sku</label>
                                                <input type="text" class="form-control" id="sku" placeholder="Enter sku"
                                                    name="sku" value="{{ old('sku') }}">

                                            </div>

                                            <div class="form-group">
                                                <label for="weight">weight</label>
                                                <input type="number" class="form-control" id="weight"
                                                    placeholder="Enter weight" name="weight"
                                                    value="{{ old('warranty') }}">

                                            </div>

                                            <div class="form-group">
                                                <label for="code">Code</label>
                                                <input type="text" class="form-control" id="code" placeholder="Enter code"
                                                    name="code" value="{{ old('code') }}">

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
                                    <th scope="col">Barcode</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Brand</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Warranty</th>
                                    <th scope="col">SKU</th>
                                    <th scope="col">Weight</th>
                                    <th scope="col">Code</th>

                                    <th scope="col" style="width:20%;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($products as $key=>$product)

                                    <tr>

                                    <tr>
                                        <th scope="row">{{ $product->id }}</th>
                                        <td>{{ $product->barcode }}</td>
                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->category->name }}</td>
                                        <td>{{ $product->brand->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->warranty }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->weight }}</td>
                                        <td>{{ $product->code }}</td>

                                        <td>


                                            <a class="btn btn-sm btn-info float-left" data-toggle="modal"
                                                data-target="#modal-<?php echo $product->id; ?>"
                                                value=<?php echo $product->id; ?>
                                                href="#">Update</a>

                                            <div class="modal fade"
                                                id="modal-<?php echo $product->id; ?>"
                                                tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
                                                aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLongTitle">Update
                                                                Product Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">



                                                            <form method="post"
                                                                action="{{ route('product.update', $product->id) }}">
                                                                @csrf
                                                                <div class="form-group">
                                                                    <label for="barcode">Barcode</label>
                                                                    <input type="text" class="form-control" id="barcode"
                                                                        placeholder="Enter Category name" name="barcode"
                                                                        value="{{ $product->barcode }}">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for=" title"> Title</label>
                                                                    <input title="text" class="form-control" id=" title"
                                                                        placeholder="Product title" name=" title"
                                                                        value="{{ $product->title }}">

                                                                </div>
                                                                <!--div class="form-group">
                                                                            <label for="category">category</label>
                                                                            <input type="text" class="form-control" id="category"
                                                                                placeholder="Enter category" name="category"
                                                                                value="{{ $product->category }}">
                                                                        </div-->
                                                                <div class="form-group">
                                                                    <select class="form-control" name="category_id" id="">
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}">
                                                                                {{ $category->name }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="brand_id">Brand</label>
                                                                    <select class="form-control" name="brand_id" id="">
                                                                        @foreach ($brands as $brand)
                                                                            <option value="{{ $brand->id }}">{{ $brand->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="price">Price</label>
                                                                    <input type="number" class="form-control" id="price"
                                                                        placeholder="Enter price" name="price"
                                                                        value="{{ $product->price }}">

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="warranty">warranty</label>
                                                                    <input type="date" class="form-control" id="warranty"
                                                                        placeholder="Enter warranty" name="warranty"
                                                                        value="{{ $product->warranty }}">

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="sku">sku</label>
                                                                    <input type="text" class="form-control" id="sku"
                                                                        placeholder="Enter sku" name="sku"
                                                                        value="{{ $product->sku }}">

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="weight">weight</label>
                                                                    <input type="number" class="form-control" id="weight"
                                                                        placeholder="Enter weight" name="weight"
                                                                        value="{{ $product->weight }}">

                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="code">Code</label>
                                                                    <input type="text" class="form-control" id="code"
                                                                        placeholder="Enter code" name="code"
                                                                        value="{{ $product->code }}">

                                                                </div>



                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <input type="submit" value="Insert" class="btn btn-primary">

                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <a class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"
                                                href="{{ route('product.delete', $product->id) }}">Delete</a>


                                        </td>
                                    @empty
                                        <td colspan="10" class="text-center text-danger">No data available</td>


                                    </tr>
                                @endforelse
                            </tbody>

                        </table>

                    </div>

                </div>
            </div>
        </div>

    </div>


@stop

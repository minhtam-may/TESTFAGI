@extends('admin.layout.master')

@section('title', 'Add Product')


@section('body')
@dd($product)
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    

                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 p-3">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Image</th>

                                            <th>FullName</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Discount</th>
                                            <th>Quantity</th>
                                            <th>Tag</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        
                                        <tr>
                                            <td>#{{ $product->id }}</td>
                                            <td ><img style="width: 50px" src="front/img/{{ $product->productImages[0]->path}}" alt=""></td>
                                            
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description}}</td>
                                            <td>${{ $product->price }}</td>

                                            <td>${{ $product->discount }}</td>
                                            <td>20</td>
                                            <td>{{ $product->tag }}</td>
                                            
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="row ">
                            <div class="col mb-3">
                                <label class="form-lable" for="">Product Id</label>
                                <input type="text" name="title" class="form-control" placeholder="Title" value="{{ $product->id}}" readonly>
                            </div>
                            <div class="col mb-3">
                                <label class="form-lable" for="">Image</label>
                                
                                <img style="width: 50px" src="front/img/{{ $product->productImages[0]->path}}" alt="">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-lable" for="">FullName</label>
                                <input type="text" name="product_code" class="form-control" placeholder="Product Code" value="{{ $product->name}}" readonly>
                            </div>
                            <div class="col mb-3">
                                <label class="form-lable" for="">Description</label>
                                <textarea name="description" class="form-control" placeholder="Description" readonly>{{ $product->description}}</textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-lable" for="">Price</label>
                                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->price }}" readonly>
                            </div>
                            <div class="col mb-3">
                                <label class="form-lable" for="">Discount</label>
                                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->discount}}" readonly>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col mb-3">
                                <label class="form-lable" for="">Quantity</label>
                                <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $product->qty}}" readonly>
                            </div>
                            <div class="col mb-3">
                                <label class="form-lable" for="">Tag</label>
                                <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $product->tag}}" readonly>
                            </div>
                        </div> --}}
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection   
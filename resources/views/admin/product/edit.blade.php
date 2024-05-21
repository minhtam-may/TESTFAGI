@extends('admin.layout.master')

@section('title', 'Product Edit')


@section('body')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <form action="{{ route('product.update', $product->id) }}" method="post">
                            @csrf
                            @method('PUT')
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
                                        {{-- @dd($user) --}}
                                        <tr>
                                            <td><input type="text" name="id" class="form-control" placeholder="Title" value="{{ $product->id}}" ></td>
                                            <td><img style="width: 50px" src="front/img/{{ $product->productImages[0]->path}}" alt=""></td>
                                            <td><input type="text" name="name" class="form-control" placeholder="Title" value="{{ $product->name}}" ></td>
                                            <td><input type="text" name="description" class="form-control" placeholder="Title" value="{{ $product->description}}" ></td>
                                            <td><input type="text" name="price" class="form-control" placeholder="Title" value="{{ $product->price }}" ></td>
                                            <td><input type="text" name="discount" class="form-control" placeholder="Title" value="{{ $product->discount }}" ></td>
                                            <td><input type="text" name="qty" class="form-control" placeholder="Title" value="{{ $product->qty }}" ></td>
                                            <td><input type="text" name="tag" class="form-control" placeholder="Title" value="{{ $product->tag }}" ></td>


                                            <td class="">
                                                <div class="row ps-3 me-3 flex-end">
                                                    <div class="d-grid">
                                                       <button class="btn btn-warning">Update</button>
                                                    </div>
                                                 </div>
                                            </td>

                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                               
                            </div>
                            
                        </div>
                        </form>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection   
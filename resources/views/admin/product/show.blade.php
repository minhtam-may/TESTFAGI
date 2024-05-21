@extends('admin.layout.master')

@section('title', 'Product Detail')


@section('body')

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
                                            <td>{{ $product->qty }}</td>
                                            <td>{{ $product->tag }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection   
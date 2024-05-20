@extends('admin.layout.master')

@section('title', 'Product')


@section('body')


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <a href="{{ route('product.create') }}" class="btn-shadow btn-hover-shine mr-3 btn btn-primary">
                        Create
                    </a>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    

                    @if(Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <!-- DataTales Example -->
                    
                    <div class="card shadow mb-4">
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
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach($products as $product)
                                        <tr>
                                            <td>#{{ $product->id }}</td>
                                            <td ><img style="width: 50px" src="front/img/{{ $product->productImages[0]->path}}" alt=""></td>
                                            {{-- <td><img src="front/img/user/{{ $user->avatar ?? 'default-avatar.jpg'}}" alt=""></td> --}}
                                            <td>{{ $product->name }}</td>
                                            <td>{{ $product->description}}</td>
                                            <td>${{ $product->discount }}</td>
                                            <td class="d-flex">
                                                <a href="admin/product/{{ $product->id }}"
                                                    type="button" class="btn btn-secondary m-0 text-center p-3">
                                                    Details
                                                </a>

                                                <a href="admin/product/{{ $product->id }}/edit"
                                                    type="button" class="btn btn-warning m-0 d-flex text-center align-middle p-3">
                                                    Edit
                                                </a>

                                                <form action="{{ route('product.destroy', $product->id)}}" method="post" type="button" class="btn btn-danger">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0">Delete</button>
                                                </form>
                                            </td>
                                            {{-- <td>$320,800</td> --}}
                                        </tr>
                                        @endforeach
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="product-pagination text-center">
                                                    {{ $products->links() }}
                                                    
                                                </div>
                                            </div>
                                        </div>
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
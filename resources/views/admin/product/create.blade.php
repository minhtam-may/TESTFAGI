@extends('admin.layout.master')

@section('title', 'Add Product')


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
                     
                        <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <input type="file" name="path" class="form-control" placeholder="" onchange="changeImg(this): this.form.submit()">
                                </div>
                                
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col">
                                    <textarea name="description" class="form-control" id="" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="price" class="form-control" placeholder="Price">
                                </div>
                                <div class="col">
                                    <input type="text" name="discount" class="form-control" placeholder="Discount">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col">
                                    <input type="text" name="qty" class="form-control" placeholder="Quantity">
                                </div>
                                <div class="col">
                                    <input type="text" name="tag" class="form-control" placeholder="Tag">
                                </div>
                            </div>
                            <div class="row">
                              <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Create</button>
                              </div>
                            </div>
                        
                        </form>
                        
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

@endsection   
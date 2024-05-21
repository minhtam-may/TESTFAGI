@extends('admin.layout.master')

@section('title', 'User Edit')


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
                        <form action="{{ route('user.update', $user->id ) }}" method="post">
                            @csrf
                            @method('PUT')
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>FullName</th>
                                            <th>Email</th>
                                            {{-- <th>Company Name</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>PostCode Zip</th>
                                            <th>City</th>
                                            <th>Phone</th> --}}
                                            <th>Level</th>
                                            <th>Description</th>
                                            <th></th>


                                            {{-- <th>Salary</th> --}}
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        {{-- @dd($user) --}}
                                        <tr>
                                            <td><input type="text" name="id" class="form-control" placeholder="Title" value="{{ $user->id}}" ></td>
                                            <td><input type="text" name="name" class="form-control" placeholder="Title" value="{{ $user->name}}" ></td>
                                            <td><input type="text" name="email" class="form-control" placeholder="Title" value="{{ $user->email}}" ></td>
                                            <td><input type="text" name="level" class="form-control" placeholder="Title" value="{{ $user->level }}" ></td>
                                            <td><input type="text" name="description" class="form-control" placeholder="Title" value="{{ $user->description }}" ></td>
                                            <td>
                                                <div class="row">
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
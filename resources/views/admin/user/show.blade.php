@extends('admin.layout.master')

@section('title', 'User Detail')


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
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>FullName</th>
                                            <th>Email</th>
                                            <th>Company Name</th>
                                            <th>Country</th>
                                            <th>Address</th>
                                            <th>PostCode Zip</th>
                                            <th>City</th>
                                            <th>Phone</th>
                                            <th>Level</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->company_name }}</td>
                                            <td>{{ $user->country }}</td>
                                            <td>{{ $user->street_address }}</td>
                                            <td>{{ $user->postcode_zip }}</td>
                                            <td>{{ $user->town_city }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>{{ $user->level }}</td>
                                            <td>{{ $user->description }}</td>
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
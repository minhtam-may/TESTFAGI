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


                                            {{-- <th>Salary</th> --}}
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        {{-- @dd($user) --}}
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            {{-- <td><img src="front/img/user/{{ $user->avatar ?? 'default-avatar.jpg'}}" alt=""></td> --}}
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







                                            {{-- <td class="d-flex">
                                                <a href="admin/user/{{ $user->id }}"
                                                    type="button" class="btn btn-secondary m-0 text-center">
                                                    Details
                                                </a>

                                                <a href="admin/user/{{ $user->id }}/edit"
                                                    type="button" class="btn btn-warning m-0 d-flex text-center align-middle">
                                                    Edit
                                                </a>

                                                <form action="" method="post" type="button" class="btn btn-danger">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0">Delete</button>
                                                  </form>
                                            </td> --}}
                                            {{-- <td>$320,800</td> --}}
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
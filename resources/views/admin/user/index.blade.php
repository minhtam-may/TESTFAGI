@extends('admin.layout.master')

@section('title', 'User')


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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>FullName</th>
                                            <th>Email</th>
                                            <th>Level</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        @foreach($users as $user)
                                        <tr>
                                            <td>#{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email}}</td>
                                            <td>{{ $user->level }}</td>
                                            <td class="d-flex">
                                                <a href="admin/user/{{ $user->id }}"
                                                    type="button" class="btn btn-secondary m-0 text-center">
                                                    Details
                                                </a>

                                                <a href="admin/user/{{ $user->id }}/edit"
                                                    type="button" class="btn btn-warning m-0 d-flex text-center align-middle">
                                                    Edit
                                                </a>

                                                <form action="{{ route('user.destroy', $user->id)}}" method="post" type="button" class="btn btn-danger">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger m-0">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        @endforeach
                                        
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
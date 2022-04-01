@extends('admin.master')

@section('title')
    Manage User
@endsection

@section('body')
    <section class="py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="card">
                        <div class="card-header bg-light">
                            <h4 class="text-center text-black-50 font-weight-bold font-size-24">Manage User</h4>
                        </div>
                        <div class="card-body">
                            <table class="table" id="dataTable">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Date of Birth</th>
                                    <th>Country</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->dob }}</td>
                                        <td>{{ $user->city }}</td>
                                        <td>{{ $user->status == 1 ? 'Active' : 'Inactive' }}</td>
                                        <td>
                                            <a href="{{ route('change-status', ['id' => $user->id]) }}" class="btn btn-{{ $user->status == 1 ? 'primary' : 'secondary' }} btn-sm">status</a>
                                            <a href="{{ route('edit-user',['id'=>$user->id]) }}" class="btn btn-success btn-sm">edit</a>
                                            <a href="{{ route('delete-user',['id'=>$user->id]) }}" class="btn btn-danger btn-sm">delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



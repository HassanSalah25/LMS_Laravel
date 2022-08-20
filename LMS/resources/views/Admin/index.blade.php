@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">All Admins</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="Admin/create">Add Admin</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="message"></div>
                    <table class="content-table">
                        <thead>
                            <th>S.No</th>
                            <th>Author Name</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            @forelse ($Admins as $Admin)
                                <tr>
                                    <td>{{ $Admin->id }}</td>
                                    <td>{{ $Admin->name }}</td>
                                    <td class="edit">
                                        <a href="edit.blade.php" class="btn btn-success">Edit</a>
                                    </td>
                                    <td class="delete">
                                        <form action="destroy/{{$Admin->id}}" method="post"
                                            class="form-hidden">
                                            <button class="btn btn-danger delete-author">Delete</button>
                                            @csrf
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No Admin Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

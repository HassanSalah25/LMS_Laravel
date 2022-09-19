@extends('layouts.app')
@section('content')
<div class="container bootstrap snippets bootdey">
    <h1 class="text-primary">Edit Profile</h1>
    <hr>
    <div class="row">
        <!-- left column -->
        <div class="col-md-3">
            <div class="text-center">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" class="avatar img-circle img-thumbnail" alt="avatar">
                <h6>Upload a different photo...</h6>

                <input type="file" class="form-control">
            </div>
        </div>

        <!-- edit form column -->
        <div class="col-md-9 personal-info">
            <div class="alert alert-info alert-dismissable">
                <a class="panel-close close" data-dismiss="alert">×</a>
                <i class="fa fa-coffee"></i>
                This is an <strong>.alert</strong>. Use this to show important messages to the user.
            </div>
            <h3>Personal info</h3>

            <form class="yourform" action="{{ route('Staffs.update', $staff ->id) }}" method="post" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="staff Name" name="name" value="{{ $staff->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="email" placeholder="staff Email" name="email" value="{{ $staff->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Password:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="password" placeholder="staff Password" name="password" value="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Mobile:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="staff Mobile" name="mobile" value="{{ $staff->mobile }}">
                    </div>
                </div>
                <input type="submit" class="btn btn-danger" required>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<style>
    body{margin-top:20px;}
    .avatar{
        width:200px;
        height:200px;
    }
</style>
@endsection

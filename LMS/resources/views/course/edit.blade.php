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

            <form class="yourform" action="{{ route('courses.update',$course->id) }}" method="post" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="course Name" name="name" value="{{ $course->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Description:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="description" name="description" value="{{ $course->description   }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Cover Image:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Cover Image" name="cover_image" value="{{ $course->cover_image }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Hours:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Hours" name="hours" value="{{ $course->hours }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Certificate Image:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Certificate Image" name="certificate_image" value="{{ $course->certificate_image }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Position:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Position" name="position" value="{{ $course->position }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Is Active:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="is Active" name="is_active" value="{{ $course->is_active }}">
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

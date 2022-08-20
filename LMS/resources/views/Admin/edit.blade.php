
{{--    <div id="admin-content">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-3">--}}
{{--                    <h2 class="admin-heading">Add Author</h2>--}}
{{--                </div>--}}
{{--                <div class="offset-md-7 col-md-2">--}}
{{--                    <a class="add-new" href="index">All Authors</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="row">--}}
{{--                <div class="offset-md-3 col-md-6">--}}
{{--                    <form class="yourform" action="{{ route('Admins.update', $admin->id) }}" method="post" autocomplete="off">--}}
{{--                        @csrf--}}
{{--                        <div class="form-group">--}}
{{--                            <label>Admin Name</label>--}}
{{--                            <input type="text" class="form-control @error('name') isinvalid @enderror" placeholder="Admin Name" name="name" value="{{ old('name') }}" required>--}}
{{--                            @error('name')--}}
{{--                            <div class="alert alert-danger" role="alert">--}}
{{--                                {{ $message }}--}}
{{--                            </div>--}}
{{--                            @enderror--}}

{{--                            <label>Admin Password</label>--}}
{{--                            <input type="password" class="form-control @error('password') isinvalid @enderror" placeholder="Admin Password" name="password" value="{{ old('password') }}" required>--}}
{{--                            @error('password')--}}
{{--                            <div class="alert alert-danger" role="alert">--}}
{{--                                {{ $message }}--}}
{{--                            </div>--}}
{{--                            @enderror--}}

{{--                            <label>Email</label>--}}
{{--                            <input type="email" class="form-control @error('email') isinvalid @enderror" placeholder="Admin Email" name="email" value="{{ old('email') }}" required>--}}
{{--                            @error('email')--}}
{{--                            <div class="alert alert-danger" role="alert">--}}
{{--                                {{ $message }}--}}
{{--                            </div>--}}
{{--                            @enderror--}}

{{--                            <label>Admim Mobile</label>--}}
{{--                            <input type="text" class="form-control @error('mobile') isinvalid @enderror" placeholder="Admin Mobile" name="mobile" value="{{ old('mobile') }}" required>--}}
{{--                            @error('mobile')--}}
{{--                            <div class="alert alert-danger" role="alert">--}}
{{--                                {{ $message }}--}}
{{--                            </div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                        <input type="submit" class="btn btn-danger" required>--}}
{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>ADMIN: Management Data Table</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
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

            <form class="yourform" action="{{ route('Admins.update', $admin->id) }}" method="post" autocomplete="off">
                @csrf
                <div class="form-group">
                    <label class="col-lg-3 control-label">Name:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Admin Name" name="name" value="{{ $admin->name }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="email" placeholder="Admin Email" name="email" value="{{ $admin->email }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Password:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Admin Password" name="password" value="{{ $admin->password }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Mobile:</label>
                    <div class="col-lg-8">
                        <input class="form-control" type="text" placeholder="Admin Mobile" name="mobile" value="{{ $admin->mobile }}">
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

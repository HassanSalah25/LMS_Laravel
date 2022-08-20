@extends('layouts.app')
@section('content')
    <div id="admin-content">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h2 class="admin-heading">Add Author</h2>
                </div>
                <div class="offset-md-7 col-md-2">
                    <a class="add-new" href="index.blade.php">All Authors</a>
                </div>
            </div>
            <div class="row">
                <div class="offset-md-3 col-md-6">
                    <form class="yourform" action="store" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label>Admin Name</label>
                            <input type="text" class="form-control @error('name') isinvalid @enderror" placeholder="Admin Name" name="name" value="{{ old('name') }}" required>
                            @error('name')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            <label>Admin Password</label>
                            <input type="password" class="form-control @error('password') isinvalid @enderror" placeholder="Admin Password" name="password" value="{{ old('password') }}" required>
                            @error('password')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            <label>Email</label>
                            <input type="email" class="form-control @error('email') isinvalid @enderror" placeholder="Admin Email" name="email" value="{{ old('email') }}" required>
                            @error('email')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror

                            <label>Admim Mobile</label>
                            <input type="number" class="form-control @error('mobile') isinvalid @enderror" placeholder="Admin Mobile" name="mobile" value="{{ old('mobile') }}" required>
                            @error('mobile')
                            <div class="alert alert-danger" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-danger" required>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

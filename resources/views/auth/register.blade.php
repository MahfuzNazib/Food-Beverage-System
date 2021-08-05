@extends('frontend.layout.web')
@section('content')

<section class="section">
    <div class="container register">
        <center>
            <h6>Sing Up</h6>
        </center>
        <form method="post" action="{{ route('registration.store') }}">
            @csrf
            <label>Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
            <div><span class="text-danger">{{ $errors->first('name') }}</span></div>

            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            <div><span class="text-danger">{{ $errors->first('email') }}</span></div>

            <label>Phone No</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone') }}">
            <div><span class="text-danger">{{ $errors->first('phone') }}</span></div>

            <label>Password</label>
            <input type="password" class="form-control" name="password">
            <div><span class="text-danger">{{ $errors->first('password') }}</span></div>

            <label>Confirm Password</label>
            <input type="password" class="form-control" name="confirm_password">

            <button type="submit" class="btn btn-success mt-3">Signup</button>
        </form>
    </div>
</section>

@endsection

@extends('frontend.layout.web')
@section('content')

<section class="section">
    <div class="container register">
        <center>
            <h6>Sing In</h6>
        </center>
        <form role="form" method="post" action="{{ route('do.login') }}">
            <div class="text-muted text-center mt-2 mb-3">
                
            </div>
            @csrf
            {{-- Invalid Message Show --}}
            @if(session('message'))
            <div class="form-group mb-3">
                <div class="alert alert-danger">
                    <center>
                        {{ session('message') }}
                    </center>
                </div>
            </div>
            @endif
            {{-- End Invalid Message --}}
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">

            <label>Password</label>
            <input type="password" class="form-control" name="password">


            <div class="custom-control custom-control-alternative custom-checkbox">
                <input class="custom-control-input" name="remember" value="1" id="customCheckLogin" type="checkbox"
                    {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="customCheckLogin">
                    <span class="text-muted">{{ __('Remember me') }}</span>
                </label>

                <label class="custom-control-label float-right">
                    <span>
                        <a href="{{ route('registration.show') }}">Create Account</a>
                    </span>
                </label>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Sing In</button>
            </div>
        </form>
    </div>
</section>

@endsection

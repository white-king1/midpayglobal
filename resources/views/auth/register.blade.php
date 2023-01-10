@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Register') }}</div>

    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf

                <input  type="hidden"  name="usertype" value="user">

            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>



            <div class="form-group row">
                <label for="phone-number" class="col-md-4 col-form-label text-md-right">{{ __('Phone-Number') }}</label>

                <div class="col-md-6">
                    <input id="phone" type="text" class="form-control @error('phone-number') is-invalid @enderror" name="phone" value="{{ old('phone-number') }}" required autocomplete="phone-number" autofocus>

                    @error('phone-number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12">
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <center>
                                        <p>ALREADY HAVE AN ACCOUNT
                                            <a href="{{route('login')}}"><strong>LOGIN HERE</strong></a>
                                        </p>
                                        </center>

                                    </div>
                                </div>
                            </div>
                </div>
            </div>
                <div class="row">
                    <div class="col-sm-12">
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <center>
                                            <p>BY REGISTERING YOU AGREE TO OUR
                                                <a href=""><strong>   PRIVACY AND POLICY</strong></a>
                                            </p>
                                            </center>

                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>


            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

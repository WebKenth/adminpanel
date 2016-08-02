@extends('layouts.app_no_auth')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default panel--background">
                <div class="panel-heading login--heading"><span><i class="fa fa-cog" aria-hidden="true"></i></span> Kontrolpanel</div>
                <div class="panel-body">
                <div class="col-md-6">
                <h2 class="font-bold">Bruger Kontrolpanel</h2>

                <p>
                    Velkommen til dit kontrolpanel. Her har du mulighed for at redigere forskellige ting på din hjemmeside.  
                </p>

                <p>
                    For at logge ind skal du bruge det brugernavn og password som du modtog i vores velkomst mail. 
                </p>

                <p>
                    Har du spørgsmål, er du altid velkommen til at kontakte os <a href="#">her</a>
                </p>

                <p>
                    <small></small>
                </p>

            </div>
            <div class="col-md-6">
                <div class="ibox-content">
                    <form class="m-t" role="form" method="POST" action="{{ url('/login') }}"> 
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <input type="email" name="email" class="form-control" placeholder="Brugernavn" required="">
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <input type="password" name="password" class="form-control " placeholder="Password" required="">
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b ">Login</button>


                        <p class="text-muted text-center glemt--kode-tekst">
                            <small>Har du glemt din kode?</small>
                        </p>
                        <a class="btn btn-sm btn-white btn-block my_popup_open" href="#fadeandscale">Få tilsendt ny kode</a>
                    </form>
                </div>
            </div>



<!--                     <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

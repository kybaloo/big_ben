@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('login.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4 animate__animated animate__lightSpeedInLeft" src="{{ asset('favicon.ico') }}" alt="" width="292" height="217">

        <h1 class="h3 mb-3 fw-normal">Connexion</h1>

        @include('layouts.partials.messages')

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Email ou nom d'utilisateur</label>
            @if ($errors->has('username'))
                <span class="text-danger text-left">{{ $errors->first('username') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password" value="{{ old('password') }}" placeholder="Password"
                required="required">
            <label for="floatingPassword">Mot de passe</label>
            @if ($errors->has('password'))
                <span class="text-danger text-left">{{ $errors->first('password') }}</span>
            @endif
        </div>

        <button class="learn-more">
            <span aria-hidden="true" class="circle">
                <span class="icon arrow"></span>
            </span>
            <span class="button-text" type="submit">Se connecter</span>
        </button>
        
        <style>
            button {
                position: relative;
                display: inline-block;
                cursor: pointer;
                outline: none;
                border: 0;
                vertical-align: middle;
                text-decoration: none;
                background: transparent;
                padding: 0;
                font-size: inherit;
                font-family: inherit;
            }

            button.learn-more {
                width: 12rem;
                height: auto;
            }

            button.learn-more .circle {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                box-shadow: 0 0 5px 1px white;
                position: relative;
                display: block;
                margin: 0;
                width: 3rem;
                height: 3rem;
                background: #282936;
                border-radius: 1.625rem;
            }

            button.learn-more .circle .icon {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: absolute;
                top: 0;
                bottom: 0;
                margin: auto;
                background: #fff;
            }

            button.learn-more .circle .icon.arrow {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                left: 0.625rem;
                width: 1.125rem;
                height: 0.125rem;
                background: none;
            }

            button.learn-more .circle .icon.arrow::before {
                position: absolute;
                content: "";
                top: -0.29rem;
                right: 0.0625rem;
                width: 0.625rem;
                height: 0.625rem;
                border-top: 0.125rem solid #fff;
                border-right: 0.125rem solid #fff;
                transform: rotate(45deg);
            }

            button.learn-more .button-text {
                transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                padding: 0.75rem 0;
                margin: 0 0 0 1.85rem;
                color: rgba(0, 0, 0, 0.493);
                font-weight: 700;
                line-height: 1.6;
                text-align: center;
                text-transform: uppercase;
            }

            button:hover .circle {
                width: 100%;
                box-shadow: 0 0 10px 2px white;
            }

            button:hover .button-text {
                transform: translate(-1.7rem, 0);
            }

            button:hover .circle .icon.arrow {
                background: #fff;
                transform: translate(8.7rem, 0);
            }

            button:active .circle .icon.arrow {
                transform: translate(9.5rem, 0);
                transition: all 0.3s;
            }

            button:active .circle {
                transform: scale(0.9);
                transition: all 0.3s;
                box-shadow: 0 0 5px 0.5px white;
            }

            button:hover .button-text {
                color: #ffffff;
            }

            button:active .button-text {
                color: rgba(255, 255, 255, 0.459);
            }
        </style>

        @include('auth.partials.copy')
    </form>
@endsection

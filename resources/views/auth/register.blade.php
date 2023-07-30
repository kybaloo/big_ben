@extends('layouts.auth-master')

@section('content')
    <form method="post" action="{{ route('register.perform') }}">

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <img class="mb-4 animate__animated animate__bounceInUp" src="{{ asset('favicon.ico') }}" alt="" width="232" height="167">


        <h1 class="h3 mb-3 fw-normal">Inscription</h1>

        <div class="form-group form-floating mb-3">
            <input type="email" class="form-control" name="email" value="{{ old('email') }}"
                placeholder="name@example.com" required="required" autofocus>
            <label for="floatingEmail">Email</label>
            @if ($errors->has('email'))
                <span class="text-danger text-left">{{ $errors->first('email') }}</span>
            @endif
        </div>

        <div class="form-group form-floating mb-3">
            <input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"
                required="required" autofocus>
            <label for="floatingName">Nom d'utilisateur</label>
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

        <div class="form-group form-floating mb-3">
            <input type="password" class="form-control" name="password_confirmation"
                value="{{ old('password_confirmation') }}" placeholder="Confirm Password" required="required">
            <label for="floatingConfirmPassword">Confirmation de mot de passe</label>
            @if ($errors->has('password_confirmation'))
                <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
            @endif
        </div>

        <button type="submit" class="button" data-text="Awesome">
            <span class="actual-text">&nbsp;S'inscrire&nbsp;</span>
            <span aria-hidden="true" class="hover-text">&nbsp;S'inscrire&nbsp;</span>
        </button>
        <style>
            /* === removing default button style ===*/
            .button {
                margin: 0;
                height: auto;
                background: transparent;
                padding: 0;
                border: none;
            }

            /* button styling */
            .button {
                --border-right: 6px;
                --text-stroke-color: rgba(0, 0, 0, 0.6);
                --animation-color: #382323;
                --fs-size: 1.5em;
                letter-spacing: 3px;
                text-decoration: none;
                font-size: var(--fs-size);
                font-family: "Arial";
                position: relative;
                text-transform: uppercase;
                color: transparent;
                -webkit-text-stroke: 1px var(--text-stroke-color);
            }

            /* this is the text, when you hover on button */
            .hover-text {
                position: absolute;
                box-sizing: border-box;
                content: attr(data-text);
                color: var(--animation-color);
                width: 0%;
                inset: 0;
                border-right: var(--border-right) solid var(--animation-color);
                overflow: hidden;
                transition: 0.5s;
                -webkit-text-stroke: 1px var(--animation-color);
            }

            /* hover */
            .button:hover .hover-text {
                width: 100%;
                filter: drop-shadow(0 5px 23px var(--animation-color))
            }
        </style>
        @include('auth.partials.copy')
    </form>
@endsection

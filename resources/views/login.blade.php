@extends('layouts.app')

@section('content')

    <div class="card login-card">

        <i class="fa-solid fa-circle-user profile-icon"></i>

        <h2>Login</h2>

        <form action="{{ route('home') }}" method="POST">

            @csrf

            <div class="form-group">

                <label>Username</label>

                <input
                    type="text"
                    name="username"
                    required
                >

            </div>


            <div class="form-group">

                <label>Password</label>

                <input
                    type="password"
                    name="password"
                    required
                >

            </div>


            <a
                href="{{ route('register') }}"
                class="btn-submit register-button"
            >
                Register
            </a>


            <button
                type="submit"
                class="btn-submit"
            >
                Login
            </button>

        </form>

    </div>

@endsection

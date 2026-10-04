@extends('layouts.app')

@section('content')

    <div class="card login-card">

        <h2>Register</h2>

        <form action="{{ route('login') }}" method="POST">

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


            <div class="form-group">

                <label>Email</label>

                <input
                    type="email"
                    name="email"
                    required
                >

            </div>


            <div class="form-group">

                <label>Phone</label>

                <input
                    type="text"
                    name="phone"
                    required
                >

            </div>


            <button
                type="submit"
                class="btn-submit"
            >
                Register
            </button>

        </form>

    </div>

@endsection

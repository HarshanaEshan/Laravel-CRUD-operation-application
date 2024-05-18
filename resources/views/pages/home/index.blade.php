@extends('layouts.app')
@include('libraries.styles')

@section('content')

    <div class="container-admin">
        <div class="title-admin">
            <h1>Student Registration System</h1>
        </div>
        <div class="admin-section">
            <div class="left">
                <img src="{{ asset('images/admin2.png') }}" class="card-img-top img-admin" alt="">
            </div>
            <div class="right">
                @if(Session::has('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ Session::get('message') }}
                    </div>
                @endif
                <form action="{{ route('admin') }}" method="POST">
                    @csrf
                    <h1>Admin Login</h1>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Username" name="username" id="username" required>
                        <label for="floatingInput">Username</label>
                      </div>
                      <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" id="password" required>
                        <label for="floatingPassword">Password</label>
                      </div>
                      <div class="flex-center btn-form">
                        <input type="submit" class="btn btn-outline-success" value="Login"></input>
                        <input type="reset" class="btn btn-outline-danger" value="Cancel"></input>
                      </div>
                </form>
            </div>
        </div>
    </div>

@endsection


@push('css')
<style>
    .container-admin{
        display: grid;
        align-items: center;
        justify-content: center;
        padding: 10vh;
        /* background: blue; */
    }
    .title-admin h1{
        text-align: center;
        padding: 1vh;
        margin-bottom: 3vh;
    }
    .admin-section{
        display: flex;
        align-items: center;
        justify-content: center;
        border: 2px solid blue;
        border-radius: 20px;
        box-shadow: 2px 3px 4px;
        gap: 2rem;
        /* background: blue; */
    }
    .img-admin{
        width: 25rem;
        height: 25rem;
    }
    .right{
        padding: 5rem;
        gap: 1rem;
    }
    .left{
        padding: 0.5rem;
    }
    .btn-form{
        padding-top: 2rem;
    }
    .btn-form input{
        margin-right: 1rem;
    }
    .right form h1{
        margin-bottom: 2rem;
    }
    .right form h6{
        margin-top: 1rem;
    }
</style>
@endpush

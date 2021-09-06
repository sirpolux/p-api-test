@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="jumbotron jumbotron-fluid">
                    <div class="container">
                      <h1><b>Sample Api</b></h1>      
                      <h4>Sample Api says hi <b>
                        @auth
                            {{Auth::user()->name}}
                        @else
                            Guest
                        @endauth
                        <p> api:
                            <ul>
                                <li>register --- <a href='/register'>/register</a> </li>
                                <li>login --- <a href="/login">/login</a></li>
                                <li>allusers --- <a href='/allusers'>/allusers</a></li>
                            </ul>
                        </p>
                      </b></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

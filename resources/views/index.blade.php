
    @extends('layouts.app')
        @section('title', 'Home page')
    
        @section('content')
            <div class="jumbotron text-center">
                <h1>Welcome to my First Laravel project</h1>
                <p>I build this project for my schoool, to enhance 
                    the improvement and reduce the redundance, this project<br>
                    will help teachers and students to work effortlessly
                </p>
                <a href="login" class="btn btn-primary link">Login</a>
                <a href="register" class="btn btn-info link">Register</a>
            </div>
        @endsection
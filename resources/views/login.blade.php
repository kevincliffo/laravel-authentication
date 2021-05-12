@include('includes.header')
    <div class="container">
        <form class="form-horizantal" method="POST" action="{{ route('login') }}">
        <!-- <form class="form-horizantal" method="POST" action=""> -->
            @csrf
            <fieldset>
                <legend>Registration Form</legend>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(@session('message'))
                    <div class="col-md-8 alert alert-success">
                        {{@session('message')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="email" class="form-label mt-4">Email address</label>
                    <div class="col-lg-6">
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
                        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="password" class="form-label mt-4">Password</label>
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@include('includes.footer')
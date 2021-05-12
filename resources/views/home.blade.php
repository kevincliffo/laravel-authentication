@include('includes.header')
    <div class="container">
        <form class="form-horizantal" method="POST" action="{{ route('register') }}">
        <!-- <form class="form-horizantal" method="POST" action=""> -->
            @csrf
            <fieldset>
                <legend>Registration Form</legend>
                @if(count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger">{{$error}}</div>
                    @endforeach
                @endif

                @if(@session('response'))
                    <div class="col-md-8 alert alert-success">
                        {{@session('response')}}
                    </div>
                @endif
                <div class="form-group">
                    <label for="name" class="form-label mt-4">Name</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    </div>
                </div>
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
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="password_confirmation" class="form-label mt-4">Confirm Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="dob" class="form-label mt-4">DOB</label>
                        <input type="text" class="form-control" name="dob" id="datepicker" placeholder="DOB">
                    </div>
                </div>
                <fieldset class="form-group">
                    <legend class="mt-4">Gender</legend>
                    <div class="radio">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="female" value="Female" checked="">
                            Female
                        </label>
                    </div>
                    <div class="radio">
                        <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="gender" id="male" value="Male">
                            Male
                        </label>
                    </div>
                </fieldset>                
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="country" class="form-label mt-4">Country</label>
                        <select class="form-select" name="country" id="country">
                            <option selected disabled value="Select Country">Select Country</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Tanzania">Tanzania</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="form-label mt-4">Mobile</label>
                    <div class="col-lg-6">
                        <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Enter Mobile">
                    </div>
                </div>
                <!-- <div class="form-group">
                <label for="exampleSelect2" class="form-label mt-4">Example multiple select</label>
                <select multiple="" class="form-select" id="exampleSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                </select>
                </div> -->
                <div class="form-group">
                    <div class="col-lg-6">
                        <label for="address" class="form-label mt-4">Address</label>
                        <textarea class="form-control" id="address" name="address" rows="3"></textarea>
                    </div>
                </div>
                <div class="form-group mt-2">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="notification" id="notification">
                        <label class="form-check-label" for="notification">
                            Notification Subscription
                        </label>
                    </div>
                </div>
                <!-- <div class="form-group">
                <label for="formFile" class="form-label mt-4">Default file input example</label>
                <input class="form-control" type="file" id="formFile">
                </div>
                <fieldset class="form-group">
                <legend class="mt-4">Checkboxes</legend>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                    <label class="form-check-label" for="flexCheckDefault">
                    Default checkbox
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked="">
                    <label class="form-check-label" for="flexCheckChecked">
                    Checked checkbox
                    </label>
                </div>
                </fieldset>
                <fieldset>
                <legend class="mt-4">Switches</legend>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckDefault">Default switch checkbox input</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked="">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>
                </div>
                </fieldset>
                <fieldset class="form-group">
                <legend class="mt-4">Ranges</legend>
                    <label for="customRange1" class="form-label">Example range</label>
                    <input type="range" class="form-range" id="customRange1">
                    <label for="disabledRange" class="form-label">Disabled range</label>
                    <input type="range" class="form-range" id="disabledRange" disabled="">
                    <label for="customRange3" class="form-label">Example range</label>
                    <input type="range" class="form-range" min="0" max="5" step="0.5" id="customRange3">
                </fieldset> -->
                <div class="form-group mt-2">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="reset" class="btn btn-primary">Cancel</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
@include('includes.footer')
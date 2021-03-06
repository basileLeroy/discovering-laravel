@extends('layout')
@extends('header')
@extends('footer')

@section('title')
    Contact me
@endsection




@section('content')
<div class="contact-content">
    <div class="alert alert-dismissible fade show info-box" style="box-shadow: 0 4px 2px 0 hsla(0, 0%, 0%, 0.2); margin-left:5%; margin-right:5%;" role="alert">
        <p style="color: #bd6b00; font-weight: 400;">
            <span style="color: #bd6b00; font-weight: 700;">Contact me</span>
            <hr>
            If you have questions, would like my CV sent to you, or have a job offer for me? Feel free to contact me.
        </p>
    </div>

    <div class="contact-form">
        <div class="card" style="box-shadow: 0 4px 6px 0 hsla(0, 0%, 0%, 0.3); margin-left:5%; margin-right:5%;">
            <div class="card-body" style="font-weight:500; background-color: #F0F8FF;">
                @if(Session::has('message_sent'))
                    <div class="alert alert-success" role="alert">
                        {{ Session::get('message_sent')}}
                    </div>
                @endif
                <form method="POST" action="./send-message" class="row g-3" enctype="multipart/form-data">
                {{ csrf_field() }}
                    <div class="col-md-12">
                        <label for="email" class="form-label"><b>Email</b></label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="col-md-6">
                        <label for="name" class="form-label"><b>First Name</b></label>
                        <input type="text" class="form-control" name="name" id="name">
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label"><b>Last Name</b></label>
                        <input type="text" class="form-control" name="lastName" id="lastName">
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label"><b>City</b></label>
                        <input type="text" class="form-control" name="city" id="city">
                    </div>
                    <div class="col-md-12">
                        <label for="message" class="form-label"><b>Message:</b></label>
                        <textarea type="text" class="form-control" name="message" id="message"></textarea>
                    </div>
                    
                    @foreach ($errors->all() as $error )
                        <div class="alert alert-danger justify-content-center">
                            {{ $error }}
                        </div>
                    @endforeach
    
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">Send!</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

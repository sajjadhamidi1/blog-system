@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-user" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                REGISTER
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form>
                        @csrf
                        <div class="form-group">
                            <label class="form-control-label">Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Email</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Mobile</label>
                            <input type="text" class="form-control" i>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" class="form-control" i>
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">Conform PASSWORD</label>
                            <input type="password" class="form-control" i>
                        </div>
                        
                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div>




    
@endsection

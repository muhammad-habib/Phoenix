@extends('layouts.admin')
@include('layouts.header')
@include('layouts.sidebar')
@section('content')
    <section class="wrapper">
        <form method="POST" class="form-horizontal bucket-form"  action="{{ route('employee.store') }}">
        {{ csrf_field() }}
            <div class="form-group">
                <label class="col-sm-3 control-label">Name: </label>
                <div class="col-sm-6">
                    <input type="text"  name="name" value="{{ old('name') }}" required autofocus class="form-control">
                </div>
                @if ($errors->has('name'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Email: </label>
                <div class="col-sm-6">
                    <input type="email"  name="email" value="{{ old('email') }}" required  class="form-control">
                </div>
                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Password: </label>
                <div class="col-sm-6">
                    <input type="password" name="password" class="form-control" placeholder="">
                </div>
                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label">Confirm Password: </label>
                <div class="col-sm-6">
                    <input type="password" name="repassword" class="form-control" placeholder="">
                </div>
                @if ($errors->has('repassword'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('repassword') }}</strong>
                                    </span>
                @endif
            </div>

        </form>
    </section>
@endsection

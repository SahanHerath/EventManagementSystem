@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-white"><h2>Your Complaint</h2></div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="/newComplain">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('user_email') ? ' has-error' : '' }}">
                            <label for="user_email" class="col-md-4 control-label text-white">User Email</label>

                            <div class="col-md-6">
                                <input id="user_email" type="email" class="form-control" name="user_email" value="{{ old('user_email') }}"  autofocus>

                                @if ($errors->has('user_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('user_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        @foreach($data as $data1)
                        <input type="hidden" id="id" name="id" value="{{$data1->id}}">
                        @endforeach

                        <div class="form-group{{ $errors->has('complaint_about') ? ' has-error' : '' }}">
                        <div class="form-group">
                            <label for="complaint_about" class="col-md-4 control-label text-white">Complaint About</label>
                            <div class="col-md-6">
                                <select id="complaint_about" class="form-control" name="complaint_about" >
                                    <option value="" disabled selected>--Select Type--</option>
                                    <option value="Account">Account</option>
                                    <option value="Services">Services</option>
                                    <option value="Charge">Charges</option>
                                    <option value="Package">Packages</option>
                                    <option value="Images">Images/Photos</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                        </div>

                        <div class="form-group{{ $errors->has('complaint') ? ' has-error' : '' }}">
                        <div class="form-group">
                        <label for="complaint" class="col-md-4 control-label text-white">Complaint</label>
                        <div class="col-md-6">
                        <textarea name='complaint' cols='50' rows='10' id='complaint'></textarea>
                        </div>
                        </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Submit Complaint
                                </button>
                            </div>
                        </div>
                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>
@endsection
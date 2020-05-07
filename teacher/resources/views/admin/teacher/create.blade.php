@extends('layouts.app')

@section('title', 'New Booking')

@section('content')
    <fieldset>
        <legend>New teacher</legend>
        <form action="{{ route('addteacher.store') }}" method="post">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">name</label>
                        <input type="text" name="name" value="{{ old('name') }}" id="name" class="form-control" placeholder="" >
                      @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">email</label>
                      <input type="email" name="email" value="{{ old('email') }}" id="email" class="form-control" placeholder="" >
                      @error('email')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input type="phone" name="phone" value="{{ old('phone') }}" id="phone" class="form-control" placeholder="" >
                      @error('phone')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="password">password</label>
                      <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-control" placeholder="" >
                      @error('password')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="role">role</label>
                      <input type="text" name="role" value="{{ old('role') }}" id="role" class="form-control" placeholder="" >
                      @error('role')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="text" name="address" min="1" max="20" value="{{ old('address') }}" id="address" class="form-control" placeholder="" >
                      @error('address')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
            </div>
          

            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">Book now !</button>
            </div>
        </form>
    </fieldset>
@endsection
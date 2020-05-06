@extends('layouts.app')

@section('title', 'New Booking')

@section('content')
    <fieldset>
        <legend>New booking</legend>
        <form action="{{ url('admin/modif', $user->id) }}" method="GET">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="form-group">
                      <label for="name">name</label>
                        <input type="text" name="name" value="{{ old('name') ?? $user->name }}" id="name" class="form-control" placeholder="" >
                      @error('name')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="email">email</label>
                      <input type="email" name="email" value="{{ old('email') ?? $user->email }}" id="email" class="form-control" placeholder="" >
                      @error('email')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="phone">phone</label>
                      <input type="phone" name="phone" value="{{ old('phone') ?? $user->phone }}" id="phone" class="form-control" placeholder="" >
                      @error('phone')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="password">password</label>
                      <input type="password" name="password" value="{{ old('password') ?? $user->password }}" id="password" class="form-control" placeholder="" >
                      @error('password')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="role">role</label>
                      <input type="text" name="role" value="{{ old('role') ?? $user->role }}" id="role" class="form-control" placeholder="" >
                      @error('role')<div class="text-danger">{{ $message }}</div> @enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                      <label for="address">address</label>
                      <input type="text" name="address" min="1" max="20" value="{{ old('address') ?? $user->address }}" id="address" class="form-control" placeholder="" >
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
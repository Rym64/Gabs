@extends('layouts.app')

@section('title', 'Dashboard')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <center><h2> Welcome you are logged in !</h2></center></strong>
          <img src="\uploads\images\isetbizerte.jpg" style="width:700px;height:300px;padding-left:80px;">
<br><br>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

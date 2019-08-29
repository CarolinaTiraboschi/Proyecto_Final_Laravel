@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 pb-5">
           <img src="{{ URL::to('/images/profile_pic.jpg') }}" class="rounded-circle">
           <div><h1>Johanna</h1></div>
           <div class="pr-3 "> bio de sus cositas </div>
        </div>

        <div class="col-9">
          <div>

        </div>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

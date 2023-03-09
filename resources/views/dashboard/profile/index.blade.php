@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Profile</h3>
                    <hr>
                    <strong>Username</strong>
                    <input type="text" class="form-control" value="{{ $data->username }}" disabled>
                </div>
            </div>
        </div>
    </div>
@endsection();
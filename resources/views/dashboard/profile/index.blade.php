@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-5">
            <div class="card shadow">
                <div class="card-body">
                    <h3 class="text-center">Profile</h3>
                    <hr>
                    <div class="form-group mb-2">
                        <strong>Username</strong>
                        <input type="text" class="form-control" value="{{ $data->username }}" disabled>
                    </div>
                    <div class="form-group mb-2">
                        <strong>Role</strong>
                        <input type="text" value="{{ $data->role }}" class="form-control" disabled>
                    </div>
                    <hr>
                    <form action="/auth/logout" method="post">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center">Riwayat Pendaftaran</h4>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama</th>
                                <th>NIK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($vaksin as $v)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $v->nama_lengkap }}</td>
                                <td>{{ $v->nik }}</td>
                            </tr>

                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection();
@extends('templates.main')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-6">
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($account as $a)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $a->username }}</td>
                        <td>
                            <form action="{{ '/pemerintah/user-management/' . $a->id }}"  method="post">
                                @method('PUT')
                                @csrf
                                <select name="role" class="form-select" aria-label="Default select example" onchange="this.form.submit()">
                                    <option selected>{{ $a->role }}</option>
                                    <option value="warga">Warga</option>
                                    <option value="pemerintah">Pemerintah</option>
                                </select>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection()
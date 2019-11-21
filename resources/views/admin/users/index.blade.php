@extends('template/template')
@section('title', 'Users')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">User</h4>
                    </div>
                    <div class="btn-box">
                    <a href="{{ route('admin.user.tambah') }}" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Name</th>
                                <th>Kontrol</th>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->username }}</td>
                                    <td>{{ $user->password }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-success" href="{{ route('admin.user.edit', $user->id) }}">
                                            <i class="nc-icon nc-settings-tool-66"></i>
                                            Edit
                                        </a>
                                    <a class="control-icon alert-danger delete-btn" href="{{ route('admin.user.hapus', $user->id) }}">
                                            <i class="nc-icon nc-simple-remove"></i>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('js')
<script>
    $('.delete-btn').click(function(){
        var url = $(this).attr('href');
        $('#delete-form').attr('action', url);
    });
</script>

@endsection
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
                    <div class="card-body">
                        <div class="paket">
	                        @foreach($users as $user)
                            <form action="{{ route('admin.user.update') }}" method="POST">    
                                {{ csrf_field() }}
                                <div class="col-md-12">
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input required type="text" class="form-control" placeholder="" name="username" value="{{ $user -> username }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input type="password" class="form-control" placeholder="" name="password" value="{{ $user -> password }}">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-4 pr-1">
                                            <div class="form-group">
                                                <label>Name</label>
                                                <input type="text" class="form-control" placeholder="" name="name" value="{{ $user -> name }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="ml-3 control-icon btn-fill btn-info">
                                    Simpan
                                </button>
                                <div class="clearfix"></div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
@endsection
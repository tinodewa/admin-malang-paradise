@extends('template/template')
@section('title', 'Kategori')

@section('content')
<div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card striped-tabled-with-hover">
                    <div class="card-header ">
                        <h4 class="card-title">Kategori</h4>
                    </div>
                    <div class="btn-box">
                        <a href="" type="submit" class="btn btn-info btn-fill btn-tambah">Tambah Data</a>
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th class="w-50">Nama Kabupaten / Kota</th>
                                <th>Kontrol</th>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>12345</td>
                                    <td style="display:table-cell;">
                                        <a class="control-icon alert-success" href="">
                                            <i class="nc-icon nc-settings-tool-66"></i>
                                            Edit
                                        </a>
                                        <a class="control-icon alert-danger delete-btn" data-toggle="modal" data-target="#myModal2" href="" >                                                            <i class="nc-icon nc-simple-remove"></i>
                                        Delete
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- Mini Confirmation -->
<div class="modal fade modal-mini modal-primary" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
            </div>
            <div class="modal-body text-center">
                <p>Yakin hapus kabupaten / Kota  ini?</p>
            </div>
            <div class="modal-footer">
                <form action="#" id="delete-form" method="POST">
                    <button id="confirm-btn" class="btn btn-link btn-simple" style="cursor:pointer;">Hapus</button>
                </form>
                <button type="button" class="btn btn-link btn-simple" data-dismiss="modal">Batal</button>
            </div>
        </div>
    </div>
</div>
<!--  End Confirmation -->
@endsection

@section('js')
<script>
    $('.delete-btn').click(function(){
        var url = $(this).attr('href');
        $('#delete-form').attr('action', url);
    });
</script>

@endsection
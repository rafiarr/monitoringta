@extends('layout.khusus')

@section('title')
Pencarian Tugas Akhir
@endsection

@section('moreStyle')

@endsection

@section('content')
	@if ($errors->count()>0)
        <div class="alert alert-dismissable alert-danger" >
        	<button type="button" class="close fade" data-dismiss="alert">&times;</button>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif
    @if (Session::get('message'))
        <div class="alert alert-dismissable alert-success"> <!-- style="color:white; background-color: green; font-weight:bold; padding: 0.5em" -->
           <button type="button" class="close fade" data-dismiss="alert">&times;</button>
           {{Session::get('message')}}
        </div>
    @endif
	<div class="panel" style="margin-left: auto; margin-right: auto; padding : 30px;">
		<div class="judul-halaman">
            <h4><strong>Pencarian Tugas Akhir</strong></h4>
            <hr>
        </div>
        <div class="pencarian">
            <table id="tugasAkhir" class="table table-striped">
                <thead>
                    <tr class="row">
                        <th class="text-center">No</th>
                        <th class="text-center">ID</th>
                        <th class="text-center">Bidang</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">NRP</th>
                        <th class="text-center">Judul</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tugasAkhirs as $key => $tugasAkhir)
                        <tr class="row btn-link" data-toggle="modal" data-target="#modalDataTA">
                            <td>{{$key+1}}</td>
                            <td>{{$tugasAkhir->id_ta}}</td>
                            <td id="row-bidang">{{$tugasAkhir->bidang->nama_bidang}}</td>
                            <td id="row-status">{{$tugasAkhir->status->keterangan}}</td>
                            <td id="row-nrp">{{$tugasAkhir->user->username}}</td>
                            <td id="row-nama" style="display: none;">{{$tugasAkhir->user->nama}}</td>
                            
                            @if($tugasAkhir->dosbing1)
                                <td id="row-pembimbing1" style="display: none;">{{$tugasAkhir->dosbing1->nama_lengkap}}</td>
                            @else
                                <td id="row-pembimbing1" style="display: none;">-</td>
                            @endif
                            
                            @if($tugasAkhir->dosbing2)
                                <td id="row-pembimbing2" style="display: none;">{{$tugasAkhir->dosbing2->nama_lengkap}}</td>
                            @else
                                <td id="row-pembimbing2" style="display: none;">-</td>
                            @endif

                            <td id="row-judul">{{$tugasAkhir->judul}}</td>
                        </tr> 
                    @endforeach
                    <!-- <tr class="row btn-link" data-toggle="modal" data-target="#cobaModal">
                        <td>1</td>
                        <td>1</td>
                        <td id="row-bidang">Metalurgi</td>
                        <td id="row-status">Mengajukan Judul</td>
                        <td id="row-nrp">5114100109</td>
                        <td id="row-nama" style="display: none;">Nafiar Rahmansyah</td>
                        <td id="row-pembimbing1" style="display: none;">Pembimbing 1</td>
                        <td id="row-pembimbing2" style="display: none;">Pembimbing 2</td>
                        <td id="row-judul">Rancang Bangun Simulasi Tertib Lalu Lintas Sesuai Dengan Peraturan Pemerintah Nomor 79 Tahun 2013 Menggunakan Steering Wheel dan Oculus Rift</td>
                    </tr> -->
                </tbody>
            </table>
        </div>
	</div>
    <div class="modal fade" id="modalDataTA">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #24292e; padding-left: 20px;">
                    <button type="button" class="close" data-dismiss="modal" style="color: #ffffff;">&times;</button>
                    <h4 class="modal-title" style="color: #ffffff;"> Detail Tugas Akhir Mahasiswa</h4>
                </div>
                <div class="modal-body panel panel-body" style="margin-bottom: 0px; padding: 20px;">
                    
                    <div class="row" style="margin-bottom: 15px;">
                        <h6 class="col-md-3">NRP</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-nrp"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="col-md-3">Nama</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-nama"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="col-md-3">Judul</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-judul"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="col-md-3">Pembimbing 1</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-pembimbing1"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="col-md-3">Pembimbing 2</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-pembimbing2"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="col-md-3">Bidang</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-bidang"></h6>
                        </div>
                    </div>
                    <div class="row">
                        <h6 class="col-md-3">Status</h6>
                        <div class="col-md-1" style="text-align: right;">
                            <h6>: </h6>
                        </div>
                        <div class="col-md-8">
                            <h6 id="modal-status"></h6>
                        </div>
                    </div>
                    <hr style="border-top: 1px solid #24292e;">
                    <div class="row">
                        <button class="btn btn-default pull-right" data-dismiss="modal" style="margin-right: 10px;">close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('moreScript')
<script type="text/javascript">
    $(document).ready(function(){
        $('.btn-link').click(function(){
            var nrp = $(this).find('#row-nrp').text();
            var nama = $(this).find('#row-nama').text();
            var judul = $(this).find('#row-judul').text();
            var pembimbing1 = $(this).find('#row-pembimbing1').text();
            var pembimbing2 = $(this).find('#row-pembimbing2').text();
            var bidang = $(this).find('#row-bidang').text();
            var status = $(this).find('#row-status').text();
            console.log(pembimbing1);
            $('#modal-nrp').text(nrp);
            $('#modal-nama').text(nama);
            $('#modal-judul').text(judul);
            $('#modal-pembimbing1').text(pembimbing1);
            $('#modal-pembimbing2').text(pembimbing2);
            $('#modal-bidang').text(bidang);
            $('#modal-status').text(status);
        });
    });
</script>
@endsection


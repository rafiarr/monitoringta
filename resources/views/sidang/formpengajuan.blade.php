@extends('layout.main')

@section('title')
    Form Pengajuan Jadwal Sidang
@endsection

@section('moreStyle')
<link rel="stylesheet" type="text/css" href="{{asset('css/sweetalert.css')}}">
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
        <div class="alert alert-dismissable alert-success">
           <button type="button" class="close fade" data-dismiss="alert">&times;</button>
           {{Session::get('message')}}
        </div>
    @endif
	<div class="panel" style="margin-left: auto; margin-right: auto; padding : 30px;">
		<div class="judul-halaman">
            <h4><strong>Form Pengajuan Jadwal Sidang</strong></h4>
            <hr>
        </div>
        <div class="">
            <div class="">
                <h6>Berikut merupakan daftar TA yang sudah mendaftar pada hari {{$hari}} tanggal {{$jadwal->tanggal}} sesi {{$jadwal->sesi}} :</h6>
            </div>
            <div class="">
                <table class="table table-striped">
                    <thead>
                        <th>No</th>
                        <th class="col-md-1">NRP</th>
                        <th class="col-md-1">Nama</th>
                        <th class="col-md-8">Judul TA</th>
                        <th class="col-md-2">Waktu Pengajuan</th>
                    </thead>
                    <tbody>
                        @if($ujians)
                            @foreach($ujians as $keys => $ujian)
                                @if($keys < 3)
                                    <tr class="warning">
                                @else
                                    <tr>
                                @endif
                                    <td>{{$keys+1}}</td>
                                    <td>{{$ujian->tugasAkhir->user->username}}</td>
                                    <td>{{$ujian->tugasAkhir->user->nama}}</td>
                                    <td>{{$ujian->tugasAkhir->judul}}</td>
                                    <td>{{$ujian->created_at}}</td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <hr style="">
            <div class="">
                <form id="pengajuanJadwal" method="POST" class="form-horizontal" action="{{url('/pengajuanujian')}}">
                    <h6>Apakah anda yakin ingin mengajukan jadwal sidang TA pada jadwal ini</h6>
                    <input type="text" name="idJadwal" style="display: none;" value="{{$jadwal->id_ju}}">
                    <div class="pull-right">
                        {{csrf_field()}}
                        {{method_field('POST')}}
                        <a href="{{url('/pengajuanujian')}}" class="btn btn-default" style="margin: 0px 10px;">Kembali</a>
                        @if($ujianTA)
                        @else 
                            <a href="#" class="btn btn-primary" style="margin: 0px 10px;"><i class="glyphicon glyphicon-plus"></i> Ajukan Jadwal</a>
                        @endif
                    </div>
                </form>
            </div>
            <br>
        </div>
	</div>	
@endsection

@section('moreScript')
<script type="text/javascript" src="{{asset('js/sweetalert.min.js')}}"></script>
<script type="text/javascript">
    $(document).on('click', '.btn-primary', function(){
        swal({
            title: "Perhatian",
            text: "Apakah anda yakin ingin mengajukan jadwal sidang pada jadwal ini ?",
            type: "warning",
            showCancelButton: true,
            confirmButtonText: "Ya",
            cancelButtonText: "Batal"
        },
        function(){
            $('#pengajuanJadwal').submit();
        });
    });
</script>
@endsection


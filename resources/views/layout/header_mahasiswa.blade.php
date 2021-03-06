<div class="navbar navbar-inverse navbar-fixed-top" style="background-color: #24292e;">
    <div class="container">
        <div class="navbar-header">
            <a href="{{url('/')}}" class="navbar-brand web-logo" > SistemInformasi<strong>TA</strong></a>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-main">
            <ul class="nav navbar-nav navbar-right">
                
                <li><a href="{{url('/pengajuan/create')}}"><i class="glyphicon glyphicon-plus-sign"></i> Pengajuan TA </a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-blackboard"></i> Seminar TA </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/seminarjadwal')}}"><i class="glyphicon glyphicon-list-alt"></i> Jadwal Seminar</a></li>
                        <li><a href="{{url('/pengajuanseminar')}}"><i class="glyphicon glyphicon-calendar"></i> Pengajuan Jadwal Seminar</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-book"></i> Sidang TA </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/ujianjadwal')}}"><i class="glyphicon glyphicon-list-alt"></i> Jadwal Sidang</a></li>
                        <li><a href="{{url('/pengajuanujian')}}"><i class="glyphicon glyphicon-calendar"></i> Pengajuan Jadwal Sidang</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-folder-close"></i> Progres TA </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('/progres')}}"><i class="glyphicon glyphicon-list"></i> Status TA</a></li>
                        <li><a href="{{url('/detailta')}}"><i class="glyphicon glyphicon-list-alt"></i> Detail Progres TA</a></li>
                    </ul>
                </li>
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> {{session('user')['username']}} </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{url('gantipassword')}}"><i class=" glyphicon glyphicon-cog"></i> Ganti Password</a></li>
                        <li><a href="{{url('logout')}}"><i class="glyphicon glyphicon-log-out"></i> Log Out</a></li>
                    </ul>
                </li>            
            </ul>
        </div>
    </div>
</div>
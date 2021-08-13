@extends('layouts.app', [
    'namePage' => 'Absensi',
    'class' => 'login-page sidebar-mini ',
    'activePage' => '',
])
@extends('layouts.lyout')

@section('content')
  <div class="panel-header panel-header-sm">
  </div>
  <div class="content">
    <div class="row">
    <div class="card">
                <div class="card-header" style="font-size:18px">Absen Pegawai</div>
 
                <div class="card-body">
                    <form action="{{route('absensi')}}"  method="post">
                        @csrf

                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                        </div>
                        <!-- <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                        </div> -->
                        <div class="form-group">
                            <label>Fullname</label>
                            <input type="text" class="form-control" name="fullname" value="{{ old('fullname') }}">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="img" class="form-control" name="dob" value="{{ old('dob') }}">
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-primary" style="background-color:#035397">Simpan</button>
                        </div>

                      
 
                    </form>
                </div>
        </div>
    </div>

   
@endsection
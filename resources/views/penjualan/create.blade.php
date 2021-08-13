@extends('layouts.app', [
    'namePage' => 'Penjualan',
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
                <div class="card-header" style="font-size:18px">Penjualan</div>
 
                <div class="card-body">
                    <form action="{{route('penjualan.index')}}"  method="post">
                        @csrf

                        <div class="form-group">
                            <label>Id Customer</label>
                            <input type="text" class="form-control" name="id_customer" value="{{ old('id_customer') }}">
                        </div>
                        <div class="form-group">
                            <label>No Transaksi</label>
                            <input type="text" class="form-control" name="no_transaksi" value="{{ old('no_transaksi') }}">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tgl_transaksi" style="height:38px; margin-bottom:10px;" value="{{ old('tgl_transaksi') }}">
                        </div>
                        <div class="form-group">
                            <label>Diskon</label>
                            <input type="text" class="form-control" name="diskon" value="{{ old('diskon') }}">
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="text" class="form-control" name="total_harga_seluruhnya" value="{{ old('total_harga_seluruhnya') }}">
                        </div>
                       
                        <div class="form-group">
                            <button class="btn btn-primary" style="background-color:#035397">Simpan</button>
                        </div>

                       
             
               
           
             
 
                    </form>
                </div>
        </div>
    </div>

   
@endsection
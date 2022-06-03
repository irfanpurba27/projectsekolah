@extends('layouts.admin')
@section('content')
<style>
  .box{
    width: 20px;
  }
</style>
<div class="row" style="margin-left:20px;margin-right:20px">
  <div class="card-body" style="backgorund:white" style="">
    <form action="{{ url('admin') }}" method="GET">
      <div class="input-group">
        <div class="form-floating">
          <input type="text" class="form-control" name="cari" required value="{{ $request->cari }}" placeholder="cari nama...." style="width: 200px;float:left;height:55px">
          <label for="floating-select" style="color: gray">cari nama</label>
               <br><br>
        </div>  
        <div class="form-floating">
        <select class="form-select" name="kompetensi" style="width: 200px;height:55px" required aria-label="Default select example">
            <option>{{ $request->kompetensi }}</option>
            <option>X-RPL</option>
            <option>X-MM</option>
            <option>X-BKP</option>
            <option>X-TKRO</option>
            <option>X-TB</option>
            <option>XI-RPL</option>
            <option>XI-MM</option>
            <option>XI-BKP</option>
            <option>XI-TKRO</option>
            <option>XI-TB</option>
            <option>XII-RPL</option>
            <option>XII-MM</option>
            <option>XII-BKP</option>
            <option>XII-TKRO</option>
            <option>XII-TB</option>
        </select>
        <label for="floatingselect">Kelas</label>
    </div>
      <button type="submit" class="btn btn-primary" style="margin-left:10px" value=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
      </svg></button>
    </div>
    </form>
  </div>
    @forelse($siswa as $siswa)
    <div class="col-xl-3 col-md-6" style="margin-top: 10px">
        <div class="card bg-primary text-white mb-4">
            <div class="card" style="">
              <a type="button" class="btn" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$siswa->id }}_profile">
                <img src="{{asset($siswa->id_user)}}/{{$siswa->file}}" style="height:180px" class="img-thumbnail rounded" alt="...">
              </a>
              <div class="modal fade" id="{{ 'modal'.$siswa->id }}_profile" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <img src="{{asset($siswa->id_user)}}/{{$siswa->file}}"class="img-thumbnail rounded" alt="...">
                </div>
              </div>                <div class="card-body">
                    <div class="card-header text-black">{{ $siswa->nama }} {{ $siswa->kompetensi }}</div>
                    <div class="btn-group" style="float:right"> 
                      <li><a class="dropdown-item" style="border: 1px solid"  href="{{ route('siswa.lihat',$siswa->id) }}">View <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
                      </svg></a></li>                   
                  </div>
                </div>
            </div>
        </div>
    </div>
    @empty
    <center>
      <div class="card">Tidak ada nama</div>
    </center>
    @endforelse
    
</div>

  


@include('sweetalert::alert') 
@endsection
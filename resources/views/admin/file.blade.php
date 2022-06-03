@extends('layouts.admin2')
@section('content')
<style >
  .box{
    width: 1000px
  }
</style>
<center>
    <div class="box">
      <div class="card" style="border:none">
        <div class="accordion-body">
            <div class="row g-0">
                <div class="col-md-4" style="text-align: right">
                  <img src="{{asset($siswa->id_user)}}/{{$siswa->file}}"  style="width: 300px" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="card-header" style="text-align: left">{{ $siswa->nama }}</div><br>
                    <div class="card-header" style="text-align: left">{{ $siswa->kompetensi }}</div><br>
                    @foreach($akta as $akta)
                    <img src="{{asset($akta->id_user)}}/{{$akta->file}}" class="rounded float-start" alt="...">
                    @endforeach
                  </div>
                </div>
              </div>
                </div>
            </div>

           
        </div>
    </center>
    @include('sweetalert::alert')   

@endsection
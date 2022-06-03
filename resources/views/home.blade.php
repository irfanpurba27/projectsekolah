@extends('layouts.app')


@section('content')
<div class="w3l-signinform">
    <div class="wrapper">
<div class="container" >
  <div class="row justify-content-center">
        <div class="col-md-8">

                
                    <div class="row g-0 card-body">
                      <div class="col-md-4">
                          @foreach($foto as $f)
                        <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">@endforeach
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                             @foreach ($siswa as $u) 
                                <h5 class="card-title">{{ $u->nama }} {{ $u->kompetensi }}</h5>
                                <p class="card-text"></p>
                                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                             @endforeach 
                        </div>
                    </div>
                    </div>
                    
                 
                
          
                
                    <div class="input-group">
                        <div class="accordion accordion-flush form-control" id="accordionFlushExample" >
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed form-control" type="button" data-bs-toggle="collapse" data-bs-target="#datasiswa" aria-expanded="false" aria-controls="flush-collapseOne">
                                  Data diri
                                </button>
                              </h2>
                            </div>
                        </div>                    
                        <div class="accordion accordion-flush form-control"   id="accordionFlushExample" >
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed form-control" type="button" data-bs-toggle="collapse" data-bs-target="#file" aria-expanded="false" aria-controls="flush-collapseOne">
                                  File
                                </button>
                              </h2>
                            </div>
                        </div>                    
                    </div>

            @if ($errors->any())
                <div class="alert alert-danger">
                    
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                

          <div  class="collapse" id="datasiswa"> 
            <div class="card" style="border:none">
                <div class="card-body" >

                {{-- Data siswa --}}
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="flush-collapseOne">
                          Data saya
                        </button>
                      </h2>
                    </div>
                </div>
                      <div class="collapse" id="collapseExample">
                        <div class="card card-body">    
                            
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">     Nama Saya </p>
                                        <p class="form-control" style="border:none;">   :  @foreach($user as $u) {{ $u->name }} @endforeach </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">     Email</p>
                                        <p class="form-control" style="border:none;">   :   @foreach($user as $u) {{ $u->email }} @endforeach </p>
                                   </div>
                            @foreach($siswa as $s)       
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    NIK</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->nik }} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Kelas</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->kompetensi }} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Tempat/tanggal lahir</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->tempat_lahir }},  {{ $s->tgl_lahir }}</p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Jenis Kelamin</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->jenis_kelamin }} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Tinggi Badan</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->tinggi_badan}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Berat Badan</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->berat_badan}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Alamat</p>
                                        <p class="form-control" style="border:none;">   : kel:{{ $s->kelurahan}}, kec:{{ $s->kecamatan }}, kota/kab:{{ $s->kota }}, prov{{ $s->provinsi }} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Kode Pos</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->kode_pos}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    No Telepon</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->no_telepon}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Agama</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->agama}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Suku</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->suku}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Anak Ke</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->anak_ke}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Jumlah saudara</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->jumlah_saudara}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    No KPS</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->no_kps}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Asal Sekolah</p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Sekolah Asal</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->asal_sekolah}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    No Telepon sekolah</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->no_telepon_sekolah}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Kota asal sekolah</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->kota_sekolah}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    Tahun Lulus</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->tahun_lulus}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    No Ijazah</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->no_ijazah}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    No SKHUN</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->no_skhun}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    NISN</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->nisn}} </p>
                                   </div>
                                    <div class="input-group">
                                        <p class="form-control" style="border:none;">    No KIS non mandiri</p>
                                        <p class="form-control" style="border:none;">   : {{ $s->nisn}} </p>
                                   </div>
                                    @endforeach
                                   <div class="card-body">
                                    <button style="float:right; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="@foreach($siswa as $s)#{{ 'modal'.$s->id_user }}@endforeach">edit data</button>
                                        <button style="float:right;margin-right:5px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#datasaya">Tambah Data</button>
                                   </div>
                                  
                            {{-- modal tambah data saya --}}
                            <div class="modal fade" id="datasaya" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Data Saya</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                      
                                        <form action="{{ url('home/create') }}" method="post">
                                            {{ csrf_field() }}
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="nama" value="@foreach($user as $u){{ $u->name }} @endforeach" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                    <label for="floatingselect">Nama anda</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="email" value="@foreach($user as $u){{ $u->email }} @endforeach" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                    <label for="floatingselect">email</label>
                                                </div>                                           
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                    <label for="floatingselect">NIK</label>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                            <select class="form-select" name="kompetensi" aria-label="Default select example">
                                                <option disabled>Kelas</option>
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
                                        </div><br>
                                            <div class="input-group ">
                                                <div class="form-floating">
                                                    <input type="text" style="width: 200px" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                    <label for="floatingselect">Tempat lahir</label>
                                                </div>
                                                <div class="form-floating">
                                                    <input type="date" name="tgl_lahir"  class="form-control">
                                                    <label for="floatingselect"> tanggal lahir</label>
                                                </div>
                                            </div><br>
                                            <div class="form-floating">
                                            <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                                <option>Laki-laki</option>
                                                <option>Perempuan</option>
                                            </select>
                                            <label for="floatingselect">Jenis kelamin</label>
                                             </div><br>
                                            
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="number" name="tinggi_badan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                    <label for="floatingselect">Tinggi badan</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="number" name="berat_badan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                    <label for="floatingselect">Berat badan</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="kelurahan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                    <label for="floatingselect">Kelurahan</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="kecamatan" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                    <label for="floatingselect">kecamatan</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="kota" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                    <label for="floatingselect">Kota/kab</label>
                                                </div>
                                            </div>
                                            <div class="form-floating">
                                            <select class="form-select" name="provinsi" aria-label="Default select example">
                                                <option disabled>Provinsi</option>
                                                <option>Nanggroe Aceh Darussalam</option>
                                                <option>Sumatera Barat</option>
                                                <option>Sumatera Utara</option>
                                                <option>Sumatera Selatan</option>
                                                <option>Lampung</option>
                                                <option>Riau</option>
                                                <option>Kepulauan Riau</option>
                                                <option>Jambi</option>
                                                <option>Kepulauan Bangka Belitung</option>
                                                <option>Bengkulu</option>
                                                <option>DKI Jakarta</option>
                                                <option>Banten</option>
                                                <option>Jawa Barat</option>
                                                <option>Jawa Tengah</option>
                                                <option>Jawa Timur</option>
                                                <option>Daerah Istimewa Yogyakarta</option>
                                                <option>Bali</option>
                                                <option>Nusa Tenggara Barat</option>
                                                <option>Nusa Tenggara Timur</option>
                                                <option>Kalimantan Barat</option>
                                                <option>Kalimantan Selatan</option>
                                                <option>Kalimantan Tengah</option>
                                                <option>Kalimantan Timur</option>
                                                <option>Kalimantan Utara</option>
                                                <option>Sulawesi Barat</option>
                                                <option>Sulawesi Tenggara</option>
                                                <option>Sulawesi Selatan</option>
                                                <option>Sulawesi Tengah</option>
                                                <option>Sulawesi Utara</option>
                                                <option>Gorontalo</option>
                                                <option>Maluku</option>
                                                <option>Maluku Utara</option>
                                                <option>Papua</option>
                                                <option>Papua Barat</option>
                                            </select><label for="floatingselect">Provinsi</label>
                                         </div><br>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="number" name="kode_pos" class="form-control" id="exampleFormControlInput1" placeholder="kode pos">
                                                    <label for="floatingselect">Kode Pos</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">    
                                                    <input type="text" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                    <label for="floatingselect">No Telepon</label>
                                                </div>
                                            </div>
                                            <div  class="form-floating">
                                            <select class="form-select" name="agama" aria-label="Default select example">
                                                <option>Islam</option>
                                                <option>Kristen</option>
                                                <option>Katholik</option>
                                                <option>Budha</option>
                                                <option>Konghucu</option>
                                              </select>
                                              <label for="floatingselect">Agama</label>
                                            </div><br>
                                            <div class="mb-3">
                                                <div  class="form-floating">
                                                    <input type="text" name="suku" class="form-control" id="exampleFormControlInput1" placeholder="suku">
                                                    <label for="floatingselect">Suku</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="anak_ke" class="form-control" id="exampleFormControlInput1" placeholder="anak ke">
                                                    <label for="floatingselect">Anak ke</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="jumlah_saudara" class="form-control" id="exampleFormControlInput1" placeholder="jumlah saudara">
                                                    <label for="floatingselect">Jumlah saudara</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="no_kps" class="form-control" id="exampleFormControlInput1" placeholder="no kps">
                                                    <label for="floatingselect">No KPS</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="asal_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="sekolah asal">
                                                    <label for="floatingselect">Sekolah asal</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="no_telepon_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="no telepon sekolah">
                                                    <label for="foatingselect">No telepon sekolah asal</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="kota_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="kota asal sekolah">
                                                    <label for="floatingselect">Kota sekolah asal</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                    <label for="floatingselect">Tahun lulus</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="no_ijazah" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                    <label for="floatingselect">No ijazah</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="no_skhun" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                    <label for="floatingselect">No SKHUN</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="nisn" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                    <label for="floatingselect">NISN</label>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="no_kis" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                    <label for="floatingselect">No KIS</label>
                                                </div>
                                            </div>
                                                
                                    </div>
                                    <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                    </form>
                                    </div>
                                  </div>
                                </div>
                            </div> 


                              {{-- edit data saya --}}
                              @foreach($siswa as $s)
                              <div class="modal fade" id="{{ 'modal'.$s->id_user }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel"> Edit data saya</h5>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body"> 
                                            <form action="{{ route('siswa.update') }}" method="post">
                                                {{ csrf_field() }}
                                                <div class="mb-3">
                                                    Nama : 
                                                    <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                </div>
                                                <div class="mb-3">
                                                    Email : 
                                                    <input type="email" name="email"  value="{{ $s->email }}"class="form-control" id="exampleFormControlInput1" placeholder="email">
                                                </div>
                                                
                                                <div class="mb-3">
                                                    Nik :
                                                    <input type="number" value="{{ $s->nik }}" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                </div>
                                                Kelas : 
                                                <select class="form-select" name="kompetensi" aria-label="Default select example">
                                                    <option>{{ $s->kompetensi }}</option>
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
                                                </select><br>
                                                Tempat/tanggal lahir :
                                                <div class="input-group">
                                                    <input type="text" value="{{ $s->tempat_lahir }}" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                    <input type="date" value="{{ $s->tgl_lahir }}" name="tgl_lahir"  class="form-control">
                                                </div><br>
                                                Jenis Kelamin : 
                                                <select class="form-select" name="jenis_kelamin" aria-label="Default select example">
                                                    <option>{{ $s->jenis_kelamin }}</option>
                                                    <option>Laki-laki</option>
                                                    <option>Perempuan</option>
                                                </select><br>
                                                Tinggi dan berat badan
                                                <div class="input-group">
                                                    <input type="number" value="{{ $s->tinggi_badan }}" name="tinggi_badan" class="form-control" placeholder="Tinggi badan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <span class="input-group-text" id="basic-addon2">CM</span>
                                                    <input type="number" value="{{ $s->berat_badan }}" name="berat_badan" class="form-control" placeholder="Berat badan" aria-label="Recipient's username" aria-describedby="basic-addon2">
                                                    <span class="input-group-text" id="basic-addon2">KG</span>
                                                </div><br>
                            
                                                <div class="mb-3">
                                                    <p class="form-control">Alamat Asal</p>
                                                </div>
                                                kelurahan dan kecamatan
                                                <div class="input-group">
                                                    <input type="text" value="{{ $s->kelurahan }}" name="kelurahan" placeholder="kelurahan" aria-label="First name" class="form-control">
                                                    <input type="text" value="{{ $s->kecamatan }}" name="kecamatan"  placeholder="kecamatan" class="form-control">
                                                </div><br>
                                                Kota Asal : 
                                                <div class="mb-3">
                                                    <input type="text" value="{{ $s->kota }}" name="kota" class="form-control" id="exampleFormControlInput1" placeholder="kota/kab">
                                                </div>
                                                Provinsi Asal : 
                                                <select class="form-select" name="provinsi" aria-label="Default select example">
                                                    <option>{{ $s->provinsi }}</option>
                                                    <option>Nanggroe Aceh Darussalam</option>
                                                    <option>Sumatera Barat</option>
                                                    <option>Sumatera Utara</option>
                                                    <option>Sumatera Selatan</option>
                                                    <option>Lampung</option>
                                                    <option>Riau</option>
                                                    <option>Kepulauan Riau</option>
                                                    <option>Jambi</option>
                                                    <option>Kepulauan Bangka Belitung</option>
                                                    <option>Bengkulu</option>
                                                    <option>DKI Jakarta</option>
                                                    <option>Banten</option>
                                                    <option>Jawa Barat</option>
                                                    <option>Jawa Tengah</option>
                                                    <option>Jawa Timur</option>
                                                    <option>Daerah Istimewa Yogyakarta</option>
                                                    <option>Bali</option>
                                                    <option>Nusa Tenggara Barat</option>
                                                    <option>Nusa Tenggara Timur</option>
                                                    <option>Kalimantan Barat</option>
                                                    <option>Kalimantan Selatan</option>
                                                    <option>Kalimantan Tengah</option>
                                                    <option>Kalimantan Timur</option>
                                                    <option>Kalimantan Utara</option>
                                                    <option>Sulawesi Barat</option>
                                                    <option>Sulawesi Tenggara</option>
                                                    <option>Sulawesi Selatan</option>
                                                    <option>Sulawesi Tengah</option>
                                                    <option>Sulawesi Utara</option>
                                                    <option>Gorontalo</option>
                                                    <option>Maluku</option>
                                                    <option>Maluku Utara</option>
                                                    <option>Papua</option>
                                                    <option>Papua Bara</option>
                                                </select><br>
                                                <div class="mb-3">
                                                    Kode Pos : 
                                                    <input type="text" value="{{ $s->kode_pos }}" name="kode_pos" class="form-control" id="exampleFormControlInput1" placeholder="kode pos">
                                                </div>
                                                <div class="mb-3">
                                                    No Telepon : 
                                                    <input type="text" value="{{ $s->no_telepon }}" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                </div>
                                                <select class="form-select" name="agama" aria-label="Default select example">
                                                    <option>{{ $s->agama }}</option>
                                                    <option>Islam</option>
                                                    <option>Kristen</option>
                                                    <option>Katholik</option>
                                                    <option>Budha</option>
                                                    <option>Konghucu</option>
                                                  </select><br>
                                                <div class="mb-3">
                                                    Suku :
                                                    <input type="text" value="{{ $s->suku }}" name="suku" class="form-control" id="exampleFormControlInput1" placeholder="suku">
                                                </div>
                                                <div class="mb-3">
                                                    Anak Ke :
                                                    <input type="text" value="{{ $s->anak_ke }}" name="anak_ke" class="form-control" id="exampleFormControlInput1" placeholder="anak ke">
                                                </div>
                                                <div class="mb-3">
                                                    Jumlah Saudara
                                                    <input type="text" value="{{ $s->jumlah_saudara }}" name="jumlah_saudara" class="form-control" id="exampleFormControlInput1" placeholder="jumlah saudara">
                                                </div>
                                                <div class="mb-3">
                                                    No KPS
                                                    <input type="text" value="{{ $s->no_kps }}" name="no_kps" class="form-control" id="exampleFormControlInput1" placeholder="no kps">
                                                </div>
                                                <div class="mb-3">
                                                    Sekolah Asal
                                                    <input type="text" value="{{ $s->asal_sekolah }}" name="asal_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="sekolah asal">
                                                </div>
                                                <div class="mb-3">
                                                    No Telepon Sekolah :
                                                    <input type="text" value="{{ $s->no_telepon_sekolah }}" name="no_telepon_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="no telepon sekolah">
                                                </div>
                                                <div class="mb-3">
                                                    Kota Asal Sekolah
                                                    <input type="text" value="{{ $s->kota_sekolah }}" name="kota_sekolah" class="form-control" id="exampleFormControlInput1" placeholder="kota asal sekolah">
                                                </div>
                                                <div class="mb-3">
                                                    Tahun Lulus : 
                                                    <input type="text" value="{{ $s->tahun_lulus }}" name="tahun_lulus" class="form-control" id="exampleFormControlInput1" placeholder="tahun lulus">
                                                </div>
                                                <div class="mb-3">
                                                    No Ijazah :
                                                    <input type="text"  value="{{ $s->no_ijazah }}" name="no_ijazah" class="form-control" id="exampleFormControlInput1" placeholder="no ijazah">
                                                </div>
                                                <div class="mb-3">
                                                    No SKHUN :
                                                    <input type="text" value="{{ $s->no_skhun }}" name="no_skhun" class="form-control" id="exampleFormControlInput1" placeholder="no SKHUN">
                                                </div>
                                                <div class="mb-3">
                                                    NISN : 
                                                    <input type="text" value="{{ $s->no_skhun }}" name="nisn" class="form-control" id="exampleFormControlInput1" placeholder="NISN">
                                                </div>
                                                <div class="mb-3">
                                                    No KIS :
                                                    <input type="text" value="{{ $s->no_kis }}" name="no_kis" class="form-control" id="exampleFormControlInput1" placeholder="KIS Non Mandiri">
                                                </div>     
                                                 
                                            </div>
                                        <div class="modal-footer">
                                      <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                                    </div>
                                    </div>
                                  </div>
                                </div>@endforeach
                              </div>
                             </div><br>
    
                             
                             {{-- Data ayah --}}
                             <div class="accordion accordion-flush" id="accordionFlushExample">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ayah" aria-expanded="false" aria-controls="flush-collapseOne">
                                      Data ayah
                                    </button>
                                  </h2>
                                </div>
                            </div>                             <div class="collapse" id="ayah">
                                <div class="card card-body">    
                                    @foreach($ayah as $s)
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Nama Ayah</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->nama }} </p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    NIK</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->nik }} </p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    No Telepon</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->no_telepon }} </p>
                                           </div>
                                           <div class="input-group">
                                            <p class="form-control" style="border:none;">    Agama</p>
                                            <p class="form-control" style="border:none;">   : {{ $s->agama }} </p>
                                       </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Tempat/tanggal lahir</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->tempat_lahir }},  {{ $s->tgl_lahir }}</p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Pendidikan</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->pendidikan }}</p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Pekerjaan</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->pekerjaan }}</p>
                                           </div>
                                           <div class="input-group">
                                            <p class="form-control" style="border:none;">    Penghasilan</p>
                                            <p class="form-control" style="border:none;">   : {{ $s->penghasilan}}</p>
                                       </div>
                                       @endforeach
                                           <div class="card-body">
                                            <button style="float:right; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#@foreach($ayah as $s){{ 'modal'.$s->id_user }}_ayah @endforeach">edit data</button>
                                                <button style="float:right;margin-right:5px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dataayah">Tambah Data</button>
                                           </div>
        
                                    {{-- modal tambah data ayah --}}
                                    <div class="modal fade" id="dataayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Data Ayah</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              
                                                <form action="{{ url('ayah/create') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                            <label for="form-floating">Nama ayah</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                            <label for="floatingselect">NIK</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-floating">
                                                            <input type="text" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                            <label for="floatingselect">Tempat lahir</label>
                                                        </div>
                                                        <div class="form-floating">
                                                            <input type="date" name="tgl_lahir"  class="form-control">
                                                            <label for="floatingselect">Tanggal lahir</label>
                                                        </div>
                                                    </div><br>
                                                    <div class="imb-3">
                                                        <div class="form-floating">
                                                            <input type="number" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                            <label for="floatingselect">No telepon</label>
                                                        </div>
                                                    </div><br>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="agama" aria-label="Default select example">
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katholik</option>
                                                        <option>Budha</option>
                                                        <option>Konghucu</option>
                                                      </select>
                                                      <label for="floatingselect">Agama</label>
                                                    </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                        <option>SD</option>
                                                        <option>SMP</option>
                                                        <option>SMA</option>
                                                        <option>S1</option>
                                                        <option>S2</option>
                                                        <option>Tidak bersekolah</option>
                                                      </select>
                                                      <label for="floatingselect">Pendidikan</label>
                                                    </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                        <option>PNS</option>                                                
                                                        <option>Petani</option>                                                
                                                        <option>Pedagang</option>                                                
                                                        <option>Nelayan</option>                                                
                                                        <option>Buruh</option>                                                
                                                        <option>Pegawai Swasta</option>                                                
                                                        <option>Rohaniawan</option>                                                
                                                        <option>Polisi/tentara</option>                                                
                                                        <option>Guru/Pendidikan</option>                                                
                                                        <option>Serabutan</option>                                                
                                                        <option>Supir</option>                                                
                                                        <option>Tenaga kesehatan</option>                                                
                                                        <option>Tidak bekerja</option>                                                
                                                      </select>
                                                      <label for="floatingselect">Pekerjaan</label>
                                                    </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                        <option>Tidak berpenghasilan</option>
                                                        <option>kurang dari Rp1.000.000,00</option>
                                                        <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                        <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                        <option>Lebih dari Rp3.000.000,00</option>                                                
                                                      </select>
                                                      <label for="floatingselect">Penghasilan</label>
                                                    </div><br>
            
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                    </div> 
        
        
                                      {{-- edit data ayah --}}
                                      @foreach($ayah as $s)
                                      <div class="modal fade" id="{{ 'modal'.$s->id_user }}_ayah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel"> Edit data ayah</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body"> 
                                                    <form action="{{ route('ayah.update') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="mb-3"> 
                                                            <div class="form-floating">
                                                                <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                                <label for="floatingselect">Nama ayah</label>
                                                            </div>
                                                        </div>
                                                        <div class="mb-3">
                                                            <div class="form-floating">
                                                                <input type="number" value="{{ $s->nik }}" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                                <label for="floatingselect">NIK</label>
                                                            </div>      
                                                        </div>
                                                        
                                                        <div class="input-group">
                                                            <div class="form-floating">
                                                                <input type="text" value="{{ $s->tempat_lahir }}" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                                <label for="floatingselect">Tempat lahir</label>
                                                            </div>
                                                            <div class="form-floating">
                                                                <input type="date" value="{{ $s->tgl_lahir }}" name="tgl_lahir"  class="form-control">
                                                                <label for="floatingselect">Tanggal lahir</label>
                                                            </div>        
                                                        </div><br>                                
                                                        <div class="mb-3">
                                                            <div class="form-floating">
                                                                <input type="text" value="{{ $s->no_telepon }}" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                                <label for="floatingselct">No telepon</label>
                                                            </div>
                                                            </div>
                                                        <div class="form-floating">
                                                        <select class="form-select" name="agama" aria-label="Default select example">
                                                            <option>{{ $s->agama }}</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katholik</option>
                                                            <option>Budha</option>
                                                            <option>Hindu</option>
                                                            <option>Konghucu</option>
                                                          </select>
                                                          <label for="floatingselect">Agama</label>
                                                        </div><br>
                                                          <div class="form-floating">
                                                        <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                            <option>{{ $s->pendidikan }}</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA/SMK</option>
                                                            <option>S1</option>
                                                            <option>S2</option>
                                                            <option>Tidak bersekolah</option>
                                                          </select>
                                                          <label for="floatingselect">Pendidikan</label>
                                                        </div><br>
                                                          <div class="form-floating"> 
                                                        <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                            <option>{{ $s->penghasilan }}</option>
                                                            <option>Tidak berpenghasilan</option>
                                                            <option>kurang dari Rp1.000.000,00</option>
                                                            <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                            <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                            <option>Lebih dari Rp3.000.000,00</option> 
                                                          </select>
                                                          <label for="floatinfselect">Penghasilan</label>
                                                        </div><br>
                                                          <div class="form-floating">
                                                          <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                            <option>{{ $s->pekerjaan }}</option>
                                                            <option>PNS</option>                                                
                                                            <option>Petani</option>                                                
                                                            <option>Pedagang</option>                                                
                                                            <option>Nelayan</option>                                                
                                                            <option>Buruh</option>                                                
                                                            <option>Pegawai Swasta</option>                                                
                                                            <option>Rohaniawan</option>                                                
                                                            <option>Polisi/tentara</option>                                                
                                                            <option>Guru/Pendidikan</option>                                                
                                                            <option>Serabutan</option>                                                
                                                            <option>Supir</option>                                                
                                                            <option>Tenaga kesehatan</option>                                                
                                                            <option>Tidak bekerja</option>                                                
                                                          </select>
                                                          <label for="floatinfselect">Pekerjaan</label>
                                                        </div><br>
                                                    </div>
                                                <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                                            </div>
                                            </div>
                                          </div>
                                        </div>@endforeach
                                      </div>
                                     </div><br>




                                     {{-- Data ibu --}}
                                     <div class="accordion accordion-flush" id="accordionFlushExample">
                                        <div class="accordion-item">
                                          <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ibu" aria-expanded="false" aria-controls="flush-collapseOne">
                                              Data ibu
                                            </button>
                                          </h2>
                                        </div>
                                    </div>                             
                            <div class="collapse" id="ibu">
                                <div class="card card-body">    
                                
                                           @foreach($ibu as $s)
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Nama Ayah</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->nama }} </p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    NIK</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->nik }} </p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    No Telepon</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->no_telepon }} </p>
                                           </div>
                                           <div class="input-group">
                                            <p class="form-control" style="border:none;">    Agama</p>
                                            <p class="form-control" style="border:none;">   : {{ $s->agama }} </p>
                                       </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Tempat/tanggal lahir</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->tempat_lahir }},  {{ $s->tgl_lahir }}</p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Pendidikan</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->pendidikan }}</p>
                                           </div>
                                            <div class="input-group">
                                                <p class="form-control" style="border:none;">    Pekerjaan</p>
                                                <p class="form-control" style="border:none;">   : {{ $s->pekerjaan }}</p>
                                           </div>
                                           <div class="input-group">
                                            <p class="form-control" style="border:none;">    Penghasilan</p>
                                            <p class="form-control" style="border:none;">   : {{ $s->penghasilan}}</p>
                                       </div>
                                           
                                           <div class="card-body">
                                            <button style="float:right; " class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$s->id_user }}_ibu">edit data</button>@endforeach
                                                <button style="float:right;margin-right:5px;" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#dataibu">Tambah Data</button>
                                           </div>
        
                                    {{-- modal tambah data ibu --}}
                                    <div class="modal fade" id="dataibu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel">Data Ibu</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                              
                                                <form action="{{ url('ibu/create') }}" method="post">
                                                    {{ csrf_field() }}
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                            <label for="floatingselect">Nama</label>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="number" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                            <label for="floatingselect">NIK</label>
                                                        </div>
                                                    </div>
                                                    <div class="input-group">
                                                        <div class="form-floating">
                                                            <input type="text" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                            <label for="floatingselect">Tempat lahir</label>
                                                        </div> 
                                                        <div class="form-floating">
                                                            <input type="date" name="tgl_lahir"  class="form-control">
                                                            <label for="floatinfselect">Tanggal lahir</label>
                                                        </div>
                                                    </div><br>
                                                    <div class="mb-3">
                                                        <div class="form-floating">
                                                            <input type="number" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                            <label for="floatinfselect">No telepon</label>
                                                        </div>
                                                    </div>
                                                    <div class="form-floating">
                                                    <select class="form-select" name="agama" aria-label="Default select example">
                                                        <option>Islam</option>
                                                        <option>Kristen</option>
                                                        <option>Katholik</option>
                                                        <option>Budha</option>
                                                        <option>Konghucu</option>
                                                      </select>
                                                      <label for="floatingselect">Agama</label>
                                                    </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="pendidikan" aria-label="Default select example">
                                                        <option>SD</option>
                                                        <option>SMP</option>
                                                        <option>SMA</option>
                                                        <option>S1</option>
                                                        <option>S2</option>
                                                        <option>Tidak bersekolah</option>
                                                      </select>
                                                      <label for="floatingselect">Pendidikan</label>
                                                    </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                        <option>PNS</option>                                                
                                                        <option>Petani</option>                                                
                                                        <option>Pedagang</option>                                                
                                                        <option>Nelayan</option>                                                
                                                        <option>Buruh</option>                                                
                                                        <option>Pegawai Swasta</option>                                                
                                                        <option>Rohaniawan</option>                                                
                                                        <option>Polisi/tentara</option>                                                
                                                        <option>Guru/Pendidikan</option>                                                
                                                        <option>Serabutan</option>                                                
                                                        <option>Supir</option>                                                
                                                        <option>Tenaga kesehatan</option>                                                
                                                        <option>Tidak bekerja</option>                                                
                                                      </select>
                                                      <label for="floatingselect">Pekerjaan</label>
                                                    </div><br>
                                                      <div class="form-floating">
                                                      <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                        <option>Tidak berpenghasilan</option>
                                                        <option>kurang dari Rp1.000.000,00</option>
                                                        <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                        <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                        <option>Lebih dari Rp3.000.000,00</option>                                                
                                                      </select>
                                                      <label for="floatingselect">Penghasilan</label>
                                                    </div><br>
            
                                            </div>
                                            <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary">Simpan</button>
                                            </form>
                                            </div>
                                          </div>
                                        </div>
                                    </div> 
        
        
                                      {{-- edit data ibu --}}
                                      @foreach($siswa as $s)
                                      <div class="modal fade" id="{{ 'modal'.$s->id_user }}_ibu" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        @endforeach
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="exampleModalLabel"> Edit data ibu</h5>
                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body"> 
                                                    <form action="{{ route('ibu.update') }}" method="post">
                                                        {{ csrf_field() }}
                                                        <div class="mb-3"> @foreach($ibu as $s)
                                                            <div class="form-floating">
                                                                <input type="text" name="nama" value="{{ $s->nama }}" class="form-control" id="exampleFormControlInput1" placeholder="nama">
                                                                <label for="floatingselect">Nama Ibu</label>
                                                            </div>
                                                        </div>                                                        <div class="mb-3">
                                                            <div class="form-floating">
                                                                <input type="number" value="{{ $s->nik }}" name="nik" class="form-control" id="exampleFormControlInput1" placeholder="nik">
                                                                <label for="floatingselect">NIK</label>
                                                            </div>
                                                        </div>
                                                        <div class="input-group">
                                                            <div class="form-floating">
                                                                <input type="text" value="{{ $s->tempat_lahir }}" name="tempat_lahir" placeholder="tempat lahir" aria-label="First name" class="form-control">
                                                                <label for="floatingselect">Tempat lahir</label>
                                                            </div>
                                                            <div class="form-floating">
                                                                <input type="date" value="{{ $s->tgl_lahir }}" name="tgl_lahir"  class="form-control">
                                                                <label for="floatingselect">Tanggal lahir</label>
                                                            </div> 
                                                        </div><br>                                
                                                        <div class="mb-3">
                                                            <div class="form-floating"> 
                                                                <input type="text" value="{{ $s->no_telepon }}" name="no_telepon" class="form-control" id="exampleFormControlInput1" placeholder="no telepon">
                                                                <label for="floatingselect">No Telepon</label>
                                                            </div>
                                                        </div>
                                                        <div class="form-floating">
                                                        <select class="form-select" name="agama" aria-label="Default select example">
                                                            <option>{{ $s->agama }}</option>
                                                            <option>Islam</option>
                                                            <option>Kristen</option>
                                                            <option>Katholik</option>
                                                            <option>Budha</option>
                                                            <option>Konghucu</option>
                                                          </select>
                                                          <label for="floatingSelect">Agama</label>
                                                        </div><br>
                                                          <div class="form-floating">
                                                            <select class="form-select" name="pendidikan"id="floatingSelect" aria-label="Floating label select example">
                                                              <option>{{ $s->pendidikan }}</option>
                                                              <option>SD</option>
                                                              <option>SMP</option>
                                                              <option>SMA/k</option>
                                                              <option>S1</option>
                                                              <option>S2</option>
                                                              <option>Tidak bersekolah</option>
                                                            </select>
                                                            <label for="floatingSelect">Pendidikan</label>
                                                          </div><br>
                                                        <div class="form-floating">
                                                        <select class="form-select" name="penghasilan" aria-label="Default select example">
                                                            <option>{{ $s->penghasilan }}</option>
                                                            <option>Tidak berpenghasilan</option>
                                                            <option>kurang dari Rp1.000.000,00</option>
                                                            <option>Rp1.000.000,00 - Rp2.000.000,00</option>
                                                            <option>Rp2.000.000,00 - Rp3.000.000,00</option>
                                                            <option>Lebih dari Rp3.000.000,00</option> 
                                                          </select>
                                                          <label for="floatingSelect">Penghasilan</label>
                                                        </div><br>
                                                          <div class="form-floating">
                                                          <select class="form-select" name="pekerjaan" aria-label="Default select example">
                                                            <option>{{ $s->pekerjaan }}</option>
                                                            <option>PNS</option>                                                
                                                            <option>Petani</option>                                                
                                                            <option>Pedagang</option>                                                
                                                            <option>Nelayan</option>                                                
                                                            <option>Buruh</option>                                                
                                                            <option>Pegawai Swasta</option>                                                
                                                            <option>Rohaniawan</option>                                                
                                                            <option>Polisi/tentara</option>                                                
                                                            <option>Guru/Pendidikan</option>                                                
                                                            <option>Serabutan</option>                                                
                                                            <option>Supir</option>                                                
                                                            <option>Tenaga kesehatan</option>                                                
                                                            <option>Tidak bekerja</option>                                                
                                                          </select><br>
                                                          <label for="floatingSelect">Pekerjaan</label>
                                                        </div>
                                                        @endforeach 
                                                    </div>
                                                <div class="modal-footer">
                                              <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                                            </div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                      </div>    
                </div> </div>
                        <div class="collapse" id="file">
                        <div class="card" style="border:none">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item" style="border:none">
                                  <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Foto saya
                                    </button>
                                  </h2>
                                  <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                      <div class="card" style="border:none">
                                    <div class="accordion-body">
                                        <div class="accordion-body">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    @foreach($foto as $f)
                                                  <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">@endforeach
                                                </div>
                                                <div class="col-md-8">
                                                  <div class="card-body">
                                                          <h5 class="card-title">Foto saya</h5>
                                                          <p class="card-text"></p>
                                                          <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">upload</a></p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div> 
                                    </div>                                   
                                </div>
                                  </div>
                                </div>
                                <div class="accordion-item" style="border:none">
                                  <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Akta kelahiran saya
                                    </button>
                                  </h2>
                                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    
                                    <div class="card" style="border:none">
                                        <div class="accordion-body">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    @foreach($akta as $f)
                                                  <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">@endforeach
                                                </div>
                                                <div class="col-md-8">
                                                  <div class="card-body">
                                                          <h5 class="card-title">Foto saya</h5>
                                                          <p class="card-text"></p>
                                                          <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">upload</a></p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>                                    
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item" style="border:none">
                                  <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      Kartu keluarga saya
                                    </button>
                                  </h2>
                                  <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="card" style="border:none">
                                        <div class="accordion-body">
                                            <div class="row g-0">
                                                <div class="col-md-4">
                                                    @foreach($kk as $f)
                                                  <img src="{{asset($f->id_user)}}/{{$f->file}}" class="img-fluid" alt="...">@endforeach
                                                </div>
                                                <div class="col-md-8">
                                                  <div class="card-body">
                                                          <h5 class="card-title">Foto saya</h5>
                                                          <p class="card-text"></p>
                                                          <p class="card-text"><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">upload</a></p>
                                                  </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                </div>
                              </div></div>
                            </div>
                 </div>
            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload foto</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('foto/create') }}"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" class="form-control" name="file" id="">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button></form>
                </div>
              </div>
            </div>
        </div>
        <div class="modal fade" id="akta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload akta</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('akta/create') }}"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" class="form-control" name="file" id="">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button></form>
                </div>
              </div>
            </div>
        </div>
        <div class="modal fade" id="kk" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Upload akta</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('kk/create') }}"  method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="file" class="form-control" name="file" id="">
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Simpan</button></form>
                </div>
              </div>
            </div>
        </div>

        

    </div>
</div>
                
</div>
</div>

@include('sweetalert::alert')   
@endsection

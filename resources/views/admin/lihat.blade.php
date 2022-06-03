@extends('layouts.admin')
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
                  <img src="{{asset($siswa->id_user)}}/{{$siswa->file}}"  style="width:250px;height:200px" class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <div class="card-header" style="text-align: left">{{ $siswa->nama }}</div><br>
                    <div class="card-header" style="text-align: left">{{ $siswa->kompetensi }}</div><br>
                  </div>
                </div>
              </div>
                </div>
            </div>

            <div class="accordion accordion-flush" id="accordionFlushExample" style="margin-top:10px ">
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Permasalahan
                  </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="btn-group" style="float:right;">
                    <button type="button" class="btn btn-sm dropdown-item" style="border:1px solid" data-bs-toggle="modal"style="float:right" data-bs-target="#tambah">Tambah permasalahan</button><br><br>
                  </div><br><br><br>
                    <table class="table table-hover">
                      <thead>
                        <tr class="bg-primary text-white">
                          <th scope="col">#</th>
                          <th scope="col">Permasalahan</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($permasalahan as $key=>$permasalahan)
                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>{{ $permasalahan->masalah }}</td>
                          <td>
                            <div class="dropdown">
                              <a style="background: none;border:1px solid;float:right" class="btn btn-secondary dropdown-toggle text-black" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                               Aksi
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$permasalahan->id }}_edit" >Edit data</a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$permasalahan->id }}">Detail permasalahan</a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$permasalahan->id }}_view">Tambahkan pembinaan</a></li>
                                <li><a class="dropdown-item" href="{{ route('siswa.bina',$permasalahan->id) }}">Pembinaan yang diberikan</a></li>
                                <li><a class="dropdown-item" href="#"><form action="{{ route('permasalahan.destroy',$permasalahan->id) }}" method="post">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="submit" style="margin-left: 1px;border:none;color:red"
                                  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus data</button>
                            </form></a></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
                        <div class="modal fade" id="{{ 'modal'.$permasalahan->id }}_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('siswa/'.$permasalahan->id.'/edit') }}"  method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->id_user }}" name="id_user" class="form-control" id="floatingInput" >
                                  </div>
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->nama }}" name="nama_anak" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Nama Anak</label>
                                  </div>
                                  <div class="form-floating">
                                    <textarea class="form-control"  name="masalah"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $permasalahan->masalah }}</textarea>
                                    <label for="floatingTextarea2">Permasalahan</label>
                                  </div>
                                
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal fade" id="{{ 'modal'.$permasalahan->id }}_view" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $permasalahan->masalah }}</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('siswa/'.$siswa->id.'/create-pembinaan') }}"  method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->id_user }}" name="id_user" class="form-control" id="floatingInput" >
                                  </div>
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $permasalahan->id }}" name="id_permasalahan" class="form-control" id="floatingInput" >
                                  </div>
                                  
                                  <div class="form-floating">
                                    <textarea class="form-control"  name="pembinaan"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Pembinaan</label>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button></form>
                            </div>
                          </div>
                        </div>
                        </div>
                        <div class="modal fade" id="{{ 'modal'.$permasalahan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Permasalahan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                               <p style="float:left">{{ $permasalahan->masalah }}</p><br>

                              <div class="modal-footer">
                                {{ $permasalahan->created_at }}
                            </div>
                          </div>
                        </div>
                        </div>
                        </div>
            
                       
                        @empty
                        <tr>
                          <td><div class="card-header">Belum ada data</div></td>
                        </tr>
                        @endforelse
                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Permasalahan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('siswa/'.$siswa->id.'/create') }}"  method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->id_user }}" name="id_user" class="form-control" id="floatingInput" >
                                  </div>
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->nama }}" name="nama_anak" class="form-control" id="floatingInput">
                                    <label for="floatingInput">Nama Anak</label>
                                  </div>
                                  <div class="form-floating">
                                    <textarea class="form-control" name="masalah"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px"></textarea>
                                    <label for="floatingTextarea2">Permasalahan</label>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button></form>
                              </div>
                            </div>
                          </div>
                        </div>
                      
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Catatan Khusus
                  </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                  <div class="accordion-body">
                    <div class="btn-group" style="float: right">
                    <button type="button" class="btn dropdown-item" style="border:1px solid" data-bs-toggle="modal"style="float:right" data-bs-target="#catatan">Tambah catatan</button><br><br>
                  </div><br><br><br>
                    <table class="table table-hover">
                      <thead>
                        <tr class="bg-primary text-white">
                          <th scope="col">#</th>
                          <th scope="col">Catatan</th>
                          <th scope="col"></th>
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($catatan as $key=>$catatan)
                        <tr>
                          <th scope="row">{{ $key+1 }}</th>
                          <td>{{ $catatan->catatan }}</td>
                          <td>
                            <div class="dropdown">
                              <a style="background: none;border:1px solid;float:right" class="btn btn-secondary dropdown-toggle text-black" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                               Aksi
                              </a>
                              <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$catatan->id }}_edit_catatan" >Edit data</a></li>
                                <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$catatan->id }}">Detail Catatan</a></li>
                                <li><form action="{{ route('catatan.destroy',$catatan->id,'-catatan') }}" method="post">
                                  {{ csrf_field() }}
                                  <input type="hidden" name="_method" value="DELETE">
                                  <button type="submit"  style="margin-left: 1px;border:none;color:red"
                                  onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus catatan </button>
                            </form></li>
                              </ul>
                            </div>
                          </td>
                        </tr>
            
                        <div class="modal fade" id="{{ 'modal'.$catatan->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Catatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="card-body" style="float: left">
                                  {{ $catatan->catatan}}
                                </div>
                              </div>
                              <div class="modal-footer">
                                {{ $catatan->created_at }}
                              </div>
                            </div>
                          </div>
                        </div>
            
                        <div class="modal fade" id="{{ 'modal'.$catatan->id }}_edit_catatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit catatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('siswa/'.$catatan->id.'/edit-catatan') }}"  method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->id_user }}" name="id_user" class="form-control" id="floatingInput" >
                                  </div>
                                  <div class="form-floating">
                                    <textarea class="form-control"  name="catatan"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">{{ $catatan->catatan }}</textarea>
                                    <label for="floatingTextarea2">Catatan</label>
                                  </div>
                                
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan perubahan</button></form>
                              </div>
                            </div>
                          </div>
                        </div>
                        @empty
                        <tr>
                          <td><div class="card-header">Belum ada data</div></td>
                        </tr>
                        @endforelse
                        <div class="modal fade" id="catatan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Catatan</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <form action="{{ url('siswa/'.$siswa->id.'/catatan') }}"  method="POST">
                                  {{ csrf_field() }}
                                  <div class="form-floating mb-3">
                                    <input type="hidden" value="{{ $siswa->id_user }}" name="id_user" class="form-control" id="floatingInput" >
                                  </div>
                                  <div class="form-floating">
                                    <textarea class="form-control" name="catatan"  placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                                    <label for="floatingTextarea2">Catatan</label>
                                  </div>
                              </div>
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Simpan</button></form>
                              </div>
                            </div>
                          </div>
                        </div>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Data {{ $siswa->nama }}
                  </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExamplee">
                  <div class="accordion-body">
                    <div class="accordion accordion-flush" id="accordionFlushExamplee">
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingOne">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne123" aria-expanded="false" aria-controls="flush-collapseOne">
                            Data pribadi
                          </button>
                        </h2>
                        <div id="flush-collapseOne123" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExamplee">
                          <div class="accordion-body">
                            <table class="table">
                              <tr>
                                <td>Nama</td>
                                <td>{{ $siswa->nama }}</td>
                              </tr>
                              <tr>
                                <td>Email</td>
                                <td>{{ $siswa->email }}</td>
                              </tr>
                              <tr>
                                <td>Kelas</td>
                                <td>{{ $siswa->kompetensi }}</td>
                              </tr>
                              <tr>
                                <td>Tempat/tanggal lahir</td>
                                <td>{{ $siswa->tempat_lahir }},  {{ $siswa->tgl_lahir }}</td>
                              </tr>
                              <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ $siswa->jenis_kelamin }}</td>
                              </tr>
                              <tr>
                                <td>Tinggi badan</td>
                                <td>{{ $siswa->tinggi_badan }}cm</td>
                              </tr>
                              <tr>
                                <td>Berat badan</td>
                                <td>{{ $siswa->berat_badan }}kg</td>
                              </tr>
                              <tr>
                                <td>Alamat</td>
                                <td>kel:{{ $siswa->kelurahan}}, kec:{{ $siswa->kecamatan }}, kota/kab:{{ $siswa->kota }}, Prov:{{ $siswa->provinsi }}</td>
                              </tr>
                              <tr>
                                <td>Kode Pos</td>
                                <td>{{ $siswa->kode_pos }}</td>
                              </tr>
                              <tr>
                                <td>No telepon</td>
                                <td>{{ $siswa->no_telepon }}</td>
                              </tr>
                              <tr>
                                <td>Suku</td>
                                <td>{{ $siswa->suku }}</td>
                              </tr>
                              <tr>
                                <td>Anak ke</td>
                                <td>{{ $siswa->anak_ke }}</td>
                              </tr>
                              <tr>
                                <td>Jumlah saudara</td>
                                <td>{{ $siswa->jumlah_saudara }}</td>
                              </tr>
                              <tr>
                                <td>No KPS</td>
                                <td>{{ $siswa->no_kps }}</td>
                              </tr>
                              <tr>
                                <td>Sekolah Asal</td>
                                <td>{{ $siswa->asal_sekolah }}</td>
                              </tr>
                              <tr>
                                <td>No telepon sekolah asal</td>
                                <td>{{ $siswa->no_telepon_sekolah }}</td>
                              </tr>
                              <tr>
                                <td>Kota sekolah asal</td>
                                <td>{{ $siswa->kota_sekolah }}</td>
                              </tr>
                              <tr>
                                <td>Tahun Lulus</td>
                                <td>{{ $siswa->tahun_lulus }}</td>
                              </tr>
                              <tr>
                                <td>No Ijazah</td>
                                <td>{{ $siswa->no_ijazah }}</td>
                              </tr>
                              <tr>
                                <td>No SKHUN</td>
                                <td>{{ $siswa->no_skhun}}</td>
                              </tr>
                              <tr>
                                <td>NISN</td>
                                <td>{{ $siswa->nisn }}</td>
                              </tr>
                              <tr>
                                <td>No KIS mandiri</td>
                                <td>{{ $siswa->no_kis}}</td>
                              </tr>
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingTwo">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo123" aria-expanded="false" aria-controls="flush-collapseTwo">
                            Data ayah
                          </button>
                        </h2>
                        <div id="flush-collapseTwo123" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExamplee">
                          <div class="accordion-body">
                            <table class="table">
                              @forelse ($ayah as $item)
                              <tr>
                                <td>Nama</td>
                                <td>{{ $item->nama }}</td>
                              </tr>
                              <tr>
                                <td>Tempat/tanggal lahir</td>
                                <td>{{ $item->tempat_lahir }},  {{ $item->tgl_lahir }}</td>
                              </tr>
                              <tr>
                                <td>NIK</td>
                                <td>{{ $item->nik }}</td>
                              </tr>
                              <tr>
                                <td>Pendidikan</td>
                                <td>{{ $item->pendidikan }}</td>
                              </tr>
                              <tr>
                                <td>No telepon</td>
                                <td>{{ $item->no_telepon }}</td>
                              </tr>
                              <tr>
                                <td>Agama</td>
                                <td>{{ $item->agama }}</td>
                              </tr>
                              <tr>
                                <td>Penghasilan</td>
                                <td>{{ $item->penghasilan }}</td>
                              </tr>
                              <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $item->pekerjaan }}</td>
                              </tr>
                              @empty
                              <div class="card-header">tidak ada data</div>
                              @endforelse
                              
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree123" aria-expanded="false" aria-controls="flush-collapseThree">
                            Data ibu
                          </button>
                        </h2>
                        <div id="flush-collapseThree123" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExamplee">
                          <div class="accordion-body">
                            <table class="table">
                              @forelse ($ibu as $item)
                              <tr>
                                <td>Nama</td>
                                <td>{{ $item->nama }}</td>
                              </tr>
                              <tr>
                                <td>Tempat/tanggal lahir</td>
                                <td>{{ $item->tempat_lahir }},  {{ $item->tgl_lahir }}</td>
                              </tr>
                              <tr>
                                <td>NIK</td>
                                <td>{{ $item->nik }}</td>
                              </tr>
                              <tr>
                                <td>Pendidikan</td>
                                <td>{{ $item->pendidikan }}</td>
                              </tr>
                              <tr>
                                <td>No telepon</td>
                                <td>{{ $item->no_telepon }}</td>
                              </tr>
                              <tr>
                                <td>Agama</td>
                                <td>{{ $item->agama }}</td>
                              </tr>
                              <tr>
                                <td>Penghasilan</td>
                                <td>{{ $item->penghasilan }}</td>
                              </tr>
                              <tr>
                                <td>Pekerjaan</td>
                                <td>{{ $item->pekerjaan }}</td>
                              </tr>
                              @empty
                              <div class="card-header">tidak ada data</div>
                              @endforelse
                              
                            </table>
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour123" aria-expanded="false" aria-controls="flush-collapseThree">
                            Akta kelahiran
                          </button>
                        </h2>
                        <div id="flush-collapseFour123" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExamplee">
                          <div class="accordion-body">
                            @forelse($akta as $akta)
                            <img src="{{asset($akta->id_user)}}/{{$akta->file}}"  style="width: 300px;height:300px;float:left" class="img-fluid" alt="...">
                            @empty
                            <img src="{{ asset('images/empty.png') }}"  style="width: 300px;float:left" class="img-fluid" alt="...">
                            @endforelse
                          </div>
                        </div>
                      </div>
                      <div class="accordion-item">
                        <h2 class="accordion-header" id="flush-headingThree">
                          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive123" aria-expanded="false" aria-controls="flush-collapseThree">
                            Kartu keluarga 
                          </button><hr>
                        </h2>
                        <div id="flush-collapseFive123" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExamplee">
                          <div class="accordion-body">
                            @forelse($kk as $kk)
                          <img src="{{asset($kk->id_user)}}/{{$kk->file}}"  style="width: 400px;height:400px" class="img-fluid" alt="...">
                          @empty
                          <img src="{{ asset('images/empty.png') }}"  style="width: 300px;float:left" class="img-fluid" alt="...">
                          @endforelse
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

             

        </div>
    </center>
    
    
    
    

    

    @include('sweetalert::alert')   

@endsection
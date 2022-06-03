@extends('admin.masalah')
@section('masalah')

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambah" style="float: right">Tambah</button><br><br>
<table class="table table-hover">
    <thead>
      <tr class="bg-primary text-white">
        <th scope="col">#</th>
        <th scope="col">Masalah</th>
        <th scope="col">Waktu</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
        @foreach($permasalahan as $m)
      <tr>
        <th scope="row">1</th>
        <td>  {{ $m->masalah }}</td>
        <td>{{ $m->created_at }}</td>
        <td> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#{{ 'modal'.$m->id }}">detail</button>
          <a href="{{ route('permasalahan.edit', $m) }}" class="btn btn-primary  btn-sm" style="float:left;color: white">edit</a>

                <form action="{{ route('permasalahan.destroy',$m->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm" style="margin-left: 1px"
                onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')"> hapus</button>
          </form>
      </tr>
      <div class="modal fade" id="{{ 'modal'.$m->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="card">
                <p >{{ $m->masalah }}</p>
              </div>

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
        </div>
      </div>
        @endforeach
    </tbody>
  </table>


    <!-- Modal tambah-->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('permasalahan-siswa/create') }}" method="post">
                {{ csrf_field() }}
            <div class="form-floating mb-3">
                <select id="" name="nama_anak"class="form-control">
                    @foreach($siswa as $c1)
                    <option value="<?=$c1->id?>"><?=$c1->nama?></option>
                    @endforeach
                  </select>
                  <label for="floatingInput">Nama anak</label>
            </div>
            <div class="form-floating mb-3">
                <textarea type="text" name="masalah" class="form-control" id="floatingInput" placeholder="name@example.com"></textarea>
                <label for="floatingInput">Permasalahan</label>
            </div>
        
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Simpan</button>
        </div></form>
      </div>
    </div>
  </div>




  @include('sweetalert::alert')   

@endsection
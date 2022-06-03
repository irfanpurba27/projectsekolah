@extends('admin.masalah')
@section('masalah')

<form action="{{ route('permasalahan.update',$masalah) }}" method="post">
    {{ csrf_field() }}
        {{ method_field('PATCH') }}
          
          <div class="form-group">
            <label for=""style="float:left">Fasilitas Kamar</label>
            <input type="text" class="form-control" name="nama" placeholder="" value="{{$masalah->masalah}}">
          </div>

           <div class="form-group">
            <label for=""style="float:left">Tipe Fasilitas </label>
            <select class="form-select" id="inputGroupSelect01" name="tipe">
              <option value="" disable>{{$fkamar->tipe}}</option>
              <option >Superior</option>
              <option >Deluxe</option>
            </select>            </div>


         
        </div>
        <div class="modal-footer">
        <a href="{{ url('fasilitas-kamar') }}"><button type="button" class="btn btn-success" data-bs-dismiss="modal"> kembali</button></a>
      
      <button type="submit" class="btn btn-primary">Simpan perubahan</button>
      </form>

@endsection
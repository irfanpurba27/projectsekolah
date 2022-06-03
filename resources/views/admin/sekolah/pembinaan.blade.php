@extends('layouts.admin2')
@section('content')
<style>
    .box{
    width: 1000px
  }
</style>
<center>
<div class="box">
    <div class="card" style="border:none">
      <div class="accordion-body">
          <div class="row g-0">
              <div class="col-md-4" style="text-align: left">
               <h1> {{ $permasalahan->masalah }} </h1><br><br>
                @foreach ($pembinaan as $item)
                      <li> {{ $item->pembinaan }}</li>
                 @endforeach
              </div>
              <div class="col-md-8">
                <div class="card-body">
                 
                </div>
              </div>
              
            </div>
              </div>
              
          </div>

          

</div>
</center>
@endsection
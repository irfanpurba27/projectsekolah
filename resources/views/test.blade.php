abc

<a href="/tes">testing</a>

<form action="/tes/balik" method="post">
                        {{ csrf_field() }}
                        <div class="col">
                            <input class="btn btn-success ml-3" type="submit" value="Simpan Data">
                        </div>
                    </form>



                  
@if(session()->has('balik'))

<h2>
                      jdnajda
                  </h2>
@else 

@endif

@if(session('balik'))
            @endif
@extends('layouts.app')

@section('content')

<div style="width:100%;"> 
    <div class="card-header">
        <div style="text-align: center;"> 
            <img src="{{ asset('images/title.png') }}" alt="Aqui ira la imagen"  class="img-fluid">
        </div>
    </div>
</div>

<div class="container-fluid" style="background: url('/images/fondocrash.jpg')">
    <div class="container">
        <font color="white" face="Comic Sans MS,arial">
          <div class="row">
            <div class="col">
                <div style="text-align: center;">
                  <h1 class="card-header dark">Crash Bandicoot</h1>
                  <content>
                      <h4 class="card-header">Crash Bandicoot es una serie de videojuegos de plataformas, originalmente exclusiva de PlayStation, publicada por Sony Computer Entertainment y creada por la compañía de videojuegos estadounidense Naughty Dog. La serie fue creada por Andy Gavin y Jason Rubin durante su permanencia en Naughty Dog, siendo un personaje principal concebido para ser mascota y representante de la marca PlayStation.</h4>
                      <a href="{{ route('game') }}" class="btn btn-dark">
                        <h2 >Play Game</h2>
                      </a>
                  </content>
                </div>
            </div>
            <div class="col">
                <TABLE WIDTH="100%" HEIGHT="100%">
                    <TR>
                        <TD VALIGN="MIDDLE" ALIGN="CENTER">
                        <div style="text-align: center;">
                            <a href="{{ route('game') }}">
                                <img src="{{ asset('images/crashj.jpg') }}" width="300" height="300" alt="Aqui ira la imagen">
                            </a>
                        </div>
                        </TD>
                    </TR>
                </TABLE>                
            </div>
          </div>
        </font>
    </div>

</div>
@endsection
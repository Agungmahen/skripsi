@extends('welcome')
@section('content')
<style>
    body{
        background-color: rgb(1, 1, 68); /* Dark background color */
        color: #ffffff; 
    }

    .w-100 {
    background-image: url('../img/bm.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    height: 650px; /* Default height for larger screens */
  }

  /* Media query for smartphones */
  @media only screen and (max-width: 600px) {
    .w-100 {
      height: 300px; /* Adjust the height for smartphones */
    }
  }
</style>
            {{-- <img src="{{ url('../img/b.mp4') }}" style="width: 100%;height: 650px;" alt="Responsive Image">    --}}
            {{-- <div class="w-100" style="background-image: url('../img/bm.jpg'); padding-top: 650px; background-repeat: no-repeat; background-size: 100%;">
                <center>
                    <a href="{{ url('dashboard') }}" class="btn btn-primary btn-lg position-fixed bottom-0 start-50 translate-middle-x" style="z-index: 1000;">COBA SEKARANG</a>
                </center>
              </div>            --}}
              <div class="card">
                <div class="card-header">
                    <img src="../img/bm.jpg" style="height: 550px" alt="">
                </div>
                <div class="card-body">
                    <center>
                        <a href="{{ url('dashboard') }}" class="btn btn-primary btn-lg" style="z-index: 1000;">COBA SEKARANG</a>
                    </center>    
                </div>
              </div>
@endsection

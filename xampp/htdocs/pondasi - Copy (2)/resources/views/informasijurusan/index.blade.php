@extends('welcome')
@section('content')
<style>    
 body {
        background-color: rgb(1, 1, 68); /* Dark background color */
        color: #ffffff; /* Light text color */
    }
    .btn-back:hover {
        background-color: #0056b3; /* Darker color on button hover */
    }

    .jurusan {
        color: white; /* Text color for the heading */
    }

    .card {
        background-color: #1f1f1f; /* Darker card background color */
        color: #ffffff; /* Light text color for card content */
        transition: background-color 0.3s ease; /* Smooth transition on background color change */
    }

    .card:hover {
        background-color: #2c2c2c; /* Darker background color on hover */
    }

    .card-header {
        background-color: #343a40; /* Dark header background color */
    }

    img {
        height: 100px;
        width: auto;
    }
</style>
<div>
    <a href="{{ url('dashboard') }}" class="position-fixed z-index-5" style="width: 40px; top: 6rem; left: 1rem;">
        <div class="btn btn-primary rounded-circle p-2">
            <i class="bi bi-arrow-left-circle"></i>
        </div>
    </a>
    <div class="jurusan text-center mb-4">
        INFORMASI PROGRAM STUDI PADA BIDANG KOMPUTER
    </div>
    <div class="container">
        <div class="row">
            <a href="{{url('teknik_informatika')}}" style="text-decoration: none">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header text-center" style="font-weight: bold">
                            TEKNIK INFORMATIKA
                        </div>
                        <div class="card-body text-center">
                            <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
           <a href="{{url('si')}}" style="text-decoration: none">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header text-center" style="font-weight: bold">
                         SISTEM INFORMASI
                    </div>
                    <div class="card-body text-center">
                        <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                    </div>
                </div>
            </div>
           </a>
            <a href="{{url('sk')}}" style="text-decoration: none">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header text-center" style="font-weight: bold">
                             SISTEM KOMPUTER
                        </div>
                        <div class="card-body text-center">
                            <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>
           <a href="{{url('ti')}}" style="text-decoration: none">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header text-center"  style="font-weight: bold">
                        TEKNOOLOGI INFORMASI
                    </div>
                    <div class="card-body text-center">
                        <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                    </div>
                </div>
            </div>
        </a>
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header text-center">
                        ILMU KOMPUTER
                    </div>
                    <div class="card-body text-center">
                        <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                    </div>
                </div>
            </div>            

        </div>
    </div>
</div>
@endsection

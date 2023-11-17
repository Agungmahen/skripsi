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
                            ITB PALCOMTECH
                        </div>
                        <div class="card-body text-center" >
                            <table class="w-100" >
                                <tr>
                                     <td colspan="3">
                                        <img src="https://tse1.mm.bing.net/th?id=OIP.fXnFvEezSZcui5_XJKb9iAAAAA&pid=Api&P=0&h=180" style="width: 100px" alt="">
                                        
                                    </td>     

                                </tr>
                               
                                <tr >
                                    <td style="padding-top: 30px">
                                        VISI
                                    </td>
                                    <td style="padding-top: 30px">
                                        MISI
                                    </td>
                                </tr>
                                <tr>
                                    
                                    <td style="text-align: justify;padding: 10px">
                                        Menjadi program studi yang menghasilkan sarjana dengan kompetensi unggulan di bidang rekayasa perangkat lunak, pengembangan sistem cerdas dan jaringan komputer yang berprestasi dan berwawasan global
                                    </td>
                                    <td style="text-align: justify;padding: 15px">
                                        Menyelenggarakan pendidikan tinggi yang bermutu di bidang rekayasa perangkat lunak, sistem cerdas dan jaringan komputer untuk menghasilkan lulusan yang berprestasi dan berbudi pekerti luhur.
Menyelenggarakan penelitian yang inovatif dan berkualitas untuk berkontribusi dalam penerapan rekayasa perangkat lunak, pengembangan sistem cerdas dan jaringan komputer.
Menyelenggarakan pengabdian yang berkontribusi pada masyarakat dan pengembangan pendidikan di bidang rekayasa perangkat lunak, pengembangan sistem cerdas dan jaringan komputer.
Berperan aktif dalam kegiatan atau komunitas di tingkat nasional dan internasional untuk meningkatkan kualitas tridarma perguruan tinggi yang wawasan global.
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="3 " class="text-end">
                                        <a target="_blank" href="https://palcomtech.ac.id/informatika/">SELENGKAPNYA</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </a>
           <a href="{{url('sistem_informasi')}}" style="text-decoration: none">
            <div class="col-12 mb-3">
                <div class="card">
                    <div class="card-header text-center" style="font-weight: bold">
                         UNIVERSITAS MDP
                    </div>
                    <div class="card-body text-center">
                        <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                    </div>
                </div>
            </div>
           </a>
            <a href="" style="text-decoration: none">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header text-center" style="font-weight: bold">
                             UNIVERSITAS KATOLIK MUSI CHARITAS
                        </div>
                        <div class="card-body text-center">
                            <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>                                
            <a href="" style="text-decoration: none">
                <div class="col-12 mb-3">
                    <div class="card">
                        <div class="card-header text-center" style="font-weight: bold">
                             UNIVERSITAS BINUS
                        </div>
                        <div class="card-body text-center">
                            <img style="height: 100px; width: auto;" src="https://2.bp.blogspot.com/-w35ChB55ev4/WiAV9hgtmXI/AAAAAAAAAgc/73wnDOUDQkMWYea4qyfSKPNChus73H8NwCLcBGAs/w1200-h630-p-k-no-nu/shutterstock_1222644011.jpg" alt="">
                        </div>
                    </div>
                </div>
            </a>                                

        </div>
    </div>
</div>
@endsection

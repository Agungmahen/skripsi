<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
  <link rel="stylesheet" href="path/to/font-awesome/css/all.min.css">
  <link rel="stylesheet" href="{{asset('style.css')}}" type="text/css">
  <title>PILIHAN KU</title>
</head>

<body>
 <div>
        <img class="hy" src="../img/bg.png" alt="">
 </div>
  <ul class="nav justify-content-center">
    <li class="nav-item">      
      <a class="atas nav-link active" aria-current="page" href="#">
       <div class="div-flex">
       <div> PILIHANKU</div>
       </div>
      </a>
    </li>    
  </ul>
  <div class="wa">
    <a  target="_blank" href="https://api.whatsapp.com/send?phone=+6283178485184&text={{urlencode("Hai Pilihan ku")}}">
      <div class="btn btn-outline-success"> <div style="color: white"><i class="bi bi-whatsapp"></i> Tanya Pilihanku..</div></div>
    </a>
  </div>

<div class="isi">
  @yield('content')
</div>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
</body>

</html>

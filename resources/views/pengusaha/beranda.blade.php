<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>sipuker</title>
  <link rel="stylesheet" href="{{asset ('assets/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/fonts/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/fonts/ionicons.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/fonts/simple-line-icons.min.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/aguilaraldo1_section_contact.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Contact-FormModal-Contact-Form-with-Google-Map.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Footer-Dark.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
  <link rel="stylesheet" href="{{asset ('assets/css/Login-Form-Clean.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Navigation-with-Search.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/Simple-Slider.css')}}">
  <link rel="stylesheet" href="{{asset ('assets/css/beranda.css')}}">

</head>
<body style="background-color: #f5f6fa">
@include('layouts/pengusaha-header', ['user' => $user])
<div class="row" style="margin-top:50px;">
  <div class="col">
    <div class="row" style="/*height:300px;*/">
      <form action="" method="post" id="form">
        <textarea class="form-control" rows="3"></textarea>
        <div class="file float-left btn btn yte" id="upload"><img src="{{ asset ('assets/img/outbox.png')}}" style="width: 25px;"> Upload <input class="ye" type="file" name="file"/>

        </div>
        <button type="submit" class="float-right btn btn-primary" id="kirim">Kirim</button>
      </form>
    </div>
    <div class="row">
      <div class="col">
        <div class="card" id="post">
          <div class="card-header">
            <h5 class="mb-1" id="judulTopik"> Nama Topik</h5>
          </div>
          <div class="card-body">
            <p class="card-text">asasasasassasa</p>
            <br>
            <br>
            <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background-color:rgb(255,255,255);color:rgb(0,0,0); border-color: white;"><img src="{{asset ('assets/img/account.png')}}" style="width:30px;">100 Joined</button><button class="btn btn-primary" type="button" id="join">Join</button></div>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card" id="post1">
          <div class="card-header">
            <h5 class="mb-1" id="judulTopik"> Nama Topik</h5>
          </div>
          <div class="card-body">
            <p class="card-text">asasasasassasa</p>
            <br>
            <br>
            <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background-color:rgb(255,255,255);color:rgb(0,0,0); border-color: white;"><img src="{{asset ('assets/img/account.png')}}" style="width:30px;">100 Joined</button><button class="btn btn-primary" type="button" id="join">Join</button></div>
          </div>

        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card" id="post1">
          <div class="card-header">
            <h5 class="mb-1" id="judulTopik"> Nama Topik</h5>
          </div>
          <div class="card-body">
            <p class="card-text">asasasasassasa</p>
            <br>
            <br>
            <div class="btn-group" role="group"><button class="btn btn-primary" type="button" style="background-color:rgb(255,255,255);color:rgb(0,0,0); border-color: white;"><img src="{{asset ('assets/img/account.png')}}" style="width:30px;">100 Joined</button><button class="btn btn-primary" type="button" id="join">Join</button></div>
          </div>

        </div>
      </div>
    </div>
  </div>


  <div class="col" style="height:500px;">
    <div class="card" style="margin-left:100px;width:400px;">
      <div class="card-header">
        <h5 class="mb-0">Activity</h5>
      </div>
      <div class="card-body">
        <p class="card-text"></p>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Kegiatan UMKM</h5>
          </div>
          <div class="card-body">
            <p class="card-text">Blablabalbal</p>
          </div>
        </div>
      </div>
      <div class="card-body" id="activity">
        <p class="card-text"></p>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Kegiatan UMKM</h5>
          </div>
          <div class="card-body">
            <p class="card-text">Blablabalbal</p>
          </div>
        </div>
      </div>
      <div class="card-body" id="activity">
        <p class="card-text"></p>
        <div class="card">
          <div class="card-header">
            <h5 class="mb-0">Kegiatan UMKM</h5>
          </div>
          <div class="card-body">
            <p class="card-text">Blablabalbal</p>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<div class="footer-dark" style="background-color:rgb(178,225,230); margin-top: 150px;">
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-3 item">
          <h3 style="color:rgb(0,0,0);">Services</h3>
          <ul>
            <li><a href="#" style="color:rgb(0,0,0);">Web design</a></li>
            <li><a href="#" style="color:rgb(0,0,0);">Development</a></li>
            <li><a href="#" style="color:rgb(0,0,0);">Hosting</a></li>
          </ul>
        </div>
        <div class="col-sm-6 col-md-3 item">
          <h3 style="color:rgb(0,0,0);">About</h3>
          <ul>
            <li><a href="#" style="color:rgb(0,0,0);">Company</a></li>
            <li><a href="#" style="color:rgb(0,0,0);">Team</a></li>
            <li><a href="#" style="color:rgb(0,0,0);">Careers</a></li>
          </ul>
        </div>
        <div class="col-md-6 item text">
          <h3 style="color:rgb(0,0,0);">Company Name</h3>
          <p style="color:rgb(0,0,0);">Praesent sed lobortis mi. Suspendisse vel placerat ligula. Vivamus ac sem lacus. Ut vehicula rhoncus elementum. Etiam quis tristique lectus. Aliquam in arcu eget velit pulvinar dictum vel in justo.</p>
        </div>
        <div class="col item social"><a href="#" style="background-color:#000000;"><i class="icon ion-social-facebook"></i></a><a href="#" style="background-color:#000000;"><i class="icon ion-social-twitter"></i></a><a href="#" style="background-color:#000000;"><i class="icon ion-social-snapchat"></i></a>
          <a
          href="#" style="background-color:#000000;"><i class="icon ion-social-instagram"></i></a>
        </div>
      </div>
    </div>
  </footer>
</div>
<script src="{{asset ('assets/js/jquery.min.js')}}"></script>
<script src="{{asset ('assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset ('assets/js/Contact-FormModal-Contact-Form-with-Google-Map.js')}}"></script>
<script src="{{asset ('assets/js/File-Input---Beautiful-Input--Button-Approach-Jasny-Bootstrap.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
<script src="{{asset ('assets/js/Simple-Slider.js')}}"></script>
</body>

</html>

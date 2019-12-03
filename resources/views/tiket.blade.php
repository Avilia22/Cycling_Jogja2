<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja</title>

  <!-- Bootstrap core CSS -->
<link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('https://fonts.googleapis.com/css')}}"family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{url('css/landing-page.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<script src="https://kit.fontawesome.com/9845349ab7.js" crossorigin="anonymous"></script>

</head>

<body>
  @include('include.navigation')
  @include('include.header')
  @include('include.icongrid')
  @include('include.profil')



    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <table width="100%" class="Table table-striped">
                <tr>
                  <td>No</td>
                  <td>Nama</td>
                  <td>Event</td>
                  <td>Token</td>
                </tr>
                @foreach($tiket as $data)
                <tr>
                   <td>1</td>
                   <td>{{$data->nama}}</td>
                   <td>{{$data->nama_event}}</td>
                   <td>{{$data->token}}</td>
                 </tr>
                 @endforeach
               </table>
        </div>  
      </div>
      </div>
    </div>
    
</div>

  @include('include.upcommingevent')
  @include('include.signup')
  @include('include.footer')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>

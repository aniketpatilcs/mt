 <!DOCTYPE html>
<html lang="zxx">
<head>
<title>   UMS</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="keywords" content=" " />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
      function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="{{ asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/component.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/style_grid.css') }}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="{{ asset('assets/css/export.css') }}" rel="stylesheet"> 
<link href="{{ asset('assets/css/font-awesome.css') }}" rel="stylesheet"> 
<link href="{{ asset('assets/css/flipclock.css') }}" rel="stylesheet"> 
<link href="{{ asset('assets/css/circles.css') }}" rel="stylesheet"> 
<link href="{{ asset('assets/css/table-style.css') }}" rel="stylesheet">
  
<script src = "https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js">
</script>
<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
</script>
<script src = "https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
</script>
<link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
<script src = "https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js">
</script>
<script src = "https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js">
</script>

<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<style type="text/css">
   body{
      background: #fff !important ;
   }
</style>
</head>
<body>
<!-- banner -->
<div class="wthree_agile_admin_info">
        <!-- /w3_agileits_top_nav-->
        <!-- /nav-->
@include('admin/includes/front_header')
<style type="text/css">
  
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

</style>
<div class="wthree_agile_admin_info">
    <div class="inner_content">
        <div class="inner_content_w3_agile_info two_in">
            <div class="forms-main_agileits">
                <div class="graph-form agile_info_shadow">
               @if(Session::has('insert_msg'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('insert_msg') }}</p>
@endif
                 <h3 class="w3_inner_tittle two">  User registration !!  </h3>
                    <div class="form-body">
                        
                        <form method="post" action="{{ url('/new_de') }}"   enctype="multipart/form-data">
                          @csrf
                           <div class="form-group"> <label for="name">    Name</label> <input type="text" class="form-control" name="name" id="name" placeholder="   "> </div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                           
 
                      <div class="form-group"> <label for="email">         Email</label> <input type="email" class="form-control" name="email" id="email" placeholder="   "> </div>
                     @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


                      <div class="form-group"> <label for="password">    Password</label> <input type="password" class="form-control" name="password" id="password" placeholder="   "> </div>
                       @error('pancard')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                  
                    </div>

                </div>
            </div>
         
           
         
                  <button type="submit" class="btn btn-default">Register</button>
                        

                        <button type="button" onclick="location.href = '/ulogin';" class="btn btn-default">Login</button></form>
            </div> 


        </div>

    
    </div>
</div>

@include('admin/includes/footer')


 

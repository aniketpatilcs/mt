@include('user/includes/header')
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
                 <h3 class="w3_inner_tittle two">  User Profile !!  </h3>
                    <div class="form-body">
                        
                        <form method="post" action="{{ url('/user/update') }}"   enctype="multipart/form-data">
                          @csrf
                          <?php
                        // echo '<pre/>';  print_r($var); ?>
                           <div class="form-group"> <label for="name">    Name</label> <input type="text" class="form-control" name="name" id="name" value="<?php echo $var[0]->name; ?>"> </div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                           
 
                      <div class="form-group"> <label for="email">         Email</label> <input type="email" class="form-control" name="email" id="email" value="<?php echo $var[0]->email; ?>" readonly=""> </div>
                     @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

 
                      <div class="form-group"> <label for="password">    Password</label> <input type="password" class="form-control" name="password" id="password" value="<?php echo $var[0]->password; ?>"> </div>
                       @error('password')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                  
                    </div>

                </div>
            </div>
         
           
         
                         

                        <button type="submit"   class="btn btn-default">Click To Update</button></form>
            </div> 


        </div>

    
    </div>
</div>
@include('user/includes/footer')

<script>
$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>
 


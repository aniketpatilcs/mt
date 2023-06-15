@include('admin/includes/header')
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
        
        <div class="agile-tables">
            <div class="w3l-table-info agile_info_shadow" style="width: 100%; overflow-x: auto;">
				
                 <h3 class="w3_inner_tittle two">    List Of Users   </h3>
				@if(Session::has('delete_msg'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('delete_msg') }}</p>
@endif
 
 <table id = "myTable" class = "table table-bordered table-striped" style = "width:100%">
					
                         @forelse ($var as  $varone)
                                                      
                        
                           <td data-th="name"><span class="bt-content">{{ $varone->name }}</span></td>
							         
                           <td data-th="email"><span class="bt-content">{{ $varone->email }}</span></td>
                            
                           
						   <td data-th="aadhar_card"><span class="bt-content">{{ $varone->stripeToken }}</span></td>
                           </tr>
                               @empty
                       
                          <tr>
						    <td data-th="Height" colspan="20">
        <p class="alert bg-danger text-white p-1">No data in table</p>
</td>
                          </tr>
                  @endforelse
									 
                        <thead>
                          <tr>
                             
                            <th>name  </th> 
 							    <th> email  </th>
                            <th>Paymnet Token   </th>
                             
                            
                          </tr>
                        </thead>
                  </table>
            
              <code class="js">
                
              </code>
            </div>
        </div>

    </div>
</div>
  
@include('admin/includes/footer')

<script>
$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>
 


@include('user/includes/header')
 

<div class="inner_content">  


                       @if(Session::has('insert_msg'))
<p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('insert_msg') }}</p>
@endif

                            <Br><Br>
                            <form role="form" method="POST" id="paymentForm" action="{{ url('/payment')}}">
                                @csrf
                                
                               <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="pk_test_yXgE1yxTZCdCgL0j82LzsZ3Y0086ez0wm9"
        data-amount="1000"
        data-name="test"
        data-description="test"
        data-image="https://www.logostack.com/wp-content/uploads/designers/eclipse42/small-panda-01-600x420.jpg"
        data-currency="inr"
        data-email="<?php echo Session::get('user_name'); ?>"
    >
    </script>
                              
                            </form>
                    </div>

            

 
 
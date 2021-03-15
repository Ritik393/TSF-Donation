<div class="row" style="padding:100px 300px;">
<div class="col-50">
<div class="cotainer">
<form action="payscript.php" method="post" style="padding: 25px;">

<div class="row" >
<div class="col-50">
<h3 style="text-align: center;margin:20px 10px;font-family: lato;">Checkout Form</h3>

<label for="fname"><i class="fa fa-user"></i> Full Name</label>
<input type="text" id="fname" name="name" placeholder= "John M. Doe">
<label for="email"><i class="fa fa-envelope"></i> Email</label>
<input type="text" id="email" name="email" placeholder= "John@example.com">
<input type="hidden" value="<?php echo 'OID'.rand(100,1000);?>" name="orderid">
<input type="hidden" value="<?php echo 1;?>" name="amount">
<label for="city"><i class="fa fa-mobile"></i> Mobile</label>
<input type="text" id="city" name="mobile" placeholder= "Mobile Number">
<label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
<input type="text" id="adr" name="address" placeholder= "11 sarafa bazar">




</div>
<div class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_GlLUR7a7Pon9Ir/view" data-text="Pay Now" data-color="#528FF0" data-size="large">
  <script>
    (function(){
      var d=document; var x=!d.getElementById('razorpay-embed-btn-js')
      if(x){ var s=d.createElement('script'); s.defer=!0;s.id='razorpay-embed-btn-js';
      s.src='https://cdn.razorpay.com/static/embed_btn/bundle.js';d.body.appendChild(s);} else{var rzp=window['__rzp__'];
      rzp && rzp.init && rzp.init()}})();
  </script>
</div>
    
</form>
</div>
</div>
</div>
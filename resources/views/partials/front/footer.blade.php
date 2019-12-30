<!-- FOOTER -->
<footer data-stellar-background-ratio="0.5">
  <div class="container">
       <div class="row">

            <div class="col-md-5 col-sm-12">
                 <div class="footer-thumb footer-info"> 
                      <h2>Hydro Company</h2>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                 </div>
            </div>

            <div class="col-md-2 col-sm-4"> 
                 <div class="footer-thumb"> 
                      <h2>Company</h2>
                      <ul class="footer-link">
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">Join our team</a></li>
                           <li><a href="#">Read Blog</a></li>
                           <li><a href="#">Press</a></li>
                      </ul>
                 </div>
            </div>

            <div class="col-md-2 col-sm-4"> 
                 <div class="footer-thumb"> 
                      <h2>Services</h2>
                      <ul class="footer-link">
                           <li><a href="#">Pricing</a></li>
                           <li><a href="#">Documentation</a></li>
                           <li><a href="#">Support</a></li>
                      </ul>
                 </div>
            </div>

            <div class="col-md-3 col-sm-4"> 
                 <div class="footer-thumb"> 
                      <h2>Find us</h2>
                      <p>123 Grand Rama IX, <br> Krung Thep Maha Nakhon 10400</p>
                 </div>
            </div>                    

            <div class="col-md-12 col-sm-12">
                 <div class="footer-bottom">
                      <div class="col-md-6 col-sm-5">
                           <div class="copyright-text"> 
                                <p>Copyright &copy; 2017 Your Company</p>
                           </div>
                      </div>
                      <div class="col-md-6 col-sm-7">
                           <div class="phone-contact"> 
                                <p>Call us <span>(+66) 010-020-0340</span></p>
                           </div>
                           <ul class="social-icon">
                                <li><a href="https://www.facebook.com/templatemo" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                           </ul>
                      </div>
                 </div>
            </div>
            
       </div>
  </div>
</footer>

<!-- MODAL -->
 <section class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
           <div class="modal-content modal-popup">

                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                     </button>
                </div>

                <div class="modal-body">
                     <div class="container-fluid">
                          <div class="row">

                               <div class="col-md-12 col-sm-12">
                                    <div class="modal-title">
                                         <h2>Hydro Co</h2>
                                    </div>

                                    <!-- NAV TABS -->
                                    <ul class="nav nav-tabs" role="tablist">
                                         <li class="active"><a href="#sign_up" aria-controls="sign_up" role="tab" data-toggle="tab">Create an account</a></li>
                                         <li><a href="#sign_in" aria-controls="sign_in" role="tab" data-toggle="tab">Sign In</a></li>
                                    </ul>

                                    <!-- TAB PANES -->
                                    <div class="tab-content">
                                         <div role="tabpanel" class="tab-pane fade in active" id="sign_up">
                                              <form action="#" method="post">
                                                   <input type="text" class="form-control" name="name" placeholder="Name" required>
                                                   <input type="telephone" class="form-control" name="telephone" placeholder="Telephone" required>
                                                   <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                   <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                   <input type="submit" class="form-control" name="submit" value="Submit Button">
                                              </form>
                                         </div>
                                         <div role="tabpanel" class="tab-pane fade in" id="sign_in">
                                              <form action="{{route('login.user')}}" method="post">
                                                @csrf
                                                   <input type="email" class="form-control" name="email" placeholder="Email" required>
                                                   <input type="password" class="form-control" name="password" placeholder="Password" required>
                                                   <input type="submit" class="form-control" name="submit" value="Submit Button">
                                                   <a href="#">Forgot your password?</a>
                                              </form>
                                         </div>
                                    </div>
                               </div>

                          </div>
                     </div>
                </div>

           </div>
      </div>
 </section>

<!-- SCRIPTS -->
<script src="{{ url('frontend') }}/js/jquery.js"></script>
<script src="{{ url('frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ url('frontend') }}/js/jquery.stellar.min.js"></script>
<script src="{{ url('frontend') }}/js/jquery.magnific-popup.min.js"></script>
<script src="{{ url('frontend') }}/js/smoothscroll.js"></script>
<script src="{{ url('frontend') }}/js/custom.js"></script>

</body>
</html>
<script src="{{ url('backend') }}/plugins/chartist-plugin-tooltips/js/chartist-plugin-tooltip.min.js"></script>
<script src="{{ url('backend') }}/js/bootstrap-notify.js"></script>
<script src="{{ url('backend') }}/plugins/sweetalert/js/sweetalert.min.js"></script>

<script type="text/javascript">
$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip();
   

    @if (session()->has('error'))
        $.notify({
            message: "{{ session('error') }}"
            },{
            type: 'danger',
            timer: 1000,
            placement: {
                from: 'top',
                align: 'right'
            }
        }); 
    @endif
    @if (session()->has('success'))
        $.notify({
            message: "{{ session('success') }}"
            },{
            type: 'success',
            timer: 1000,
            placement: {
                from: 'top',
                align: 'right'
            }
        }); 
    @endif
});
</script>
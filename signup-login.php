<!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Login/Signup</h4>
        </div>
        <div class="modal-body">
        <div class="row">

          <div class="col-md-6">
          	<h3>Sign up</h3>
          	<br>
          	<form class="form-horizontal" role="form">
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-10">
			      <input type="password" class="form-control" id="inputPassword1" placeholder="Repeat password">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-lg-offset-2 col-lg-10">
			      <button type="submit" class="btn btn-default">Sign up</button>
			    </div>
			  </div>
			</form>
          </div>

          <div class="col-md-6">
	          	<form class="form-horizontal" role="form" action="validate.php" method="post" >
				  <div class="form-group">
				  	<h3>Login</h3>
				  	<br>
				    <div class="col-lg-10">
				      <input type="email" class="form-control" id="inputEmail1" placeholder="Email">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-10">
				      <input type="password" class="form-control" id="inputPassword1" placeholder="Password">
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-offset-2 col-lg-10">
				      <div class="checkbox">
				        <label>
				          <input type="checkbox"> Remember me
				        </label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group">
				    <div class="col-lg-offset-2 col-lg-10">
				      <button type="submit" class="btn btn-default">Sign in</button>
				    </div>
				  </div>
				</form>
			</div>
          </div>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
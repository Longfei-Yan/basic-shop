<?php include 'public/header.php'; ?>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-12">
      <div class="card-body">
        <h5 class="card-title">注册</h5>
        <form action="doRegister.php" method="post">
        	<div class="form-group">
			    <label for="exampleInputEmail1">Nickname</label>
			    <input type="text" name="nickname" class="form-control" id="exampleInputNickname" aria-describedby="emailHelp">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Confirm Password</label>
			    <input type="password" name="confirmPwd" class="form-control" id="exampleInputPassword1">
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form> 
      </div>
    </div>
  </div>
</div>

<?php include 'public/footer.php'; ?>
<?php include 'public/header.php'; ?>



<div class="card mb-3" style="max-width: 540px;">
  <div class="row no-gutters">
    <div class="col-md-4">
      <img src="uploads/image1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">登录</h5>
        	<form action="doLogin.php" method="post">
			  <div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
			    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
			  </div>
			  <div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
			  </div>
			  <div class="form-group form-check">
			    <input type="checkbox" name="autoLogin" class="form-check-input" id="exampleCheck1" value="1">
			    <label class="form-check-label" for="exampleCheck1">三小时内自动登录</label>
			    <label><a href="">忘记密码？</a></label>
			  </div>
			  <div class="form-group">
			    没有账号？请<label><a href="register.php">注册</a></label>
			  </div>
			  <button type="submit" class="btn btn-primary">Submit</button>
			</form> 
      </div>
    </div>
  </div>
</div>

<?php include 'public/footer.php'; ?>
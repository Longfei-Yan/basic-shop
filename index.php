<?php include 'public/header.php'; ?>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="uploads/image2.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>登录注册DEMO</h5>
        <p>目前只有登录注册功能的演示，其它功能后期陆续上线...  敬请期待！所有图片都来自网络，如有侵权请联系author，邮箱：a1343256895c@foxmail.com</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="uploads/image3.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>登录注册DEMO</h5>
        <p>目前只有登录注册功能的演示，其它功能后期陆续上线...  敬请期待！所有图片都来自网络，如有侵权请联系author，邮箱：a1343256895c@foxmail.com</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="uploads/image4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>登录注册DEMO</h5>
        <p>目前只有登录注册功能的演示，其它功能后期陆续上线...  敬请期待！所有图片都来自网络，如有侵权请联系author，邮箱：a1343256895c@foxmail.com</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">提示：</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        确定要退出嘛？
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
        <a class="btn btn-primary" href="doLogin.php?act=logout">确认</a>
      </div>
    </div>
  </div>
</div>
<?php include 'public/footer.php'; ?>



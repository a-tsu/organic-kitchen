<!-- headerファイルの取得 -->
<?php include_once("../include/header.inc");?>
<body>
  <header class="head">
    <h2>商品の購入</h2>
  </header>
  <div class="content">
    <!-- 商品価格の定数を取得 -->
    <?php include_once("../include/define.inc");?>
    <p>★ 購入したい商品をお選びください。</p>
    <form class="form-horizontal" method="get" action="confirm.php">
      <!--商品A-->
      <img src="http://illustrain.com/img/work/2016/illustrain04-bento01.png" height=100px alt="商品A">
      <label for="nameProductA"  class="col-sm-1 control-label">商品A </label>
      <div class="form-inline">
        <label for="priceProductA" class="col-sm-1 control-label"> <? echo A_PRICE;?>円 ×</label>
        <div class="col-sm-11">
          <input class="form-control" type="text" name="a" placeholder="1"> 個
        </div>
      </div>
      <!--商品B-->
      <img src="http://illustrain.com/img/work/2016/illustrain04-bento02.png" height=100px alt="商品B">
      <label for="nameProductB"  class="col-sm-1 control-label">商品B </label>
      <div class="form-inline">
        <label for="priceProductB" class="col-sm-1 control-label"> <? echo B_PRICE;?>円 ×</label>
        <div class="col-sm-11">
          <input class="form-control" type="text" name="b" placeholder="1"> 個
        </div>
      </div>
      <!--商品B-->
      <img src="http://illustrain.com/img/work/2016/illustrain04-bento03.png" height=100px alt="商品C">
      <label for="nameProductC"  class="col-sm-1 control-label">商品C </label>
      <div class="form-inline">
        <label for="priceProductC" class="col-sm-1 control-label"> <? echo C_PRICE;?>円 ×</label>
        <div class="col-sm-11">
          <input class="form-control" type="text" name="c" placeholder="1"> 個
        </div>
      </div>
      <div class="col-sm-offset-1 col-sm-10">
        <input class="btn btn-primary btn-lg" type="submit" value="確認">
      </div>
    </form>
  </div>
  <footer></footer>
  </body>
</html>

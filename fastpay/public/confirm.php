<!-- headerファイルの取得 -->
<?php include_once("../include/header.inc");?>
<body>
  <header class="head">
    <h2>購入確認ページ</h2>
  </header>
  <div class="content">
    購入内容：
    <br>
    <div class="content">
      <!-- //商品価格の定数を取得 -->
      <?php 
        include_once("../include/define.inc");
      
          // getパラメータの受け取り
          $a_count = $_GET["a"];
          $b_count = $_GET["b"];
          $c_count = $_GET["c"];
          // 各商品の合計金額
          $a_sum = A_PRICE * $a_count;
          $b_sum = B_PRICE * $b_count;
          $c_sum = C_PRICE * $c_count;
          $sum = $a_sum + $b_sum + $c_sum;
          
          if($a_count){echo "A商品 x ".$a_count." = ".$a_sum."円<br>";}
          if($b_count){echo "B商品 x ".$b_count." = ".$b_sum."円<br>";}
          if($c_count){echo "C商品 x ".$c_count." = ".$c_sum."円<br>";}
      ?>
      <br>
      合計代金：<?php echo $sum;?> 円
      <br><br>
      上記の購入でよろしければ
      <br>
      下記お支払いボタンを押してください。
      </div>
      <br>
      <!--以下、Fastpay用ボタン作成form-->
      <form action="charge.php" method="POST">
      <script
        src="https://s.yimg.jp/images/wallet/fastpay/js/fastpay-v2-current.js" class="fastpay-button"
        data-key="dj0zaiZpPWdteFlvNzRtS2FoSCZzPWNvbnN1bWVyc2VjcmV0Jng9ZTU-"
        data-amount=<?php echo $sum;?>
      >
      </script>
    </div>
  </form>
  <footer></footer>
</body>
</html>

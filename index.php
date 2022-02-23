<html lang="ja">
  <title>Myogp</title>
<body>
  <h1>
    Myogp
  </h1>
  <p>
    ogpをカスタマイズします。
    タイトルや画像、説明など、あなたの変えたいように変えることができます。
  </p>
  
<form action="" method="post">
  <label>title<input type="text" name="title"></label>
  <label>img_src<input type="url" name="img" ></label>
<label>description<input type="text" name="desc"></label>
  <label>URL<input type="text" name="url"></label>
  <input type="submit">
  </form>
  <?php if(isset($_POST['title'])) { $title = $_POST['title']; }else{$title="sample";}
  if(isset($_POST['img'])){$img_src=$_POST['img'];}else{$img_src="https://cdn.glitch.global/4e71374c-3110-4260-99b1-163a70105184/sample.jpg?v=1643688660889";}
if(isset($_POST['desc'])){$description =$_POST['desc'];}else{$description="サンプルです";}
  if(isset($_POST['url'])){$url=$_POST['url'];}else{$url="./index.php";}?>
  <?php $post="title=$title&img_src=$img_src&description=$description&url=$url";
  echo $post?>
  <br/>
<a href="/GET.php?<?php echo $post;?>">Copy and share</a>
  </body>
</html>

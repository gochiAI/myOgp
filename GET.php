<?php $title=$_GET["title"];$$description=$_GET["description"];$img_src=$_GET["img_src"];$url=$_GET["url"];?>
<title><?php echo $title;?></title>
<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="og:url" content="https://myogp.glitch.me/sample.php?title=<? echo $title;?>&<?echo $img_src;?>" />
  <meta property="og:type" content="website" />
  <?php echo "<meta property='og:title' content='$title'>";?>
  <meta property="og:description" content="<?php echo $description;?>" />
  <meta property="og:image" content="<?php echo $img_src;?>" />
<?php $urls=parse_url($url);
  $url = $urls["scheme"]."://".$urls["host"].$urls['path'];
  header("refresh:0.1; Location: $url")
?>

</head>
<h1>
  <a href="<?php
         echo $url?>">Click here</a>
  
  <h5 >
  </h5>
</h1>

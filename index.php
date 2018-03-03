<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Quick Prototype</title>
	<style>
	</style>
</head>
<body>
<?
  $page = $_GET['page'];
  if($page == "index"){

  }elseif($page == "page-1"){
    ?>
      <h1>Page 1</h1>
    <?
  }elseif($page == "page-2"){
    ?>
      <h1>Page 2</h1>
    <?
  }elseif($page == "page-3"){
    ?>
      <h1>Page 3</h1>
    <?
  }else{
    ?>
      <h1>No page found!</h1>
    <?
  }
  ?>
</body>
</html>
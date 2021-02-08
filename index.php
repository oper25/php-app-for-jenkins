<?
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
  $file = '/tmp/sample-app.log';
  $message = file_get_contents('php://input');
  file_put_contents($file, date('Y-m-d H:i:s') . " Received message: " . $message . "\n", FILE_APPEND);
}
else
{
?>
<!doctype html>
<html>
<head>
<style>
body { background: black }
</style>
</head>
<body>
<center>
<font color="gold";>
<h2>Privet from Belarus</h2>
<p><font color="red">This is deploying release from git to AWS ELASTICBeanstalk</font></p>

</font>
</center>
</body>
</html>	
<? 
} 
?>

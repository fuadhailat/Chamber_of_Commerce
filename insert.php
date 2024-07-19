<!-- صفحة PHP لإدخال البيانات إلى قاعدة البيانات -->
<?php


$user='root';
$pass='';
$host='localhost:3306';
$database='cha';

$conn=mysqli_connect($host,$user,$pass) or die('SHoo malak  ??? ma feesh eshi zay heak');
mysqli_select_db($conn,$database) or die('el connection is wrong taba3ak ya man');


  // استقبال البيانات من النموذج
  $national_id = $_POST['national_id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $course = $_POST['course'];
  $time = $_POST['time'];

  // تنفيذ استعلام SQL لإدخال البيانات إلى الجدول
  $sql = "INSERT INTO users (national_id, name, phone, course, time) VALUES ('$national_id', '$name', '$phone', '$course', '$time')";
  $result = mysqli_query($conn, $sql) or die("حدث خطأ في تنفيذ الاستعلام");

  // إغلاق الاتصال بقاعدة البيانات
  mysqli_close($conn);

  // عرض رسالة نجاح
  echo "تم تسجيل بياناتك بنجاح";
?>

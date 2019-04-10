<?php
require("../conn.php");
if($act=="add")
{
$sql="INSERT INTO `notice` (`title` ,`content` ) VALUES ( '$title', '$content')";

$result=mysql_query($sql);
 header("location:notice.php?action=list");
}
if($act=="edit")
{
$sql="update notice set title='$title',content='$content' where id=$id";
$result=mysql_query($sql);
 header("location:notice.php?action=list");

}
if ($act=="del")
{
$sql="delete from notice where id=$id";
$result=mysql_query($sql);
 header("location:notice.php?action=list");
//?action=list
}
?>
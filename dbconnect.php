<?php
if(!mysql_connect("localhost","root","hunsy"))
{
     die('oops connection problem ! --> '.mysql_error());
}
if(!mysql_select_db("vfms"))
{
     die('oops database selection problem ! --> '.mysql_error());
}
?>
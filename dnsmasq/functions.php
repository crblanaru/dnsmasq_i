<?php

if(isset($_POST['submit'])){
  echo "Hello World!: ".$_POST['text'];
  }

if(isset($_POST['addhost'])){
  exec('rm /etc/dnsmasq.hosts');
  exec('touch /etc/dnsmasq.hosts');
  $fw = fopen('/etc/dnsmasq.hosts', 'r+');
  $data = $_POST['text'];
  $fd = fwrite($fw,$data);
  fclose($fw);
  exec("/etc/init.d/dnsmasq restart");
  echo "<meta http-equiv='refresh' content='3'><p align='center'>Edited file and restarted dnsmasq!</p></meta>";
}
         
  
?>

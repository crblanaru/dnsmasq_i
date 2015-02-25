<?php
$loc = '/etc/dnsmasq.hosts';
// Checking that the file exists for the initial setup
if (file_exists($loc)){
  $fd = file_get_contents($loc);                    
  $fd = str_replace(array("\r", "\n"," "), '',$fd);     
  if ($fd == ""){                                   
    echo "We are NOT spoofing any hosts."; echo $fd;
    } else {                        
      echo "We ARE spoofing hosts.";
   } 
} else {
  exec('/pineapple/components/infusions/dnsmasq/setup.sh');
  parent.window.location.reload();
}
?>

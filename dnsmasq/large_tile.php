<h1>Spoofed DNS Hosts</h1>
<form action="/components/infusions/dnsmasq/functions.php" method="POST" onSubmit="$(this).AJAXifyForm(callback); return false;">
  <?php
  $content = file_get_contents("/etc/dnsmasq.hosts");               
    echo "<textarea name='text' rows='10' cols='80'>" . ($content) . "</textarea>";
  ?>
  <br><br>
  <input type="submit" name="addhost" value="Edit Hosts" />
</form>
<br>
<p>DNS Hosts format example:</p>
<p>172.16.42.1 test.com www.test.com</p>
<p>172.16.42.1 example.com ns1.example.com</p>
<script type="text/javascript">

  function callback(data){
    popup(data);
  }
      
</script>

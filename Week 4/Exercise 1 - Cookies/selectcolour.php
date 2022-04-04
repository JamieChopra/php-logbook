<html>
  <head><title>Select colour page</title></head>
    <body>
      <?$cookieName='numberqty';
        setcookie($cookieName, $_POST[txtqty]); ?>
      <?echo "Select the colour for the $_POST[txtqty] widgets you are ordering"; ?>
      <form action="confirmation.php"  method="post">
      <select name="selcolour">
   	  <option>white</option>
	  <option>red</option>
	  <option>yellow</option>
	  <option>green</option>
	  <option>blue</option>
        </select>
        <br/><br/>	
        <input type="submit" value="Buy"/>

      </form>
   </body>
</html>	

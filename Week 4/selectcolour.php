<html>
  <head><title>Select colour page</title></head>
    <body>
      <form action="confirmation.php"  method="post">
	Select the colour for the
  <input type="hidden" name="hdqty" value="<?php echo $_POST['txtqty'] ?>"/> 
  widgets you are ordering
  <?php $totalprice= (hdqty * txtprice)?>
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

<html>
  <head>
    <script src="http://code.jquery.com/jquery-latest.min.js"/>
    <script src="js/jquery.validate.js"></script>
    <title>Car Picker</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <?php include "header.php";?>
      <h2 align="center">Car Picker</h2>
      <form action="CarForm.php" id="fx" method ="POST">
          <p><label for="emailAddr">Email Address: <input name="emailAddr" id="emailAddr" type="email" size="30" class="reqd" required/></label></p> 
          <p><label for="color">Colors: 
            <select name="color" id="color" class="reqd" required>
                <option value="" selected="selected"> Choose a color</option>
                <option value="Red">Red</option>
                <option value="Green">Green</option>
                <option value="Blue">Blue</option>
            </select>
          </label></p>
          <p>Options:
            <label for="pWindows"><input type="checkbox" name="pWindows" id="pWindows" value="Yes" required/>Power Windows</label>
          </p>
          <p><label for="DoorCtL">Doors:&nbsp;&nbsp;
            <input type="radio" id="twoDoor" name="DoorCtl" value="twoDoor" class="radio" required/>Two
            <input type="radio" id="fourDoor" name="DoorCtl" value="fourDoor" class="radio" required/>Four
          </label></p>
          <p><label for="zip"> Enter your Zip code: <br />
                Zip: <input id="zip" type="text" size="5" maxlength="5" class="isZip dealerlist" required name="zip"/>             
          </label> </p>
          <p><input type="submit" value="Submit"  />&nbsp;<input type="reset" /></p>
      </form>

      <script type="text/javascript">
        $("#fx").validate();
      </script>
  </body>
</html>
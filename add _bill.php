<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Example Form</title>
  </head>
  <body>
    <form>
      <fieldset>
        <legend>Personal Information</legend>
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone"><br>
      </fieldset>
      <fieldset>
        <legend>Shipping Information</legend>
        <label for="address">Address:</label>
        <textarea id="address" name="address"></textarea><br>
        <label for="city">City:</label>
        <input type="text" id="city" name="city"><br>
        <label for="state">State:</label>
        <input type="text" id="state" name="state"><br>
        <label for="zip">Zip:</label>
        <input type="text" id="zip" name="zip"><br>
      </fieldset>
      <input type="submit" value="Submit">
    </form>
  </body>
</html>

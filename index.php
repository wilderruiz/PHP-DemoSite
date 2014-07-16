<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="Style/ControlPanel.css"/>
<link rel="stylesheet" href="Style/Avatars.css"/>
<script type="text/javascript" src="Scripts/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="Scripts/Action.js"></script>
<title>Avatar Game</title>
</head>

<body>
<div class="mainPage">
<div id="controller">
	<button id="up"></button>
  <button id="down"></button>
  <button id="left"></button>
  <button id="right"></button>
  <button id="dance">Dance</button>
  <button id="stopDance">Stop</button>
  <button id="myAvatar">Create an Avatar</button>
</div>
  <div class="avatarContainer"><img src="Library/MonoTest/mono.png" height="150" width="150" class="mono"/></div>
  
<!--HIDDEN CONTROL PANEL-->
<!--START-->
	<form action="registration.php" method="get" class="registration">
  	<table>
    	<tr>
      	<td>Name Your Avatar</td>
      	<td><input type="text" id="avatar" name="avatar"/></td>
      </tr>
      <tr>
      	<td>Choose Theme</td>
      	<td>
        	<select name="color" id="colorTheme">
          	<option label="Select a color" disabled="disabled"></option>
            <option>Red</option>
            <option>Black</option>
            <option>Pink</option>
            <option>Purple</option>
            <option>Orange</option>
            <option>Yellow</option>
        	</select>
        </td>
      </tr>
      <tr>
      	<td>Select Gender</td>
      	<td>
        	<input type="radio" name="gender" value="male"/>Male<br />
          <input type="radio" name="gender" value="female"/>Female<br />
        </td>
      </tr>
      <tr><td></td><td><input type="submit" value="OK"/></td></tr>
    </table>
  </form>  
<!--END-->  
<!--Trying to see if I can avoid using a form:--> 
<textarea id="textArea"></textarea>
</div>
</body>
</html>

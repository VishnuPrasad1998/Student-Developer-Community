<?php  include('skillserver.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Skill info</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
</head>
<body>
	<form method="post" action="skillserver.php" >
                <head>skill info</head>
		<div class="input-group">
			<label>Skillname</label>
			<input type="text" name="skillname" value="<?php echo $skillname; ?>">
		</div>
        <div class="input-group">
			<label>skilllevel</label>
			<input type="text" name="skilllevel" value="<?php echo $skilllevel; ?>">
		</div>
		<div class="input-group">
			<label>username</label>
			<input type="text" name="stid" value="<?php echo $stid; ?>">
		</div>
		<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Save</button>
  	</div>
	</form>
</body>
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
</html>


<html>
<head>
<title>SPOT_FORM</title>
</head>
<body>
<form action='api/spot' method="POST">
{{ csrf_field() }}
PLACE:<input type="text" name="place"><br>
address:<input type="text" name="address"><br>
budget:<input type="text" name="budget"><br>
averageTime:<input type="text" name="averageTime"><br>
regularHoliday:<input type="text" name="regularHoliday"><br>
businessHours:<input type="text" name="businessHours"><br>
genre:<input type="text" name="genre"><br>
keyword:<input type="text" name="keyword"><br>
season:<input type="text" name="season"><br>
title:<input type="text" name="title"><br>
overview:<input type="text" name="overwiew"><br>
comment:<input type="text" name="comment"><br>
<input type="submit" value="send">
</form>
</body>
</html>
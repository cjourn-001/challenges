<!-- 
	Using everything you have learned and some googling

	pretend this is a post page and someone is trying to figure out
	what someones favorite color is... I have provided you this associative
	array so come up with the best way of returning that persons color

 -->

<!DOCTYPE html>
<html>
    <head></head>
	<body>
        <p>
          <?php
          	$name = 'Eric'; // this came from the previous page as a post variable

          	// this came from the db
			$nameToColorArray = [
	          'Alex' => 'blue',
	          'Joseph' => 'green',
	          'James' => 'red',
	          'Eric' => 'black',
	          'Mark' => 'green',
	          'Lauren' => 'pink',
	          'Michael' => 'blue',
	          'Derek' => 'purple',
	          'Tru' => 'red',
	         ];

	         if (array_key_exists($name,$nameToColorArray)){
	         	echo $nameToColorArray[$name];
	         }
	         else{
	         	echo "This name is not in the database";}
          ?>
        </p>
	</body>
</html>
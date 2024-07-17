<html>
<body>
    <?php
$name = "Luan";
$age = 27;
$eye_color = "brown";
$family = ['Father','Mother','Brother 1','Brother 2','Brother 3','doggy'];
$other = array(
    0 => "test",
    1 => "test2"
);
$hungry = true;
?>
<p>Hi my name is <?php echo $name?>.</p>
<p>I am <?php echo $age?> years old.</p>
<p>My eyes are <?php echo $eye_color?>.</p>
<p>The first person in my family is <?php echo $family[1]?>.</p>
<p>The first person in my family is <?php echo $other[1]?>.</p>
<p>Hungry am I ? <?php echo $hungry ? 'true':'false'; ?>.</p>
</body>
</html>
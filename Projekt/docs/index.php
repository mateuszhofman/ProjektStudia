<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./syle.css"> -->
    <title>Document</title>
</head>

<body>
<style>
    
table {
	width: 50%;
	border-collapse: collapse;
	margin: 20px auto;
	text-align: center;
}
th, td {
	border: 1px solid black;
	padding: 10px;
}
th {
	background-color: #f2f2f2;
}
</style>
    <table>
        <tr>
            <th>Liczba</th>
            <td>50</td>
        </tr>
    
        <?php
        $liczba = 50;
    
        do {
            $liczba2 = rand(1, 9);
            $liczba -= $liczba2;
            echo "<tr><td>Minus $liczba2</td><td>$liczba</td></tr>";
        } while ($liczba > 0);
        ?>
    
    </table>
    

</body>

</html>
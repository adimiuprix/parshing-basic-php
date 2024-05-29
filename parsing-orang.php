
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            font-family: verdana, arial, sans-serif;
            font-size: 11px;
            color: #333333;
            border-width: 1px;
            border-color: #FFA800;
            border-collapse: collapse;
        }
        table th {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA800;
            background-color: skyblue;
            color: #ffffff;
        }
        table tr:hover td {
            cursor: pointer;
        }
        table tr:nth-child(even) td{
            background-color: skyblue;
        }
        table td {
            border-width: 1px;
            padding: 8px;
            border-style: solid;
            border-color: #FFA800;
            background-color: #ffffff;
        }
    </style>
</head>
<body>
<?php  
  $data = file_get_contents('orang.json');  
  $tampilkan = json_decode($data, false);  
?>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Umur</th>
            </tr>
        </thead>
        <tr>
            <td><?php echo $tampilkan->name; ?></td>
            <td><?php echo $tampilkan->email; ?></td>
            <td><?php echo $tampilkan->age; ?></td>
        </tr>
    </table>
</body>
</html>
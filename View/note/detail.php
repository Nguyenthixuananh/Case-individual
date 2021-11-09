<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iNote</title>
    <link rel="stylesheet" href="../Css/note-list.css">
    <style>
        .style-table {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            width: 85%;
        }

        .style-table thead tr {
            background-color: #212529;
            color: white;
            text-align: center;
        }

        .style-table th, .style-table td {
            padding: 12px 15px;
        }
    </style>
</head>
<body>
<table class="style-table">
    <thead>
    <tr>
        <th style="width: 100px">Title</th>
        <th>Description</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><p style="text-align: center"><strong><?php if (isset($note)) {
                        echo $note["title"];
                    } ?></strong></p></td>
        <td style="background-color: cornsilk" rowspan="3"><p><?php if (isset($note)) {
                    echo $note["content"];
                } ?></p></td>
    </tr>
    <tr>
<!--        <td>Type: <p>--><?php //if (isset($note)) {
//                    echo $note["type_id"];
//                } ?><!--</p></td>-->
<!--    </tr>-->
    </tbody>
</table>
<a href="index.php"><button style="width: 180px;background-color: #387448"><i style="color: white">Back</i></button></a>
<a href="index.php?page=note-update&id=<?php echo $note["id"] ?>"><button style="width: 180px;background-color: #FECA2C"><i style="color: black">Update</i></button></a>
<a href="index.php?page=note-delete&id=<?php echo $note["id"] ?>"><button style="width: 180px;background-color: #BD423A"><i style="color: white">Delete</i></button></a>






<!--<div class="card border-primary mb-3" style="max-width: 18rem;">-->
<!--    <div class="card-header">NOTE</div>-->
<!---->
<!--    <div class="card">-->
<!--        <h5>--><?php //if (isset($note)) {echo $note["title"];} ?><!--</h5>-->
<!--        <p>--><?php //if (isset($note)) {echo $note["content"];} ?><!--</p>-->
<!--    </div>-->
</body>
</html>
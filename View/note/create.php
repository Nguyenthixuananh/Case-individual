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
<form action="" method="post">
    <table class="style-table">
        <thead>
        <tr>
            <th>iNote</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody style="background-color: cornsilk">

        <tr>
            <td>Title</td>
            <td><input style="width: 100%" type="text" name="title" placeholder="Title here"></td>
        </tr>
        <tr>
            <td>Content</td>
            <td><textarea id="" rows="5" style="width: 100%" name="content" placeholder="Content here"></textarea></td>
        </tr>
        <tr>
            <td>Tag</td>
            <td>
                <select id="cars" name="type_id">
                    <?php foreach ($types as $type) : ?>
                        <option value="<?php echo $type["id"]?>"><?php echo $type["type_name"]?></option>
                    <?php endforeach;?>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <a href="index.php?page=note-list"><button style="width: 100%;background-color: #387448"><i style="color: white">Back</i></button></a>
            </td>
            <td>
                <button style="width: 50%;background-color: #FECA2C" type="reset">Reset</button><button style="width: 50%;background-color: #FECA2C" type="submit">Add note</button>
            </td>
        </tr>
        </tbody>
</form>
</body>
</html>




<form action="" method="post">
    <select id="cars" name="type_id">
        <?php foreach ($types as $type) : ?>
        <option value="<?php echo $type["id"]?>"><?php echo $type["type_name"]?></option>
        <?php endforeach;?>
    </select>
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    <button type="submit">Add new note</button>
<!--    <button class="btn btn-primary"><a style="color: #fefefe;lighting-color:blue" href="index.php?page=note-list">Back</a></button>-->
    <a type="button" class="btn btn-dark" href="index.php?page=note-list">Back</a>

</form>


<form action=""method="post">
    <!--    <input type="text" name="type_id"placeholder="TypeID" value="--><?php //echo $note['type_id']?><!--">-->
    <input type="text" name="type_name" value="<?php echo $type["type_name"]; ?>">
    <button type="submit">Sửa</button>
    <button><a href="index.php?page=type-list">Back</a></button>
</form>
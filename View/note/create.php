

<form action="" method="post">
    <select id="cars" name="type_id">
        <?php foreach ($types as $type) : ?>
        <option value="<?php echo $type["id"]?>"><?php echo $type["type_name"]?></option>
        <?php endforeach;?>
    </select>
    <input type="text" name="title" placeholder="Title">
    <input type="text" name="content" placeholder="Content">
    <button type="submit">Thêm mới</button>
</form>


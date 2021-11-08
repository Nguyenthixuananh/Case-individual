<form action=""method="post">
    <input id="title" type="text" name="title"placeholder="Title" value="<?php echo $note["title"]?>">
    <input id="content" type="text" name="content"placeholder="Content" value="<?php echo $note["content"]?>">
    <button type="submit">Sửa</button>
    <button><a href="index.php">Back</a></button>
</form>
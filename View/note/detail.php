<!DOCTYPE html>
<html>
<head>

</head>
<body>

<div class="card border-primary mb-3" style="max-width: 18rem;">
    <div class="card-header">NOTE</div>

    <div class="card">
        <h5><?php if (isset($note)) {echo $note["title"];} ?></h5>
        <p><?php if (isset($note)) {echo $note["content"];} ?></p>
    </div>


</body>
</html>
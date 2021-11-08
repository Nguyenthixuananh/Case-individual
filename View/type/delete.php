<?php
include_once "Model/TypeModel.php";
$typeModel = new TypeModel();
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    if ($typeModel->getById($id)!==null)
        $note = $typeModel->delete($id);
    header("location:index.php");
}

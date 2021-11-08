<?php

include_once "Model/TypeModel.php";
class TypeController
{
    private $typeModel;
    public function __construct()
    {
        $this->typeModel = new TypeModel();
    }

    public function index()
    {
        $types = $this->typeModel->getAll();
        include_once "View/type/list.php";
    }
    public function showFormCreate()
    {
        // lay het types
        $types = $this->typeModel->getAll();
        include_once "View/type/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "type_name" => $data['type_name']
        ];
        $this->typeModel->create($data2);
        header("location:index.php?page=type-list");
    }

    public function deleteType($id)
    {
        if ($this->typeModel->getById($id) !== null) {
            $this->typeModel->delete($id);
            header("location:index.php?page=type-list");
        }
    }

    public function showDetail($id)
    {
        $note = $this->typeModel->getById($id);
        include_once "View/type/detail.php";
    }

    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $type = $this->typeModel->getById($id);
        include_once "View/type/update.php";
    }

    public function editType($id,$request)
    {
        $note = $this->typeModel->getById($id);
        $data = [
            "type_name" => $request['type_name'],
            "id" => $id
        ];
        $this->typeModel->edit($data);
        header("location:index.php?page=type-list");
    }

}
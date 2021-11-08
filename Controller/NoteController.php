<?php

include_once "Model/NoteModel.php";
include_once "Model/TypeModel.php";

class NoteController
{
    private NoteModel $noteModel;
    private TypeModel $typeNodeModel;
    public function __construct()
    {
        $this->noteModel = new NoteModel();
        $this->typeNodeModel = new TypeModel();
    }

    public function index()
    {
        $notes = $this->noteModel->getAll();
//        var_dump($notes);
//        die();
        include_once "View/note/list.php";
    }

    public function showFormCreate()
    {
        // lay het types
        $types = $this->typeNodeModel->getAll();
        include_once "View/note/create.php";
    }

    public function create($data)
    {
        $data2 = [
            "type_id" =>$data['type_id'],
            "title" => $data['title'],
            "content" => $data['content']

        ];
        $this->noteModel->create($data2);
        header("location:index.php");
    }

    public function deleteNote($id)
    {
        if ($this->noteModel->getById($id) !== null) {
            $this->noteModel->delete($id);
            header("location:index.php");
        }
    }

    public function showDetail($id)
    {
        $note = $this->noteModel->getById($id);
        include_once "View/note/detail.php";
    }

    public function showFormUpdate()
    {
        $id = $_REQUEST["id"];
        $product = $this->noteModel->getById($id);
        include_once "View/note/update.php";
    }

    public function editNote($id,$request)
    {
        $note = $this->noteModel->getById($id);
        $data = [
            "title" => $request['title'],
            "content" => $request['content'],
            "id" => $id
        ];
        $this->noteModel->edit($data);
        header("location:index.php");
    }

}
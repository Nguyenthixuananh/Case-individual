<?php

include_once "database/DB.php";

class NoteModel
{
    private $table;
    private $dbConnect;

    public function __construct()
    {
        $this->table = "notes";
        $db = new DB();
        $this->dbConnect = $db->connect();
    }

    public function getAll()
    {
//        $sql = "SELECT * FROM $this->table";
        $sql = "SELECT `notes`.id, `types`.type_name as `type_name`, `notes`.title as `note_name`, `notes`.content as `note_content`
FROM `notes`
         INNER join `types` on types.id = notes.type_id";

        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetchAll();


    }

    public function getById($id)
    {
        $sql = "SELECT * FROM $this->table WHERE id = $id";

//        $sql = "SELECT `types`.type_name, `notes`.title, `notes`.content FROM `notes`
//         INNER join `types` on types.id = notes.type_id  WHERE id= $id";
        $stmt = $this->dbConnect->query($sql);
        return $stmt->fetch();
    }

    public function create($data)
    {
        $sql = "INSERT INTO $this->table(`type_id`,`title`,`content`) VALUE(?,?,?)";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(1, $data["type_id"]);
        $stmt->bindParam(2, $data["title"]);
        $stmt->bindParam(3, $data["content"]);
        $stmt->execute();
    }

    public function delete($id)
    {
        $sql = "DELETE FROM $this->table WHERE id= :id";
        $stmt = $this->dbConnect->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
    }

    public function edit($data)
    {
        try {
            $sql = "UPDATE $this->table SET `title`=?,`content`=? WHERE `id` = ?";
            $stmt = $this->dbConnect->prepare($sql);
            $stmt->bindParam(1, $data["title"]);
            $stmt->bindParam(2, $data["content"]);
            $stmt->bindParam(3, $data["id"]);
            $stmt->execute();
        } catch (Exception $exception) {
            echo $exception->getMessage();
        }
    }

}
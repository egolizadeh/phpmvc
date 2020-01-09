<?php

class Model_index extends Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function StudentInfo()
    {
        $Query = "SELECT * FROM tbl_student";
        $stmt = $this->connect->prepare($Query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
}

?>
<?php
class id{
    public static function genrate_id()
    {
        include 'sqlconnect.php';
        $sql = "SELECT id from register ORDER BY id DESC LIMIT 1";
        $result = $con->query($sql);
        $id = null;
        if($result->num_rows>0) {
            $row = $result->fetch_assoc();
            $id = $row['id'];
            $id = substr($id,1);
            $id = $id + 1;
            if($id<10)
            $id = "id";
            elseif ($id<100)
            $id = "id";
            elseif ($id<100)
            $id = "id";
        } else {
            $id = '1';
        }
        return $id;
        $con->close();
    }
}
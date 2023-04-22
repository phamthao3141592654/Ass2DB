<?php
class AdminModel extends Database
{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
}
?>
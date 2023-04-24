<?php
class AdminModel extends Database
{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    // public function getRooms()
    // {
    //     $sql = "SELECT * FROM rooms";
    //     $result = $this->_query($sql);
    //     $rooms = [];
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         $rooms[] = $row;
    //     }
    //     return $rooms;
    // }
    public function getRooms()
    {
        $sql = "SELECT * FROM rooms";
        $result = mysqli_query($this->connect, $sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $rooms;
    }

    // get members
    public function getMembers()
    {
        $sql = "SELECT * FROM members";
        $result = mysqli_query($this->connect, $sql);
        $members = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $members;
    }

    public function getRoomById($id)
    {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        $result = mysqli_query($this->connect, $sql);
        $room = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $room;
    }

    public function addMember($firstname, $lastname, $address)
    {
        $sql = "INSERT INTO members (firstname, lastname, address) VALUES ('$firstname', '$lastname', '$address')";
        $result = mysqli_query($this->connect, $sql);
        mysqli_free_result($result);
        return $result;
    }

    public function updateMember($id, $firstname, $lastname, $address)
    {
        $sql = "UPDATE members SET firstname = '$firstname', lastname = '$lastname', address = '$address' WHERE id = '$id'";
        $result = mysqli_query($this->connect, $sql);
        mysqli_free_result($result);
        return $result;
    }

    public function deleteMember($id)
    {
        $sql = "DELETE FROM members WHERE id = '$id'";
        $result = mysqli_query($this->connect, $sql);
        mysqli_free_result($result);
        return $result;
    }
}
?>
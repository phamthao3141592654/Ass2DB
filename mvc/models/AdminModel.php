<?php
class AdminModel extends Database
{
    private function _query($sql)
    {
        return mysqli_query($this->connect, $sql);
    }
    public function getRooms()
    {
        $sql = "SELECT * FROM rooms";
        $result = mysqli_query($this->connect, $sql);
        $rooms = mysqli_fetch_all($result, MYSQLI_ASSOC);
        mysqli_free_result($result);
        return $rooms;
    }

    public function getRoomById($id)
    {
        $sql = "SELECT * FROM rooms WHERE id = $id";
        $result = mysqli_query($this->connect, $sql);
        $room = mysqli_fetch_assoc($result);
        mysqli_free_result($result);
        return $room;
    }

    public function addRoom($roomname, $price, $img)
    {
        $sql = "INSERT INTO rooms (roomName, price, image) VALUES ('$roomname', '$price', '$img')";
        $result = mysqli_query($this->connect, $sql);
        mysqli_free_result($result);
        return $result;
    }

    public function updateRoom($id, $roomname, $price, $img)
    {
        $sql = "UPDATE rooms SET roomName = '$roomname', price = '$price', image = '$img' WHERE id = '$id'";
        $result = mysqli_query($this->connect, $sql);
        mysqli_free_result($result);
        return $result;
    }

    public function deleteRoom($id)
    {
        $sql = "DELETE FROM rooms WHERE id = '$id'";
        $result = mysqli_query($this->connect, $sql);
        mysqli_free_result($result);
        return $result;
    }
}
?>
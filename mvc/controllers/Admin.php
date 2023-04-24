<?php
class Admin extends Controller
{
    public function show()
    {
        $adminModel = $this->model("AdminModel");
        $rooms = $adminModel->getRooms();

        $this->view("content_layout", [
            "page" => "admin",
            "rooms" => $rooms
        ]);
    }

    public function viewDetail($id)
    {
        $adminModel = $this->model("AdminModel");
        $room = $adminModel->getRoomById($id);

        $this->view("content_layout", [
            "page" => "detail",
            "room" => $room
        ]);
    }

    public function addRoom()
    {
        if (isset($_POST['add'])) {

            $roomname = $_POST['roomname'];
            $price = $_POST['price'];
            $img = $_POST['img'];

            $adminModel = $this->model("AdminModel");
            $res = $adminModel->addRoom($roomname, $price, $img);

            if ($res) {
                echo "<script>alert('Add Success')</script>";
                header("Location: http://localhost/Assignment2/Admin");
            } else {
                echo "<script>alert('Add fail')</script>";

            }
        }
    }

    public function EditRoom($id)
    {
        if (isset($_POST['edit'])) {

            $roomname = $_POST['roomname'];
            $price = $_POST['price'];
            $img = $_POST['img'];

            $adminModel = $this->model("AdminModel");
            $res = $adminModel->updateRoom($id, $roomname, $price, $img);


            if ($res) {
                echo "<script>alert('Update Success')</script>";
                header("Location: http://localhost/Assignment2/Admin");
            } else {
                echo "<script>alert('Update Fail')</script>";
            }
        }
    }

    // delete member
    public function deleteRoom($id)
    {
        $adminModel = $this->model("AdminModel");
        $res = $adminModel->deleteRoom($id);

        if ($res) {
            echo "<script>alert('Delete Success')</script>";
            header("Location: http://localhost/Assignment2/Admin");
        } else {
            echo "<script>alert('Delete Fail')</script>";
        }
    }
}

?>
<?php
class Admin extends Controller
{
    public function show()
    {
        $adminModel = $this->model("AdminModel");
        // $rooms = $adminModel->getRooms();

        // $this->view("content_layout", [
        //     "page" => "admin",
        //     "rooms" => $rooms
        // ]);

        $members = $adminModel->getMembers();

        $this->view("content_layout", [
            "page" => "admin",
            "members" => $members
        ]);
    }

    // function viewDetail($id)
    // {
    //     $adminModel = $this->model("AdminModel");
    //     $room = $adminModel->getRoomById($id);

    //     $this->view("content_layout", [
    //         "page" => "detail",
    //         "room" => $room
    //     ]);
    // }

    function addMember()
    {
        if (isset($_POST['add'])) {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];

            $adminModel = $this->model("AdminModel");
            $res = $adminModel->addMember($firstname, $lastname, $address);

            if ($res) {
                echo "Add success";
                header("Location: http://localhost/Assignment2/Admin");
            } else {
                echo "Add fail";
            }
        }
    }

    function EditMember($id)
    {
        if (isset($_POST['edit'])) {

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $address = $_POST['address'];

            // echo $id;
            // echo $firstname;
            // echo $lastname;
            // echo $address;
            $adminModel = $this->model("AdminModel");
            $res = $adminModel->updateMember($id, $firstname, $lastname, $address);


            if ($res) {
                echo "Update success";
                header("Location: http://localhost/Assignment2/Admin");
            } else {
                echo "Update fail";
            }
        }
    }

    // delete member
    function deleteMember($id)
    {
        $adminModel = $this->model("AdminModel");
        $res = $adminModel->deleteMember($id);

        if ($res) {
            echo "Delete success";
            header("Location: http://localhost/Assignment2/Admin");
        } else {
            echo "Delete fail";
        }
    }
}

?>
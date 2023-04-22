<?php
class Admin extends Controller
{
    public function show()
    {
        $this->view("content_layout", [
            "page" => "admin"
        ]);
    }
}

?>
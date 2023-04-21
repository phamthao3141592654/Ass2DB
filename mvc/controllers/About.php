<?php
class About extends Controller
{
    function show()
    {
        $this->view("content_layout", [
            "page" => "about"
        ]);
    }
}

?>
<?php

/*class Linkls extends Controller
{
    public function index() {

        $data = [];

        if (isset($_POST['linkl'])) {
            $Linkls = $this->model('LinklsModel');
            $Linkls->setData($_POST['linkl'], $_POST['links']);

            $isValid = $Linkls->validForm();
            if($isValid == "Верно")
                $Linkls->addLinkls();
            else
                $data['message'] = $isValid;

        }


        $this->view('/home/linkls', $data);
    }


}

<?php


class Home extends Controller
{
    public function index()
    {

        $data = [];

        if (isset($_POST['email'])) {
            $home = $this->model('HomeModel');
            $home->setData($_POST['email'], $_POST['login'], $_POST['pass']);

            $isValid = $home->validForm();
            if ($isValid == "Верно")
                $home->addHome();
            else
                $data['message'] = $isValid;

        }


        $this->view('home/index', $data);
    }

    public function dashboard()
    {

        $home = $this->model('HomeModel');

        if (isset($_POST['exit-btn'])) {
            $home->logOut();
            exit();

        }

        $this->view('home/dashboard', $home->getHome());
    }

    public function auth()
    {

        $data = [];
        if (isset($_POST['login'])) {
            $home = $this->model('HomeModel');
            $data['message'] = $home->auth($_POST['login'], $_POST['pass']);

        }
        $this->view('home/auth', $data);
    }

    public function Linkls()
    {
      /* $data = [];
        if (isset($_POST['name'])) {
            $Linkls  = $this->model('HomeModel');
            $data['message'] = $Linkls ->linkls($_POST['linkl'], $_POST['links']);

        }*/
        $data = [];
        if (isset($_POST['name'])) {
            $Linkls = $this->model('HomeModel');
            $Linkls->setLinkls($_POST['linkl'], $_POST['links']);

            $isValid = $Linkls->validForm();
            if ($isValid == "Верно")
                $Linkls->addLinkls();
            else
                $data['message'] = $isValid;

        }


        $this->view('home/index', $data);

    }

    }
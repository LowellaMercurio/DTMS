<?php
class DtmsController extends AppController
{
    public function index()
    {
        $username = Param::get('username');
        $password = Param::get('password');

        $homepage = Param::get('homepage', 'index');
        $login = dtms::login($username, $password);

        $invalidAccount = false;
        $emptyFields = false;

        switch($homepage)
        {
            case 'index':
                break;
            case 'task':
                if (empty($username) && empty($password)){
                    $homepage = 'index';
                    $emptyFields = true;
                }elseif (!$login){
                    $homepage = 'index';
                    $invalidAccount = true;
                }
                break;
            default:
                throw new NotFoundException("{$homepage} is not found");
                break;
        }

        $this->set(get_defined_vars());
        $this->render($homepage);
    }
}
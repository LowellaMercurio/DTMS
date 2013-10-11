<?php
class DtmsController extends AppController
{
    public function index()
    {
        $username = Param::get('username');
        $password = Param::get('password');

        $login = dtms::login($username, $password);

        if($login){
            $this->task();
        }
        $this->set(get_defined_vars());
    }

}
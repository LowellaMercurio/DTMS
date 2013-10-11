<?php
class DtmsController extends AppController
{
    public function index()
    {
        $username = Param::get('username');
        $password = Param::get('password');

        $login = dtms::login($username, $password);

        $this->set(get_defined_vars());
    }

}
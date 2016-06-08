<?php

class BaseController extends Controller
{
    protected $_data;

    public function checkExistLogin()
    {
        if (!empty(Session::get('username'))) {
            return 1;
        }
    }
    /**
     * Setup the layout used by the controller.
     */
    protected function setupLayout()
    {
        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }
}

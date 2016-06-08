<?php
class CategorieController extends BaseController {
	protected $_cate;
	
	public function __construct() {
		$this->_cate = new Mcategorie();
	}
	public function index() {
		if($this->checkExistLogin()) {
			$this->_data['cate_info'] = $this->_user->listAllCate();
			$this->_data['order_num'] = 1;
			return View::make('categorie.index_view', $this->_data);
		} else {
			return Redirect::to('verify/login');
		}
	}
}
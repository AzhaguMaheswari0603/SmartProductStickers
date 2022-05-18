<?php
class ControllerExtensionModuleAddlabel extends Controller {
	public function index() {
		$this->load->language('extension/module/addlabel');

		//$data['logged'] = $this->customer->isLogged();
		$data['labelposition'] = $this->url->link('addlabel/labelposition', '', true);
		$data['Width'] = $this->url->link('addlabel/Width', '', true);
		$data['Height'] = $this->url->link('addlabel/Height', '', true);
		$data['Addlabel to productpage'] = $this->url->link('addlabel/addlabeltoproductpage', '', true);
		$data['Addlabel to Searchpage'] = $this->url->link('addlabel/addlabeltoSearchpage', '', true);
		$data['Addlabel to categorypage'] = $this->url->link('addlabel/addlabeltocategorypage', '', true);
		$data['Addlabel to Manufacturerpage'] = $this->url->link('addlabel/addlabeltomanufacturerpage', '', true);
		$data['Addlabel to Comparepage'] = $this->url->link('addlabel/addlabeltocomparepage', '', true);
		$data['Addlabel to specialpage'] = $this->url->link('addlabel/Addlabel to specialpage','',true);
		$data['status'] = $this->url->link('addlabel/status', '', true);
		
		return $this->load->view('extension/module/addlabel', $data);
	}
}
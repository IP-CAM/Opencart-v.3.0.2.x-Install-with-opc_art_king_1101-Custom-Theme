<?php
class ControllerExtensionModuleTvcmscustomtext extends Controller {
	public function index($setting) {
		if($this->config->get('theme_default_directory') == "opc_art_king_1101"){
			$data['tvcmscustomtext_des'] = html_entity_decode($setting['tvcmscustomtext_des'][1]['text']);
			
			if ($data['tvcmscustomtext_des']) {
				return $this->load->view('extension/module/tvcmscustomtext', $data);
			}
		}
	}
}

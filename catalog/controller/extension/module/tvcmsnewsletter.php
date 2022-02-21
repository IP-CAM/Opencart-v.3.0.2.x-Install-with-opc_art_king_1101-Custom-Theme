<?php
class ControllerExtensionModuletvcmsnewsletter extends Controller {
	public function index($setting) {
		if($this->config->get('theme_default_directory') == "opc_art_king_1101"){
			if(!empty($setting['status'])){
				$this->load->language('extension/module/tvcmscustomtext');
				$language_id 							= $this->config->get('config_language_id');
				$status 								= $this->status();
				$data['status_news_letter_title']		= $status['news_letter_title'];
   				$data['status_news_letter_short_desc'] 	= $status['news_letter_short_desc'];
				$data['title'] 							= $this->config->get('tvcmscustomsetting_customsub')['lang_text'][$language_id]['newslettertitle'];
				$data['subtitle'] 						= $this->config->get('tvcmscustomsetting_customsub')['lang_text'][$language_id]['newslettersubtitle'];
				$data['socialicon'] 					= $this->load->controller('common/tvcmssocialicon');
				$data['footerlogo'] 					= $this->load->controller('common/tvcmsfooterlogo');
				return $this->load->view('extension/module/tvcmsnewsletter', $data);
			}
		}
	}
	protected function status(){
		return $this->Tvcmsthemevoltystatus->customsetting();
	}
}

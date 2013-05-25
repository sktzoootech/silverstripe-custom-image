<?php

/**
 * Decorates the Image class to be able to add additional features 
 *
 * @author Davis Dimalen <davis.dimalen@gmail.com>
 * @package custom-image
 */

class CustomImageExtension extends DataExtension {

	public static $fallback_image = null;

	protected function failSafe(){	
		if(!$this->isValid()){
			
			$this->owner->setFilename(self::$fallback_image);

			$state = File::$update_filesystem;
			File::$update_filesystem = false;
			$this->owner->write();
			File::$update_filesystem = $state;
		}
	}

	public function isValid(){
		return !$this->owner->Filename ||
			!is_file($_SERVER['DOCUMENT_ROOT'].'/'.$this->owner->Filename) ||
			is_dir($_SERVER['DOCUMENT_ROOT'].'/'.$this->owner->Filename) ? false : true ;
	}

	public function resizedAbsoluteURL($w, $h){
		$this->failSafe();
		return !$this->isValid()
			? false
			: Director::absoluteBaseURL().str_replace('%2F','/',
				rawurlencode($this->owner->setSize($w, $h)->getFilename()));
	}

	public function croppedImageAbsoluteURL($w, $h){
		$this->failSafe();
		return !$this->isValid()
			? false
			: Director::absoluteBaseURL().str_replace('%2F','/',
				rawurlencode($this->owner->CroppedImage($w, $h)->getFilename()));
	}

	public function setWidthAbsoluteURL($w, $option=1){
		$this->failSafe();
		return !$this->isValid()
			? false
			: Director::absoluteBaseURL().str_replace('%2F','/',
				rawurlencode($this->owner->setWidth($w)->getFilename()));
	}	

	public function setSizeAbsoluteURL($w, $h) {
		$this->failSafe();
		return !$this->isValid()
			? false
			: Director::absoluteBaseURL().str_replace('%2F','/',
				rawurlencode($this->owner->SetSize($w,$h)->getFilename()));
	}
}

<?php 

namespace App\Traits;

trait Getters {
	public function getTypeAttribute(){
    	switch ($this->exam_type) {
    		case 'UTME':
    			return "JAMB";
    	}
    	return $this->exam_type;
    }
}
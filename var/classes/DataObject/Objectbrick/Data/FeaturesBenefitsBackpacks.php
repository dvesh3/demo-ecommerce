<?php 

/** 
* Generated at: 2018-09-07T16:07:18+02:00


Fields Summary: 
 - specs [multiselect]
*/ 

namespace Pimcore\Model\DataObject\Objectbrick\Data;

use Pimcore\Model\DataObject;

class FeaturesBenefitsBackpacks extends DataObject\Objectbrick\Data\AbstractData  {

protected $type = "featuresBenefitsBackpacks";
protected $specs;


/**
* Get specs - 
* @return array
*/
public function getSpecs () {
	$data = $this->specs;
	if(\Pimcore\Model\DataObject::doGetInheritedValues($this->getObject()) && $this->getDefinition()->getFieldDefinition("specs")->isEmpty($data)) {
		return $this->getValueFromParent("specs");
	}
	if ($data instanceof \Pimcore\Model\DataObject\Data\EncryptedField) {
		return $data->getPlain();
	}
	 return $data;
}

/**
* Set specs - 
* @param array $specs
* @return \Pimcore\Model\DataObject\Objectbrick\Data\FeaturesBenefitsBackpacks
*/
public function setSpecs ($specs) {
	$this->specs = $specs;
	return $this;
}

}


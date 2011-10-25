<?php

require_once '../dal/ProvinceDAO.php';
require_once 'interfaces/ProvinceInterface.php';

/**
 * Model Province
 *
 * @author Thomas Crepain <info@thomascrepain.be>
 */
class Province implements ProvinceInterface {
    private $provinceId;
    private $label;
    private $countryId;
        
    //mapping with flex
    public $_explicitType = "classestrophy.Province";
    
    public function __construct() {
    }
    
    /**
     * Creates a new Province object
     * 
     * @param int   $provinceId
     * @param string   $label
     * @param int   $countryId
     * @return Province $instance
     */
    public static function createNew($provinceId, $label, $countryId) {
	    $instance = new self();
	
		$instance->provinceId = $provinceId;
		$instance->label = $label;
		$instance->countryId = $countryId;
		
	    return $instance;
    }
    
    /**
     * deletes an object from permanent storage
     * 
     * @param int $provinceId
     * @return void
     */
    public static function delete($provinceId) {
	    // get data access object
	    $dao = ProvinceDAO::getInstance();

	    $dao->delete($provinceId);
    }
    
    /**
     * Saves this object to permanent storage
     * 
     * @return int $id
     */
    public function save() {
	    // get data access object
	    $dao = ProvinceDAO::getInstance();

	    // saves this object tot storage
	    $provinceId = $dao->save($this);

	    // update provinceId
	    $this->provinceId = $provinceId;
	    
	    // returns id
	    return $provinceId;
    }

    /**
     * loads an object from permanent storage
     * 
     * @param int $provinceId
     * @return Province
     */
    public static function load($provinceId) {
	    // get data access object
	    $dao = ProvinceDAO::getInstance();

	    return $dao->load($provinceId);
    }
    
    
    /* Getters and setters */
    /**
     * Returns provinceId
     * 
     * @return int
     */
    public function getProvinceId() {
	    return $this->provinceId;
    }
    
    /**
     * Returns label
     * 
     * @return string
     */
    public function getLabel() {
	    return $this->label;
    }
    
    /**
     * Returns countryId
     * 
     * @return int
     */
    public function getCountryId() {
	    return $this->countryId;
    }
    
    /**
     * Sets provinceId
     * 
     * @param int
     */
    public function setProvinceId($provinceId) {
	    $this->provinceId = $provinceId;
    }
    
    /**
     * Sets label
     * 
     * @param string
     */
    public function setLabel($label) {
	    $this->label = $label;
    }
    
    /**
     * Sets countryId
     * 
     * @param int
     */
    public function setCountryId($countryId) {
	    $this->countryId = $countryId;
    }
    
}
?>

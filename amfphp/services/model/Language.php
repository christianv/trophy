<?php

require_once '../dal/LanguageDAO.php';
require_once 'interfaces/LanguageInterface.php';

/**
 * Model Language
 *
 * @author Thomas Crepain <info@thomascrepain.be>
 */
class Language implements LanguageInterface {
    private $languageId;
    private $label;
        
    //mapping with flex
    public $_explicitType = "classestrophy.Language";
    
    public function __construct() {
    }
    
    /**
     * Creates a new Language object
     * 
     * @param int   $languageId
     * @param string   $label
     * @return Language $instance
     */
    public static function createNew($languageId, $label) {
	    $instance = new self();
	
		$instance->languageId = $languageId;
		$instance->label = $label;
		
	    return $instance;
    }
    
    /**
     * deletes an object from permanent storage
     * 
     * @param int $languageId
     * @return void
     */
    public static function delete($languageId) {
	    // get data access object
	    $dao = LanguageDAO::getInstance();

	    $dao->delete($languageId);
    }
    
    /**
     * Saves this object to permanent storage
     * 
     * @return int $id
     */
    public function save() {
	    // get data access object
	    $dao = LanguageDAO::getInstance();

	    // saves this object tot storage
	    $languageId = $dao->save($this);

	    // update languageId
	    $this->languageId = $languageId;
	    
	    // returns id
	    return $languageId;
    }

    /**
     * loads an object from permanent storage
     * 
     * @param int $languageId
     * @return Language
     */
    public static function load($languageId) {
	    // get data access object
	    $dao = LanguageDAO::getInstance();

	    return $dao->load($languageId);
    }
    
    
    /* Getters and setters */
    /**
     * Returns languageId
     * 
     * @return int
     */
    public function getLanguageId() {
	    return $this->languageId;
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
     * Sets languageId
     * 
     * @param int
     */
    public function setLanguageId($languageId) {
	    $this->languageId = $languageId;
    }
    
    /**
     * Sets label
     * 
     * @param string
     */
    public function setLabel($label) {
	    $this->label = $label;
    }
    
}
?>

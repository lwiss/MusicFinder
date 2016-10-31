<?php


/**
 * @access public
 * @author lwiss
 * @package Users
 */
class Artist {
	/**
	 * @AttributeType int
	 */
	private $id;
	/**
	 * @AttributeType string
	 */
	private $name;
	/**
	 * @AttributeType string
	 */
	private $type;
	/**
	 * @AttributeType string
	 */
	private $gender;
	/**
	 * @AttributeType int
	 */
	private $areaID;
	

	
	
	public function __construct($valeurs = array())
	{
		parent::__construct($valeurs);
		if (!empty($valeurs))
			$this->hydrate($valeurs);
	}
	
	public function hydrate($donnees)
	{
		foreach ($donnees as $attribut => $valeur)
		{
			$methode = 'set'.ucwords($attribut);
			if (is_callable(array($this, $methode)))
				$this->$methode($valeur);
		}
	}
	// ========== setters and getters ===========
	
	
	/**
	 * @access public
	 * @return id
	 * @ReturnType int
	 */
	public function getID() {
		return $this->id;
	}
	/**
	 * @access public
	 * @return areaID
	 * @ReturnType int
	 */
	public function getAreaID() {
		return $this->areaID;
	}
	/**
	 * @access public
	 * @return name
	 * @ReturnType string
	 */
	public function getName() {
		return $this->name;
	}
	/**
	 * @access public
	 * @return type
	 * @ReturnType string
	 */
	public function getType() {
		return $this->type;
	}
	/**
	 * @access public
	 * @return gender
	 * @ReturnType string
	 */
	public function getGender() {
		return $this->gender;
	}
	
	
	// ========= supplementary fonctions =========//
	/**
	 * @access public
	 * @return area
	 * @ReturnType Area (object)
	 */
	public function artistArea() {
		$db = DBFactory::getMysqlConnexionWithPDO('');
		$manager = new AreaManager($db);
		$area= $manager->getAreaByID($this->areaID);
		return $area;
	}
	/**
	 * @access public
	 * @return recordingList
	 * @ReturnType Recording[]
	 */
	public function getRecordings() {
		$db = DBFactory::getMysqlConnexionWithPDO('');
		$manager = new RecordingManager($db);
		$recordings [] = $manager->getRecordingByArtist($this->$id);
		return $recordings;
	}
	
	
}
?>
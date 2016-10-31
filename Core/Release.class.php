<?php


/**
 * @access public
 * @author lwiss
 * @package Users
 */
class Release {
	/**
	 * @AttributeType int
	 */
	private $id;
	/**
	 * @AttributeType string
	 */
	private $name;
	

	

	
	
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
	 * @return name
	 * @ReturnType string
	 */
	public function getName() {
		return $this->name;
	}

	

	
	
}
?>
<?php


/**
 * @access public
 * @author lwiss
 * @package Users
 */
class Recording {
	/**
	 * @AttributeType int
	 */
	private $recId;
	/**
	 * @AttributeType string
	 */
	private $recName;
	/**
	 * @AttributeType int
	 */
	private $recLength;

	
	
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

	
	
}
?>
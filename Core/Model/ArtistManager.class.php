<?php

/**
 * @access public
 * @author lwiss
 */
class ArtistManager
{
	private $db;
	
	public function __construct($db)
	{
		$this->db = $db;
	}
	
	public function getDb(){
		return $this->db;
	}

	public function setDb($db)
	{
		$this->db = $db;
	}
	
	public function getArtistByName ($name) {
		$requete = $this->db->prepare("select * from artist where aname like '%:name%'");
		$requete->bindValue(':name', (String) $name, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$artists []= new Artist($donnees);
		return $artists;
	}
	
	public function getArtistByRecordID ($recordID) {
		$requete = $this->db->prepare("select distinct * from artist where aid IN (select S.aid from track T , sings S where T.recid = :recordID and T.id=S.trackid)");
		$requete->bindValue(':recordID', (int) $recordID, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$artists []= new Artist($donnees);
		return $artists;
	}
	public function getArtistByGenreID ($genreID) {
		$requete = $this->db->prepare("select distinct * from artist where aid IN (select H.aid from has H  where H.gid = :genreID)");
		$requete->bindValue(':genreID', (int) $genreID, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$artists []= new Artist($donnees);
		return $artists;
	}
	
	
}

?>
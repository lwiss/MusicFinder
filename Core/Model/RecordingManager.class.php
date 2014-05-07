<?php

/**
 * @access public
 * @author lwiss
 */
class RecordingManager
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
	
	public function getRecordingByArtist ($aid) {
		$requete = $this->db->prepare("select * from recording R where r.recordid IN ( select T.recordid from track T , sings S where S.aid=:aid and T.trackid=S.trackid) ");
		$requete->bindValue(':aid', (int) $aid, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$Recordings []= new Recording($donnees);
		return $Recordings;
	}
	
	public function getRecordingByName($name) {
		$requete = $this->db->prepare("select * from recording R where recname like '%:name%' ");
		$requete->bindValue(':name', (String) $name, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$Recordings []= new Recording($donnees);
		return $Recordings;
	}
	
	public function getRecordingByReleaseID ($releaseId) {
		$requete = $this->db->prepare("select distinct * from recording R where r.recordid IN ( select T.recordid from track T , medium M where M.releaseid=:releaseId and T.mediumid=M.mid) ");
		$requete->bindValue(':releaseID', (int) $releaseID, PDO::PARAM_INT);
		$requete->execute();
		while ($donnees= $requete->fetch(PDO::FETCH_ASSOC)) 
			$Recordings []= new Recording($donnees);
		return $Recordings;
	}

	
	
}

?>


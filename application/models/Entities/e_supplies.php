<?php
namespace models\Entities;

	/**
	 * @Entity
	 * @Table(name="supplies")
	 */
 class E_Supplies{
 	
   /**
	* @Id
	* @Column(name="suppliesID", type="integer", length=11, nullable=false)
	* @GeneratedValue(strategy="AUTO")
	* */
	private $suppliesID;
	
   /**
	* @Column(name="suppliesCode", type="string",length=45, nullable=false)
	* */
	private $suppliesCode;
	
	/**
	* @Column(name="suppliesUnit", type="string",length=45, nullable=false)
	* */
	private $suppliesUnit;
	
	/**
	* @Column(name="suppliesName", type="string",length=45, nullable=false)
	* */
	private $suppliesName;
	
	/**
	* @Column(name="suppliesFor", type="string",length=3, nullable=false)
	* */
	private $suppliesFor;
	
	 
	public function getsuppliesID() {
			return $this -> suppliesID;
	}
	
	public function setsuppliesID($suppliesID) { $this -> suppliesID = $suppliesID;
	}
	 
	public function getsuppliesName() {
			return $this -> suppliesName;
	}
	
	public function setsuppliesName($suppliesName) { $this -> suppliesName = $suppliesName;
	}
	
	public function getsuppliesCode() {
			return $this -> suppliesCode;
	}
	
	public function setsuppliesCode($suppliesCode) { $this -> suppliesCode = $suppliesCode;
	}
	
	public function getsuppliesUnit() {
			return $this -> suppliesUnit;
	}
	
	public function setsuppliesUnit($suppliesUnit) { $this -> suppliesUnit = $suppliesUnit;
	}
	
	public function getSuppliesFor() {
			return $this -> suppliesFor;
	}
	
	public function setSuppliesFor($suppliesFor) { $this -> suppliesFor = $suppliesFor;
	}
}
?>
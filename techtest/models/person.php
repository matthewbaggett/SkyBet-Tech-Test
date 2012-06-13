<?php 

class person{
	private $firstname;
	private $surname;
	private $job;
	
	public function factory(){
		return new person();
	}
	public function getFirstname(){
		return $this->firstname;
	}
	public function getSurname(){
		return $this->surname;
	}
	public function getJob(){
		return $this->job;
	}
	public function setFirstname($firstname){
		$this->firstname = $firstname;
		return $this;
	}
	public function setSurname($surname){
		$this->surname = $surname;
		return $this;
	}
	public function setJob($job){
		$this->job = $job;
		return $this;
	}
	
	public function isValid(){
		if(empty($this->firstname) && empty($this->surname) && empty($this->job)){
			return FALSE;
		}
		return TRUE;
	}
}
<?php 

class person{
	private $firstname;
	private $surname;
	private $job_title;
	
	public function factory(){
		return new person();
	}
	public function getFirstname(){
		return $this->firstname;
	}
	public function getSurname(){
		return $this->surname;
	}
	public function getJobTitle(){
		return $this->job_title;
	}
	public function setFirstname($firstname){
		$this->firstname = $firstname;
		return $this;
	}
	public function setSurname($surname){
		$this->surname = $surname;
		return $this;
	}
	public function setJobTitle($job_title){
		$this->job_title = $job_title;
		return $this;
	}
	
	public function isValid(){
		if(empty($this->firstname) && empty($this->surname) && empty($this->job_title)){
			return FALSE;
		}
		return TRUE;
	}
}
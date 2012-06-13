<?php 

class people{
	public $people;	
	private $storage_file = "../data.ser";
	static private $instance = null;
	
	public function get_instance(){
		if(self::$instance === null){
			self::$instance = new people();
		}
		return self::$instance;
	}
	
	
	public function __construct(){
		$this->load();
	}
	
	public function load(){
		if(file_exists($this->storage_file)){
			$serialized_data = file_get_contents($this->storage_file);
			$this->people = unserialize($serialized_data);
		}else{
			$this->people = array();
		}
		return $this;
	}
	
	public function save(){
		$serialized_data = serialize($this->people);
		file_put_contents($this->storage_file, $serialized_data);
		return $this;
	}
	
	public function set_people($array_of_people){
		$this->people = $array_of_people;
		return $this;
	}
	public function get_people(){
		return $this->people;
	}
	public function clear_people(){
		$this->people = array();
		return $this;
	}
}
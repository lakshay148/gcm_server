<?php
class gcm_user
{

	private $gcm_id;
	private $device_id;
	private $name;
	private $createdAt;

	function __construct($gcm_id,$device_id,$name,$createdAt)
	{
		
		$this -> gcm_id = $gcm_id;
		$this -> device_id = $device_id;
		$this -> name = $name;
		$this -> createdAt = $createdAt;	
	}
	public function getGcmId()
	{
		return $this->gcm_id;
	}
	public function getDeviceId()
	{
		return $this->device_id;
	}
	public function getName()
	{
		return $this->name;
	}
	public function getCreatedAt()
	{
		return $this->createdAt;
	}

	public function setGcmId($gcm_id)
	{
		$this->gcm_id = $gcm_id ;
	}
	public function setDeviceId($device_id)
	{
		$this->device_id = $device_id;
	}
	public function setName($name)
	{
		$this->name = $name;
	}
	public function setCreatedAt($createdAt)
	{
		$this->createdAt = $createdAt;
	}
}
?>

<?php
class gcm_user
{

	private $gcm_id;
	private $device_id;
	private $name;
	private $createdAt;

	
	public function __construct($gcm_id,$device_id,$name,$createdAt)
	{
		$createdAt = date("Y-m-d H:i:s");
		$this -> gcm_id = $gcm_id;
		$this -> device_id = $device_id;
		$this -> name = $name;
		$this -> createdAt = $createdAt;	
	}
	public function getGcmId()
	{
		return $gcm_id;
	}
	public function getDeviceId()
	{
		return $device_id;
	}
	public function getName()
	{
		return $name;
	}
	public function getCreatedAt()
	{
		return $createdAt;
	}

	public function setGcmId($gcm_id)
	{
		$this.gcm_id = $gcm_id ;
	}
	public function setDeviceId($device_id)
	{
		$this.device_id = $device_id;
	}
	public function setName($name)
	{
		$this.name = $name;
	}
	public function setCreatedAt($createdAt)
	{
		$this.createdAt = $createdAt;
	}
}
?>

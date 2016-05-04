<?php

class Uber{
	private $sLatitude;
	private $sLongitude;
	private $dLatitude;
	private $dLongitude;
	private $time;
	private $sRange;
	private $dRange;
	private $carpoolId;
	private $emptySeats;
	private $price;

	public function __construct($sLatitude, $sLongitude,$dLatitude,$dLongitude,$time,$sRange,$dRange,$carpoolId,$emptySeats,$price){

		$this->sLatitude 	= $sLatitude;
		$this->sLongitude 	= $sLongitude;
		$this->dLatitude 	= $dLatitude;
		$this->dLongitude 	= $dLongitude;
		$this->time 		= $time;
		$this->sRange 		= $sRange;
		$this->dRange 		= $dRange;
		$this->carpoolId 	= $carpoolId;
		$this->emptySeats 	= $emptySeats;
		$this->price 		= $price;

	}

	public function getSLatitude(){
		return $this->sLatitude;
	}

	public function setSLatitude($sLatitude){
		$this->sLatitude = $sLatitude;
	}

	public function getSLongitude(){
		return $this->sLongitude;
	}

	public function setSLongitude($sLongitude){
		$this->sLongitude = $sLongitude;
	}

	public function getDLatitude(){
		return $this->dLatitude;
	}

	public function setDLatitude($dLatitude){
		$this->dLatitude = $dLatitude;
	}

	public function getDLongitude(){
		return $this->dLongitude;
	}

	public function setDLongitude($dLongitude){
		$this->dLongitude = $dLongitude;
	}

	public function getTime(){
		return $this->time;
	}

	public function setTime($time){
		$this->time = $time;
	}

	public function getSRange(){
		return $this->sRange;
	}

	public function setSRange($sRange){
		$this->sRange = $sRange;
	}

	public function getDRange(){
		return $this->dRange;
	}

	public function setDRange($dRange){
		$this->dRange = $dRange;
	}

	public function getCarpoolId(){
		return $this->carpoolId;
	}

	public function setCarpoolId($carpoolId){
		$this->carpoolId = $carpoolId;
	}

	public function getEmptySeats(){
		return $this->emptySeats;
	}

	public function setEmptySeats($emptySeats){
		$this->emptySeats = $emptySeats;
	}

	public function getPrice(){
		return $this->price;
	}

	public function setPrice($price){
		$this->price = $price;
	}
}
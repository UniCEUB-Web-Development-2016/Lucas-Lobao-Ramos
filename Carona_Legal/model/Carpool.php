<?php 

class Carpool {
	private $cpf;
	private $sLatitude;
	private $sLongitude;
	private $dLatitude;
	private $dLongitude;
	private $date;
	private $time;
	private $emptySeats;

	public function __construct($cpf, $sLatitude, $sLongitude, $dLatitude, $dLongitude, $date, $time, $emptySeats) {

		$this->cpf 			= $cpf;
		$this->sLatitude 	= $sLatitude;
		$this->sLongitude 	= $sLongitude;
		$this->dLatitude 	= $dLatitude;
		$this->dLongitude 	= $dLongitude;
		$this->date			= $date;
		$this->time 		= $time;
		$this->emptySeats 	= $emptySeats;

	}


	public function getCpf() {
		return $this->cpf;
	}

	public function setCpf($cpf) {
		$this->cpf = $cpf;
	}
	
	public function getSLatitude() {
		return $this->sLatitude;
	}

	public function setSLatitude($sLatitude) {
		$this->sLatitude = $sLatitude;
	}

	public function getSLongitude() {
		return $this->sLongitude;
	}

	public function setSLongitude($sLongitude) {
		$this->sLongitude = $sLongitude;
	}

	public function getDLatitude() {
		return $this->dLatitude;
	}

	public function setDLatitude($dLatitude) {
		$this->dLatitude = $dLatitude;
	}

	public function getDLongitude() {
		return $this->dLongitude;
	}

	public function setDLongitude($dLongitude) {
		$this->dLongitude = $dLongitude;
	}

	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date = $date;
	}

	public function getTime() {
		return $this->time;
	}

	public function setTime($time) {
		$this->time = $time;
	}

	public function getEmptySeats() {
		return $this->emptySeats;
	}

	public function setEmptySeats($emptySeats) {
		$this->emptySeats = $emptySeats;
	}
}
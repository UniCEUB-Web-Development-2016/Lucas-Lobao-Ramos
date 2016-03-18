<?php

class FileManager{
	public function write($filename, $text){
		$file = fopen($filename, 'w');
		fwrite($file, $text);
		fclose($file);
	}

}
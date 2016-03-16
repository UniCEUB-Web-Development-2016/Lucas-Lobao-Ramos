<?php

class FileManager{
	public function write($filename, $text){
		$file = fopen($fileName, 'w');
		fwrite($file, $text);
		fclose($file);
	}

}
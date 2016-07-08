<?php

class Api
{
	private $filePath = __DIR__;

	public function saveCommand( $cod )
	{
		$path = $this->filePath."/command.txt";
		try {
			$file = fopen($path, "w");
			fwrite( $file, $cod );
			fclose( $file );	
		} catch (Exception $e) {
			throw new Exception($e->getMessage(), 1);
		}
		
		return true;
	}
}
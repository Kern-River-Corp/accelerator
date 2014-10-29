<?php
	class NAS{
		protected $server;
		protected $base;
		protected $file;
		public $contents;
		
		public function __construct($server = '192.168.0.118', $base = '/mnt/array1/share'){
			$this->server = "ftp://$server";
			$this->base = $base;
		}
		public function __set($name, $value){
			$this->$name = $value;
		}
		public function __get($name){
			return $this->$name;
		}
		public function __isset($data){
			return isset($this->$data);
		}
		public function read(){
			$this->contents = file_get_contents("{$this->server}{$this->base}/{$this->file}") or die("<strong>File Not Found: <u><code>{$this->file}</code></u></strong>");
		}
		public function __invoke($fname){
			$this->file = $fname;
			$this->read();
			return $this->contents;
		}
	}
?>

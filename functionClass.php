<?php
	class functionClass
	{
		protected $conn;
		private $table_name = "eweek";

		function __construct()
		{
			$this->conn = mysqli_connect("localhost","root","") or die ("error");
			mysqli_select_db($this->conn,"eweek");
		}
		function execute($query)
		{
			$result=$this->conn->query($query);
			return $result;
		}
		function getdatetime()
		{
			return date('Y-m-d H:i:s');
		}
		function sanitize($str)
		{
			return mysqli_real_escape_string($this->conn, $str);
		}
		function error(){
			return $this->conn->error;
		}
		function checks($nama,$tgllahir){
			$query="SELECT id FROM " . $this->table_name . "  WHERE fullname = '" . $nama . "' AND tgllahir = '" . $tgllahir . "'";
			$result = $this->execute($query) or die(0);
			$row = $result->fetch_array();
			return $row['id'];
		}
		function insert($nama,$tgllahir){
			$nama = $this->sanitize($nama);
			$tgllahir = $this->sanitize($tgllahir);
			if($this->checks($nama,$tgllahir) > 0){
				return 0;
			}
			else{
				$query = "INSERT INTO " . $this->table_name . " (fullname,tgllahir,votedate)"."VALUES(".
				 "'$nama',"."'$tgllahir',"."'".$this->getdatetime()."'".")";
				$result = $this->execute($query) or die($this->error());
				return 1;
			}
		}

		function getId($nama, $tgllahir)
		{
			$nama=$this->sanitize($nama);
			$query="SELECT id FROM " . $this->table_name . "  WHERE fullname = '" . $nama . "' AND tgllahir = '" . $tgllahir . "'";
			$result = $this->execute($query) or die($this->error());
			$row = $result->fetch_array();
			return $row['id'];
		}

		function modifies($votes,$ids)
		{
			$query = "UPDATE " . $this->table_name . " SET vote = '" . intval($votes) . "' WHERE id = '" . intval($ids) . "'";
			$query = $this->execute($query) or die($this->error());
		}
		
	}
?>
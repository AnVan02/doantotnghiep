<?php
class connect
{
	var $db=null;
	public function __construct() 
	{
		$dsn='mysql:host=localhost;dbname=trasua';
		$user='root';
		$pass='';
		try {
			$this->db=new PDO($dsn,$user,$pass,array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
		} catch (PDOException $e) {
			echo "Kết nối không thành công";
		}
		
	}

	public function getInstance($select)
	{
		$results=$this->db->query($select);
		//echo $select;
		$result=$results->fetch();
		return $result;
	}
	public function getList($select)
	{
		$results=$this->db->query($select);
		// echo $results;
		return($results);
	}

	public function exec($query)
	{
		$results=$this->db->exec($query);
		//echo $results;
		return($results);
	}
	// viết phương thức thực thi là prepare riêng vì muốn sau này các phương thức khác gọi nó mà ko cần viết lại
	public function execP($query)
	{
		$statement=$this->db->prepare($query);
		// echo $statement;
		return $statement;
	}
}
?>
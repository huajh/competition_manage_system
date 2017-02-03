<?php
class mysql{
	//连接服务器、数据库以及执行SQL语句的类库
	public $database;
	public $server_username;
	public $server_userpassword;
	function mysql() {
		//构造函数初始化所要连接的数据库
		$this->server_username="root";
		$this->server_userpassword="root";
	}
	function link($database) {
		//连接服务器和数据库
		//设置所有连接的数据库
		if($database==""){
			$this->database="Competition_data";
		}
		else
			$this->database=$database;
		//连接服务器的数据库 
		$id =@mysql_connect("localhost",$this->server_username,$this->server_userpassword) or die("不能连接数据库");
		@mysql_select_db($this->database,$id) or die("不能打开数据库");
		mysql_query("SET CHARSET 'SET CHARSET 'utf-8' ");
	}
	function excu($query) {
		if(@$result=mysql_query($query)){
			return $result;
		}else{
			echo "sql语句执行错误！！！请重试！！！";
			exit;
		}
	}
}
?>
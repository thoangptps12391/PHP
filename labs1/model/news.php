<?php 
	/**
	 * 
	 */
	include 'database.php';
	class news
	{
		var $newsID=null;
		var $title=null;
		var $content=null;
		var $date=null;
		var $image=null;

		public function __construct()
		{
			if (func_num_args()==5) {
				$this->newsID=func_get_arg(0);
				$this->title=func_get_arg(1);
				$this->content=func_get_arg(2);
				$this->date=func_get_arg(3);
				$this->image=func_get_arg(4);
			}
		}

		public function getList()
		{
			$db = new connect();
			$strQuery= "select * from news";
			$r = $db->getList($strQuery);
			return $r;
		}

		public function getNewsById($tmpId)
		{
			$db=new connect();
			$strQuery = "SELECT * FROM news where newsid = $tmpID";
			$r = $db->getInstance($strQuery);
		}
	}
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test_model extends CI_Model {

	public function query($sql)
	{
		$query = $this->db->query($sql);

		if ($query->num_rows() > 0)
		{
			foreach ($query->result_array() as $row)
			{
				echo $row['username']."</br>";
				echo $row['password']."</br>";
				echo $row['sex']."</br>";
				echo $row['status']."</br>";
				echo $row['email']."</br>";
				echo $row['usertype']."</br>";
				if($row['usertype'] == "student")
				{
					echo $row['student_no']."</br>";
				}
				else
				{
					echo $row['emp_no']."</br>";
				}
				echo $row['name_first']."</br>";
				echo $row['name_middle']."</br>";
				echo $row['name_last']."</br>";
				echo $row['mobile_no']."</br>";
				echo $row['course']."</br>";
				echo $row['college']."</br></br>";
			}
		}
		else
			echo "no rows";
	}


}
?>
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
	Class for queries and database management
*/
class Query_model extends CI_Model {

	public function generateQuery($field)
	{
		$sql = "SELECT * FROM user" ; //string for query

		Switch($field['field'])
		{
			Case "name" : {
				$sql = $sql." WHERE name_first LIKE '".$field['fname']."' OR name_middle LIKE '".$field['mname']."' OR name_last LIKE '".$field['lname']."'";
				break;
			}
			Case "stdno" : {
				$sql = $sql." WHERE student_no LIKE '".$field['student_no']."'";
				break;
			}
			Case "uname" : {
				$sql = $sql." WHERE username LIKE '".$field['username']."'";
				break;
			}
			Case "email" : {
				$sql = $sql." WHERE email LIKE '".$field['email']."'";
				break;
			}
		}		

		If($field['status'] != "all")
			$sql = $sql." AND status LIKE '".$field['status']."'";

		$sql = $sql." GROUP BY usertype,sex";

		return $sql;
	}

	public function runQuery($sql)
	{
		/*
			runs the query passed as a parameter
		*/
		$array = $this->db->query($sql);

		if ($array->num_rows() > 0)
		{
			foreach ($array->result_array() as $row)
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

	public function activate($username, $student_no, $email)
	{

	}
}


/* End of file query_model.php */
/* Location: ./application/models/query_model.php */
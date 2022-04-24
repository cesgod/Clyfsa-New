<?php

/**
 * Obtiene las ultimas 8 noticias por categoria.
 * @param integer $categoria
 * @return array
 */
function getPostByCategory($categoria){
	require("./nblog/blog/resblog/database/db_connect.php");
	$sql="SELECT * FROM blogs WHERE posted='publish' AND category='$categoria' ORDER BY id DESC LIMIT 8";
	if ($result=mysqli_query($con,$sql))
	{
      	//count number of rows in query result
		$rowcount=mysqli_num_rows($result);
      	//if no rows returned show no news alert
		if ($rowcount==0) {
      		# code...
			echo 'No Posts To Fetch';
		}

        return $result;
	}

	mysqli_close($con);
}

/**
 * Obtiene un post por id.
 * @param integer $id
 * @return array
 */
function getPostById($id) {
    try {
        require("./nblog/blog/resblog/database/db_connect.php");
        $sql="SELECT * FROM blogs WHERE id=$id";
        if ($result=mysqli_query($con,$sql))
        {
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            return $row;
        }

        mysqli_close($con);
    } catch (\Throwable $th) {
        var_dump($th);
    }
}

?>

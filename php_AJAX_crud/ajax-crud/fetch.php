<?php 
    $conn=new Mysqli("localhost","root","","phpmycrud");
    if($conn->connect_error){}
    else{}

    //echo $return="Welcome Ved.";
    $sql="SELECT * from `student`";
    $query_run=mysqli_query($conn,$sql);
    $result_array=[];

    if(mysqli_num_rows($query_run)>0){
       foreach($query_run as $row){
           array_push($result_array,$row);
       }
       header('content-type: application/json');
       echo json_encode($result_array);
    }
    else{
        echo "<h4>No Record Found.</h4>";
    }
?>
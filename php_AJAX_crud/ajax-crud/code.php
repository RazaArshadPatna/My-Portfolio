
<?php 
    $conn=new Mysqli("localhost","root","","phpmycrud");
    if($conn->connect_error){}
    else{}
 
 if(isset($_POST['checking_add'])){
     $fname=$_POST['fname'];
     $lname=$_POST['lname'];
     $class=$_POST['class'];
     $section=$_POST['section'];
     
     $query="INSERT INTO `student`(`fname`,`lname`,`class`,`section`) values('$fname','$lname','$class','$section')";
     $query_run=mysqli_query($conn,$query);
     if($query_run){
        echo "Successfully Inserted.";
     }
     else{
        echo "something went wrong";
     }
 }
?>

<?php
   if(isset($_POST['checking_view'])){

      $stud_id=$_POST['stud_id'];
      $result_array=[];
       
      $query="SELECT * FROM student where id=$stud_id";
      $query_run=mysqli_query($conn,$query);

      if(mysqli_num_rows($query_run)>0){
         foreach($query_run as $row){
            array_push($result_array,$row);
         }
         header('content-type: application/json');
         echo json_encode($result_array);
      }
      else{
         echo "No record found.";
      }

   }
?>
<?php
   if(isset($_POST['checking_edit'])){

      $stud_id=$_POST['stud_id'];
      $result_array=[];
       
      $query="SELECT * FROM student where id=$stud_id";
      $query_run=mysqli_query($conn,$query);

      if(mysqli_num_rows($query_run)>0){
         foreach($query_run as $row){
            array_push($result_array,$row);
         }

         header('content-type: application/json');
         echo json_encode($result_array);
      }
      else{
         echo "No record found.";
      }

   }
?>
<?php
   if(isset($_POST['checking_update'])){

      $id=$_POST['stud_id'];
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $class=$_POST['class'];
      $section=$_POST['section'];


     $query="UPDATE `student` set `fname`='$fname',`lname`='$lname',`class`='$class',`section`='$section' where `id`='$id' ";
      $query_run=mysqli_query($conn,$query);

       if($query_run){
         echo $return="Successfully Updated.";
      }
      else{
         echo $return="Something went wrong";
      }

   }
?>

<?php 

  if(isset($_POST['checking_delete'])){
   $id=$_POST['stud_id'];

   $query="DELETE from student where `id`='$id' ";
   $s=$conn->prepare($query);
   if($s->execute()){
      echo $return="Successfully Deleted.";
   }
   else{
      echo $return="Something went wrong.";
   }
  }
  
?>
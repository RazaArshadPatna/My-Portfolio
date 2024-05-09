<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
  <body>


  <!-- Add Modal -->
<div class="modal fade" id="Student_AddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student data using jQuery Ajax in PHP.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">
           <div class="col-md-12">
                <div class="error-message">
                </div>
                <div class="show-message">
                </div>
           </div>
           
           <div class="col-md-6">
              <label for="">First Name</label>
              <input type="text" class="form-control fname">
           </div>
           <div class="col-md-6">
              <label for="">Last Name</label>
              <input type="text" class="form-control lname">
           </div>
           <div class="col-md-6">
              <label for="">Class</label>
              <input type="text" class="form-control class">
           </div>
           <div class="col-md-6">
              <label for="">Section</label>
              <input type="text" class="form-control section">
           </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_add_ajax">Save</button>
      </div>
    </div>
  </div>
</div>
<!--/Add Modal-->


<!--StudentView Modal-->
<div class="modal fade" id="StudentViewModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Detail View</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <h4 class="id_view"></h4>
        <h4 class="fname_view"></h4>
        <h4 class="lname_view"></h4>
        <h4 class="class_view"></h4>
        <h4 class="section_view"></h4>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--/StudentView Modal -->

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                       <h4>PHP - AJAX - CRUD | How to store data using jQuery Ajax in php.</h4>
                       <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Student_AddModal">
                          Add </button>
                    </div>
                    <div class="card-body">
                          <table class="table table-bordered table-striped">
                            <thead>
                               <tr>
                                   <th>ID</th> 
                                   <th>First Name</th> 
                                   <th>Last Name</th> 
                                   <th>Class</th> 
                                   <th>Section</th> 
                                   <th>Action</th>
                               </tr>
                            </thead>
                            <tbody class="studentdata">
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

 <!-- Edit Modal -->
 <div class="modal fade" id="StudentEditModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Student data using jQuery Ajax in PHP.</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="row">

        <input type="hidden" id="id_edit">
           <div class="col-md-12">
                <div class="error-message-update">
                </div>
                <div class="show-message">
                </div>
           </div>
           
           <div class="col-md-6">
              <label for="">First Name</label>
              <input type="text" id="edit_fname" class="form-control">
           </div>
           <div class="col-md-6">
              <label for="">Last Name</label>
              <input type="text" id="edit_lname" class="form-control">
           </div>
           <div class="col-md-6">
              <label for="">Class</label>
              <input type="text" id="edit_class" class="form-control">
           </div>
           <div class="col-md-6">
              <label for="">Section</label>
              <input type="text" id="edit_section" class="form-control">
           </div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary student_update_ajax">Update</button>
      </div>
    </div>
  </div>
</div>
<!--/Edit Modal-->



    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
    <script>
         $(document).ready(function(){
            getData();

            $(document).on("click",".delete_btn",function(){

              var stud_id=$(this).closest('tr').find('.stud_id').text();

              $.ajax({
                type:"POST",
                url:"ajax-crud/code.php",
                data:{
                  'checking_delete':true,
                  'stud_id':stud_id,
                },
                success:function(response){
                  $('.show-message').append('\
                    <div class="alert alert-success alert-dismissible fade show" role="alert">\
                    <strong>Hey!</strong>' +response+'\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>\
                    ');
                    $('.studentdata').html("");
                    getData();
                }
              })
            });


            $('.student_update_ajax').click(function(e){
                e.preventDefault();

                var stud_id=$('#id_edit').val();
                var fname=$('#edit_fname').val();
                var lname=$('#edit_lname').val();
                var stu_class=$('#edit_class').val();
                var section=$('#edit_section').val();


                if(fname != '' & lname != '' & stu_class != '' & section != ''){
                    $.ajax({
                    type:"POST",
                    url:"ajax-crud/code.php",
                    data:{
                        'checking_update':true,
                        'stud_id':stud_id,
                        'fname':fname,
                        'lname':lname,
                        'class':stu_class,
                        'section':section,
                    },
                    success:function(response){

                      //$('.#Student_AddModal').modal('hide');
                      $('.show-message').append('\
                    <div class="alert alert-success alert-dismissible fade show" role="alert">\
                    <strong>Hey!</strong>' +response+'\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>\
                    ');
                    $('.studentdata').html("");
                    getData();
                    }
                   });                    
                }
                else{
                    $('.error-message-update').append('\
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>Hey!</strong> Please enter all fields.\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>\
                    ')
                }
            });


            $(document).on("click",".edit_btn",function(){
              var stud_id=$(this).closest('tr').find('.stud_id').text();
        
              $.ajax({
                type:"POST",
                url:"ajax-crud/code.php",
                data:{
                  'checking_edit':true,
                  'stud_id':stud_id,
                },
                success:function(response){
                   $.each(response,function(key,studentedit){
                          
                          $('#id_edit').val(studentedit['id']);
                          $('#edit_fname').val(studentedit['fname']);
                          $('#edit_lname').val(studentedit['lname']);
                          $('#edit_class').val(studentedit['Class']);
                          $('#edit_section').val(studentedit['section']);

                          $('#StudentEditModal').modal('show');
                   });

                }
              })
            });



            $(document).on("click",".viewbtn",function(){
              var stud_id=$(this).closest('tr').find('.stud_id').text();
              
              $.ajax({
                type:"POST",
                url:"ajax-crud/code.php",
                data:{
                  'checking_view':true,
                  'stud_id':stud_id,
                },
                success:function(response){
                   $.each(response,function(key,studview){
                          
                          $('.id_view').text(studview['id']);
                          $('.fname_view').text(studview['fname']);
                          $('.lname_view').text(studview['lname']);
                          $('.class_view').text(studview['class']);
                          $('.section_view').text(studview['section']);

                          $('#StudentViewModal').modal('show');
                   });

                }
              })
            });



            $('.student_add_ajax').click(function(e){
                e.preventDefault();

                var fname=$('.fname').val();
                var lname=$('.lname').val();
                var stu_class=$('.class').val();
                var section=$('.section').val();

                if(fname != '' & lname != '' & stu_class != '' & section != ''){
                    $.ajax({
                    type:"POST",
                    url:"ajax-crud/code.php",
                    data:{
                        'checking_add':true,
                        'fname':fname,
                        'lname':lname,
                        'class':stu_class,
                        'section':section,
                    },
                    success:function(response){

                      //$('.#Student_AddModal').modal('hide');
                      $('.show-message').append('\
                    <div class="alert alert-success alert-dismissible fade show" role="alert">\
                    <strong>Hey!</strong>' +response+'\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>\
                    ');
                    $('.studentdata').html("");
                    getData();

                    $('.fname').val("");
                    $('.lname').val("");
                    $('.class').val("");
                    $('.section').val("");
                    }
                   });                    
                }
                else{
                    $('.error-message').append('\
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">\
                    <strong>Hey!</strong> Please enter all fields.\
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\
                    </div>\
                    ')
                }
            });
         });


         function getData(){
            $.ajax({
                type:"GET",
                url:"ajax-crud/fetch.php",
                success:function(response){
                       $.each(response,function(key,value){

                        $('.studentdata').append('<tr>'+
                                    '<td class="stud_id">'+value['id']+'</td>\
                                    <td>'+value['fname']+'</td>\
                                    <td>'+value['lname']+'</td>\
                                    <td>'+value['Class']+'</td>\
                                    <td>'+value['section']+'</td>\
                                    <td>\
                                        <a href="#" class="btn btn-info viewbtn">VIEW</a>\
                                        <a href="#" class="btn btn-primary edit_btn">EDIT</a>\
                                        <a href="#" class="btn btn-danger delete_btn">DELETE</a>\
                                    </td>\
                                   </tr>');
                       });
                }
            });
          }   
    </script>

  </body>
</html>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "sensor");  
 $query ="SELECT * FROM sensor_type";  
 $result = mysqli_query($connect, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Sensor types</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      </head>  
      <body>  
           <br /><br />  
           <div class="container">  
                <h3 align="center">Types of Sensors</h3>  
                <br />  
                <div class="table-responsive">  
                     <table id="sensor_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Sr No.</td>  
                                    <td>Sensor Name</td>  
                                    <td>Description</td>  
                                    <td>Application</td>  
                                      
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["id"].'</td>  
                                    <td>'.$row["sensor_name"].'</td>  
                                    <td>'.$row["description"].'</td>  
                                    <td>'.$row["application"].'</td>  
                                      
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function()
 {  
      $('#sensor_data').DataTable();  
 });  
 </script> 
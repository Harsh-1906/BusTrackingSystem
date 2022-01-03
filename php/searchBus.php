 <html>
 <head>
  <link rel="shortcut icon" href="favicon.ico" />
 <title>
        
     Bus Tracking System</title>
 <link rel="stylesheet" href="bootstrap-3.3.7\dist\css\bootstrap.min.css">
  <link rel="stylesheet" href="bootstrap-3.3.7\dist\css\bootstrap.css">
 
   <script src="bootstrap-3.3.7/js/tests/vendor/jquery.min.js"></script>
        <script src="bootstrap-3.3.7/js/collapse.js"></script>
        <script src="bootstrap-3.3.7/js/transition.js"></script>
        <script src="bootstrap-3.3.7/js/dropdown.js"></script>
         <script src="bootstrap-3.3.7/js/tab.js"></script>
         <script src="bootstrap-3.3.7/js/modal.js"></script>
      

 </head>
 <body>
      <nav class="nav navbar-inverse navbar-static-top">
         
            <div class="navbar-header" style="margin-left:2em">
               <h1 style="color: lightblue">Bus Tracking System</h1>
            </div>
             
        <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target="#abc"> 
                <span class="sr-only">Button</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
            </button>

        <div class="collapse navbar-collapse pull-right" id="abc" style="margin-top:5%; margin-right:2em; color:white;">
            <ul class="nav navbar-nav">
               <li class="active"><a href="index.html"> <b>Home</b></a></li>
                   <li class="active"><a href="searchBus.php"><b>Search Bus</b></a></li>
                 <li class="active"><a href="trackBus.html"><b>Track Bus</b></a></li>
               
            </ul>
       </div>    
        </nav>
        <div class="container" style="height:500px">
            <div class="jumbotron">
               <form action="" method="POST">
                <h3> Search Your Bus Now</h3>
                <table>
                    <tr>
                        
                        <td><h4>Enter Source Location</h4></td>
                        <td><input type="text" name="src" /></td>                        
                    </tr>
                    <tr>
                        <td><h4>Enter Destination Location </h4></td>
                        <td><input type="text" name="dest" /></td>                        
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="Search" class="btn btn-primary">
                        </td>
                    </tr>
                   
                </table>
               </form>
               <?php
$conn=mysql_connect("localhost","root","") or die('Connect Prob1');
$db=mysql_select_db("bus_php", $conn) or die('Connect Prob1');
if(!empty($_POST['src'])){
$src=$_POST['src'];
$dest=$_POST['dest'];

$q="select * from busDetails where srcLocation='$src' AND destLocation='$dest' OR stop1='$src' OR stop2='$src' OR stop3='$src' OR stop4='$src' OR stop5='$src' OR stop1='$dest' OR stop2='$dest' OR stop3='$dest' OR stop4='$dest' OR stop5='$dest'";
$data=mysql_query($q);
$_row=mysql_fetch_array($data);
if($_row!=null){
    echo '<table border=\"2px solid\" cellspacing=5 cellpadding=\"15\"  style=\"height:250px;\">';
echo '<tr>';
echo '<th style="background-color:red; color:white;">';
echo 'Bus No';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'Src Location';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'destLocation';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'arrTime';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'deptTime';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'stop1';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'stop2';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'stop3';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'stop4';
echo '</th>';
echo '<th style="background-color:red; color:white;">';
echo 'stop5';
echo '</th>';
echo '</tr>';
while($_row=mysql_fetch_array($data)){
    

echo '<tr>';
echo '<td style=\"font-style: bolder\">';
echo $_row['busNo'];;
echo '</td>';
echo '<td>';
echo $_row['srcLocation'];
echo '</td>';
echo '<td>';
echo $_row['destLocation'];
echo '</td>';
echo '<td>';
echo $_row['arrTime'];
echo '</td>';
echo '<td>';
echo $_row['deptTme'];
echo '</td>';
echo '<td>';
echo $_row['stop1'];
echo '</td>';
echo '<td>';
echo $_row['stop2'];
echo '</td>';
echo '<td>';
echo $_row['stop3'];
echo '</td>';
echo '<td>';
echo $_row['stop4'];
echo '</td>';

echo '<td>';
echo $_row['stop5'];
echo '</td>';
echo '</tr>';

   
}
echo '</table>';
}

else{
    echo '<h3>No Record Found...Please Search for nearby location</h3>';
}
}
else{
    echo 'Please Enter Some Value to be Search';
}
?>
 
            </div>
               
        </div>
        <p id='content'></p>
        <div class="nav navbar-inverse" >
    <div class="rows"  style="color:white; margin-left:2em;">
        <div class="cols-xs-4" style="padding:1em;  float:left;">
            About Us
            <br/>   <br/>
            Contact Us 
        <br/>        
        </div>
        <div class="cols-xs-4" style="padding:1em;  float:right;">
            About Us
            <br/>   <br/>
            Contact Us 
        <br/>        
        </div>
    </div>
    <br/>
    <br/>
    <div class="rows"  style="color:white; margin-left:2em;">
        <div class="cols-xs-4" style="padding:1em;">
         <center>
             This website has not yet been approved by GSRTC.
         </center>  
        <br/>        
        </div>
       
    </div>
</div>


 </body>
 

 </html>
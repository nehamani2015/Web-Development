<!DOCTYPE HTML>
<html>
<head><title>REGISTRATION FORM</title>
<script type="text/javascript">
  function valiadate()
  {
    var r=/^[a-zA-Z]+$/;
  }
  if(r.test(letters.firstname.value)==false)
  {
    alert("Name should be in alphabates only");
    letters.firstname.focus();
    return false;
  }
  if(r.test(letters.lastname.value)==false)
  {
    alert("Name should be in alphabates only");
    letters.lastname.focus();
    return false;
  }
  if(r.test(letters.father.value)==false)
  {
    alert("Name should be in alphabates only");
    letters.father.focus();
    return false;
  }
  if(r.test(letters.mother.value)==false)
  {
    alert("Name should be in alphabates only");
    letters.mother.focus();
    return false;
  }
function phonenumber(tnum)
{
  var phoneno = /^\d{10}$/;
  if((tnum.value.match(phoneno))
        {
      return true;
        }
      else
        {
        alert("message");
        return false;
        }
</script>
</head>
<body>
<h1><center>KRISHNA AND KAVERI HOSTEL FOR WOMEN </br>
INDIRA GANDHI DELHI TECHNICAL UNIVERSITY FOR WOMEN</br>
                       KASHMERE GATE,DELHI-110006</br></center></h1>
              <center>  <h3><u>APLICATION FORM</u></br></h3>
<h4>(2017-2018 SESSION)</br>
(ALL ENTRIES MUST BE MADE IN CAPITAL LETTERS)</br></h4></center>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" name="myform" onsubmit="return valiadate()" enctype="multipart/form-data">
<fieldset>
    <legend><font face ="verdana " color="darkpink">Personal details</font></legend>
      Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select id ="Category" name="Category" required/>
	<!--<option></option>-->
    <option value="Mrs." name="salutaion" > Mrs.</option>
    <option value="Ms." name="salutaion">Ms.</option>
    </select>
	<input type="text" name="firstname" required/>
    <input type="text" name="lastname"  required/><br><br>
	E-mail:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="email" name="email" required/></br></br>
	TEL.NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text" name="tnum" max="10" required/></br></br>
    Nationality&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="nationality" value="Indian" required/>Indian
	<input type="radio" name="nationality" value="Others" required/>Others
    <br><br>
	 Date of birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="date" name="date" required/><br><br>
    Application no: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="enum" max="10" required/><br><br>
	JEE Rank: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input type="text" name="jnum" required/><br><br>
	Courses:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select id ="courses" name="courses" required/>
	<option></option>
    <option value="Mca">MCA</option>
    <option value="Mtech">Mtech</option>
    <option value="Btech">Btech</option>
    <option value="B.arch">B.arch</option>
    <option value="Phd">Phd</option>
    </select></br></br>
	Date of joining:&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="date" name="date" required/><br><br>
    Category:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <select id ="Category" name="Category" required/>
	<option></option>
    <option value="SC">SC</option>
    <option value="ST">ST</option>
    <option value="PH">PH</option>
    <option value="GEN">GEN</option>
    <option value="DEF">Phd</option>
	<option value="DELHI">DELHI</option>
	<option value="OUTSIDE DELHI">OUTSIDE DELHI</option>
    </select></br></br>
	Name of parents:</br></br>
	&nbsp;&nbsp;Father's name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="father" required/></br></br>
	&nbsp;&nbsp;Mother's name:&nbsp;&nbsp;&nbsp;<input type="text" name="mother" required/></br></br>
	&nbsp;&nbsp;Email-id:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" required/></br></br>
	Present address of Parents:</br></br>
		 OFFICE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" required/>
		 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		 TEL.NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tnum" max="10" required/>
	</br>
	</br>
	 RESIDENCE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" required/>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  TEL.NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tnum" max="10" required/></br>
	 </br>
	 Name and </br>address Guardian-I:<input type="text" name="address" required/>
	 &nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp&nbsp;&nbsp
	 TEL.NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <input type="text" name="tnum" max="10" required/></br>
	</br>
	</br>
	 Name and </br>address Guardian-II:<input type="text" name="address" required/>
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	TEL.NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="tnum" max="10" required/></br></br>
	Contact Address in </br>case of Emergency :<input type="text" name="address" required/>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	TEL.NO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="text"  name="tnum" max="10" required/></br></br>
	</fieldset>
	<fieldset>
    <legend><font face ="verdana " color="darkpink">Other details</font></legend>
	 Extra Curricular Activities:</br>
	<textarea rows="4" cols="50" name="comment" required/>
    </textarea><br><br>
	Photo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" /></br></br></br>
Singnature<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<input name="userfile" type="file" />
</fieldset>
    <input type="submit" value="Submit">
    <input type="reset" value="reset">	<br><br>
    </form>
<?php

// check if a file was submitted
if(!isset($_FILES['userfile']))

{
    //echo '<p>Please select a file</p>';
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
 require('condb.php');
    $maxsize = 10000000; //set to approx 10 MB
 //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));

                    // put the image in the db...
                    // database connection
                    mysql_connect($mysql_hostname, $mysql_user, $mysql_password) OR DIE (mysql_error());

                   
                  
                    // our sql query
                    $sql = "INSERT INTO img
                    (image, name)
                    VALUES
                    ('{$imgData}', '{$_FILES['userfile']['name']}');";

                    // insert the image
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
                    $msg='<p>Image successfully saved in database with id ='. mysql_insert_id().' </p>';
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>
</body>

</html>

 
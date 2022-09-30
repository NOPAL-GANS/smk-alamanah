<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
    body {
      background-color: lightslategray;
    }
 
    /* Style all input fields */
    input {
      width: 70vh;
      padding: 12px;
      border: 1px solid lightblue;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
    }
    
    .sbm {
      width: 15%;
      transition: .5s;
      cursor: pointer;
    }

    .sbm:hover {
      color: aqua;

    }

    /* Style the submit button */
    input[type=submit] {
      background-color: cadetblue;
      color: white;
    } 

    label{
      font-weight: bold;
      font-size:medium;
    }
    
    /* Style the container for inputs */
    .container {
      padding: 20px;
      width: 90%;
      height: auto;
    }
    
    /* The message box is shown when the user clicks on the password field */
    #message {
      display:none;
      background: #f1f1f1;
      color: #000;
      position: relative;
      padding: 20px;
      margin-top: 10px;
    }
    
    #message p {
      padding: 10px 35px;
      font-size: 18px;
    }

</style>
    <title>Document</title>
</head>
<body>
    <div class="container">
      <h1 style="text-align: center;">Login Staff</h1>
      <br><br><br>
      <div class="row" id="r1"> 
        <div class="col-lg-12">
        <form action="index2.php" method="post">
          <label for="usrname">Username :&nbsp</label>
          <input type="text" id="usrname" name="usrname" required placeholder="Masukan Nama">
        </div>
      </div> 


      <div class="row">
        <div class="col-lg-12">
          <label for="psw">Password :&nbsp;&nbsp;</label>
        <input type="password" id="psw" name="psw" pattern="(?=.*\d)(?=.*[a-z]).{8,}" title="Harap isi sesuai password" required placeholder="Masukan Password">
      </div>
    </div>    
      
     <div class="row">
       <div class="col-lg-12">   
           <input type="submit" value="Submit" class="sbm">
      </div>
     </div> 
   </form>
 </div>
      
      <script>
        var myInput = document.getElementById("psw");
        var letter = document.getElementById("letter");
        var number = document.getElementById("number");
        
        // When the user clicks on the password field, show the message box
        myInput.onfocus = function() {
          document.getElementById("message").style.display = "block";
        }
        
        // When the user clicks outside of the password field, hide the message box
        myInput.onblur = function() {
          document.getElementById("message").style.display = "none";
        }
        
        // When the user starts to type something inside the password field
        myInput.onkeyup = function() {
          // Validate lowercase letters
          var lowerCaseLetters = /[a-z]/g;
          if(myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
          } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }
        
          // Validate numbers
          var numbers = /[0-9]/g;
          if(myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
          } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
          }
        }
        </script>
</body>
</html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
</head>
<div name="registerErrors">
<h1>Contactos</h1>  
 </div>
<form name="contactform" method="post" action="index.php?a=doContact">


 
  <label for="first_name">First Name *</label>
 
 
  <input  type="text" name="first_name" maxlength="50" size="30">

  <label for="last_name">Last Name *</label>
 
  <input  type="text" name="last_name" maxlength="50" size="30">
 
  <label for="email">Email Address *</label>
       
  <input  type="text" name="email" maxlength="80" size="30">
 
  <label for="telephone">Telephone Number</label>
 
  <input  type="text" name="telephone" maxlength="30" size="30">
 
  <label for="comments">Comments *</label>
 
  <textarea  name="comments" maxlength="1000" cols="25" rows="6"></textarea>
 
  <input type="submit" class="form-control" value="Submit"> 
 
</form>

	</div>
  
    </div>
    </div>
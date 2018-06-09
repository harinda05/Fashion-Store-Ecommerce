<?php 

require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');
var_dump($_SESSION["role"]);
if ($_SESSION["role"] == 'admin' ){

	echo '


	<html>
<body>
<div class="containerf">

	<form class="add" method="POST" action="add_clientf.php">

				<h2>Add New Department User</h2><br>
	<div>
	<input type="text" placeholder="Username" name="username" /> </div>

	<div>
	<input type="text" placeholder="Password" name="password" /> </div>

	<div>
	<input type="email" placeholder="Email" name="email"/></div>

	<div>
      <label> Department </label>
     	<select id="form-control"  name="department">
        <option value="1" >Finance</option>
        <option value="2">HR</option>
        <option value="3">Marketing</option>
        <option value="4">IT</option>
        <option value="5">Production</option>
      </select>
    </div>

	<div id="post_date" hidden>
          <input type="text" name="role" value="client" />
     </div>
   
     
	<input type="submit" value="submit" /> 
	<input type="submit" value="Cancel"/></div>

			
	</form>
		</div>
</body>

</html> '; }

else {
	echo 'ACCCESS DENIED';
}






?>
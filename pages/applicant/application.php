<html>

<?php 



require($_SERVER['DOCUMENT_ROOT'] . '/fashion/header.php');

require($_SERVER['DOCUMENT_ROOT'] . '/fashion/php/session.php');


?>
	<div class="containerf">

	<form class="add" method="POST" action="../../php/apply.php" enctype="multipart/form-data">

				<h2>Apply for this Job</h2><br>
	<div>
	<input type="text" placeholder="NIC" name="nic" id ="nic"/> </div>

	<div>
	<input type="text" placeholder="Full Name" name="name" id ="name"/></div>

     <div id="date">
          <label>DOB:</label>
          <input type="date" name="bdate"/>

     </div>

     <div>
  <input type="text" placeholder="contact no" name="contact" id ="contact"/> </div>

     <div>
     <input type="text" placeholder="Address" name="address" id ="address"/></div>

     <div>
     <input type="tmail" placeholder="Email" name="email" id ="email"/></div>
	

	


	
	<div>
          <label> Highest Educational Qualification </label>
     	<select id="form-control"  name="edu">
                                             <option >Post Graduate</option>
                                             <option >Graduate</option>
                                             <option >Advanced Level</option>
                                             <option >Ordinary Level</option>
                                                    </select> </div>
	



	<div id='container_prof'>
          <label>Professional Qualifications</label>
          <div id='prof'>
               <input type="text" placeholder="Year" name="prof_year[]" />
               <input type="text" placeholder="Qualification" name="prof_qual[]" />
               <input type="text" placeholder="Institute" name="prof_inst[]" />
          </div>

          <input type='button' id="prof_button" onclick="duplicate_prof()" value='Add More'>
     </div>


     <div id='container_work'>
          <label>Work Experience</label>
          <div id='work'>
               <input type="text" placeholder="Post" name="work_post[]" />
               <input type="text" placeholder="Duration" name="work_dur[]" />
               <input type="text" placeholder="Institute" name="work_inst[]"/>
          </div>

          <input type='button' id="work_button" onclick="duplicate_work()" value='Add More'>
     </div>

     <div>
          <label>CV: </label>
          <input  type="file" name="cv">
     </div>
     <div id='container_img'>
       <div id='imgproof'>
            <label>Attach Image </label>
            <input  type="file" name="img_proof[]" >
        </div>
        <input type='button' id="img_button" onclick="addmore_img()" value='Add More'>
       
     </div>
	<div>
	<input type="submit" value="submit" /> 
	<input type="submit" value="Cancel"/></div>

			

	</form>
		</div>


	
 


</body>

<script type="text/javascript">
     var i = 0;
     var original_prof = document.getElementById('prof');

     function duplicate_prof() {
         var clone_prof = original_prof.cloneNode(true); 
         clone_prof.value = "";// "deep" clone
         clone_prof.id = "prof" + ++i;
         original_prof.parentNode.appendChild(clone_prof);
     }
</script>


<script type="text/javascript">
     var i = 0;
     var original_work = document.getElementById('work');

     function duplicate_work() {
         var clone_work = original_work.cloneNode(true); // "deep" clone
         clone_work.id = "work" + ++i;
         clone_work.find('input').value(''); 
         original_work.parentNode.appendChild(clone_work).find('input').value('');
     }
</script>

<script type="text/javascript">
     var i = 0;
     var original_img = document.getElementById('imgproof');

     function addmore_img() {
         var clone_img = original_img.cloneNode(true); // "deep" clone
         clone_img.id = "imgproof" + ++i;
         original_img.parentNode.appendChild(clone_img);
     }
</script>

</html>

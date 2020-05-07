<!DOCTYPE html>
<html> 
	<head> 
		  <meta charset="UTF-8">
			<link rel="stylesheet" href="css/style.css">
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
			<script src="js/html2canvas.js"></script>
			<script src="js/polyfill.min.js"></script>
			<script src="js/canvas-toBlob.js"></script>
			<script src="js/FileSaver.js"></script>

		<title>Application</title> 
	</head> 
<style>
 input[type=text]{
                    background-color: transparent;
                    border: 0px solid; 
                    height: 10px;
                   /* width: 200px; */
                        font-weight: bold;
                        padding: 4px;
                    
                }



</style>
<body>


<form class=""action="{{  action('ProfileController@statement')}}"  method="get">
		
	  <button class="button"  type="submit" style="vertical-align:middle"><span>Επόμενο </span>  </button>

  
</form>
<button class="button"  onclick="Save();" type="submit"  style="vertical-align:middle"><span>Αποθήκευση </span></button>
<div align="left" ><img id="owl"  src="uliko/owl.png" onclick="Help()" ></div>
<!--<div id="instructions"><h3>1.Συμπληρώστε την αίτηση<br></br>2.Σάρωση<br></br>3.Στην συνέχεια αποθηκεύστε την αίτηση <br></br>στον υπολογιστή σας(δεξί κλίκ αποθήκευση εικόνας)<br></br>4.Επόμενο</h3></div>
--><div align="center">
	<div align="left"><img src="uliko/teicm.png"></div>
	<div class="boxed"> <h1>Αίτηση Σίτισης</h1> 
	  <br></br>  <!-- <br><embed src="uliko/aitisi_sitisis_2018.pdf" type="application/pdf"  width="800px" height="600px" /> -->
		<div id="capture">
      <img  src="uliko/aitisi_sitisis_2018.jpg" width="800px" height="100%">
			<div class="top-left1"><input type="text" name="lastname"  ></div>
			<div class="top-left2"><input type="text" name="name"></div>
			
			<div class="top-left3"><input type="text" name="lastname"></div>
			<div class="top-left4"><input type="text" name="lastname"></div>
			<div class="top-left5"><input type="text" name="lastname"></div>
			<div class="top-left6"><input type="text" name="lastname"></div>
			<div class="top-left7"><input type="text" name="lastname"></div>
		
			<div class="top-left8"><input type="text" name="lastname"></div>
			<div class="top-left9"><input type="text" name="lastname"></div>
			<div class="top-left10"><input type="text" name="lastname"></div>
			<div class="top-left11"><input type="text" name="lastname"></div>
			<div class="top-left12"><input type="text" name="lastname"></div>
			<div class="top-left13"><input type="text" name="lastname"></div>
			<div class="top-left14"><input type="text" name="lastname"></div>
			<div class="top-left15"><input type="text" name="lastname"></div>
			<div class="top-left16"><input type="text" name="lastname"></div>
			<div class="top-left17"><input type="text" name="lastname"></div>
			<div class="top-left18"><input type="text" name="lastname"></div>
	
			<div class="checkbox1"><input type="checkbox"></div>
			<div class="checkbox2"><input type="checkbox"></div>
			<div class="checkbox3"><input type="checkbox"></div>
			<div class="checkbox4"><input type="checkbox"></div>
			<div class="checkbox5"><input type="checkbox"></div>
			<div class="checkbox6"><input type="checkbox"></div>
			<div class="checkbox7"><input type="checkbox"></div>
			<div class="checkbox8"><input type="checkbox"></div>
			<div class="checkbox9"><input type="checkbox"></div>
			<div class="checkbox10"><input type="checkbox"></div>
			<div class="checkbox11"><input type="checkbox"></div>
			<div class="checkbox12"><input type="checkbox"></div>
			<div class="checkbox13"><input type="checkbox"></div>
			<div class="checkbox14"><input type="checkbox"></div>
	

			<div  class="select"><input type="file" name="file" id="profile-img" ></div>

<div  class="imgprofile"> <img src="" id="profile-img-tag" width="102px" height="122" /> </div>



</div><!--center-->
</div><!--boxed-->


<script>
function Help() {alert("1.Συμπληρώστε την αίτηση\n2.Αποθήκευση\n3.Στην συνέχεια αποθηκεύστε την αίτηση στον υπολογιστή σας\n4.Επόμενο");}</script>
<!--
<script>
	
function Save() {
html2canvas(document.querySelector("#capture")).then(canvas => {
	/*	document.body.appendChild(canvas) */
		var img = canvas.toDataURL()
		window.open(img);
		

});
}
</script>
-->

<script>
	function Save() {
html2canvas(document.querySelector("#capture")).then(function(canvas) {
   
   // Export canvas as a blob 
   canvas.toBlob(function(blob) {
        // Generate file download
        window.saveAs(blob, "yourwebsite_screenshot.png");
    });
});
	}
</script>


<script type="text/javascript">

    function readURL(input) {

        if (input.files && input.files[0]) {

            var reader = new FileReader();

            

            reader.onload = function (e) {

                $('#profile-img-tag').attr('src', e.target.result);

            }

            reader.readAsDataURL(input.files[0]);

        }

    }

    $("#profile-img").change(function(){

        readURL(this);

    });

</script>




		
</div> 
</body> 
</html> 


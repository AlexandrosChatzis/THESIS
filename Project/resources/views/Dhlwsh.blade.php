<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/html2canvas.js"></script>
    <script src="js/polyfill.min.js"></script>
    <script src="js/canvas-toBlob.js"></script>
    <script src="js/FileSaver.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animate.css">
    <meta name="viewport" content="width=device-width, initial-scale=0.3">
    <title>Statement</title>
</head>
<style>
    textarea {
        overflow: hidden;
        background-color: transparent;
        border: 0px solid;
        width: 710px;
        
        padding: 12px;
        margin-top: -1%;
        line-height: 122%;
        resize: none;
        word-wrap: break-word;
    }

    input[type=text] {
        overflow: hidden;
        background-color: transparent;
        border: 0px solid;

        /* width: 200px; */
        


    }


    .boxed {
        width: 900px;
    }
</style>

<body>




    @include('layouts.student_navbar')



    <!--
<div id="mynavbar">
<ul>
<li style="float:left; height:50px;"  >
      <a   href="{{ url('/choose_application_type') }}"><i class="fa fa-home" style="font-size:36px"></i></a>
      </li>
      
      <li>
      <a  href="{{ url('/') }}">Πληροφορίες</a>
      </li>

      <li>
      <a  href="{{ url('/profile') }}">GDPR</a>
      </li>
<li>
      <a   href="{{ url('/application4') }}">Αίτηση</a>
      </li>
      <li>
      <a  class="active"  href="{{ url('/statement') }}">Υπεύθυνη Δήλωση</a>
      </li>
      <li>
      <a  href="{{ url('/Submission2') }}">Υποβολή Δικαιολογητικών</a>
      </li>
     
      </ul>
</div>
-->





    <div>
        <button class="button" onclick="Save();" type="submit" style="vertical-align:middle"><span>Αποθήκευση
            </span></button></div>
    <!--  <div align="left"><img src="uliko/teicm.png"></div>
        <div align="center" ><img id="owl"  src="uliko/owl.png" onclick="Help()" ></div>
<div id="instructions"><h3>1.Συμπληρώστε την αίτηση<br></br>2.Σάρωση<br></br>3.Στην συνέχεια αποθηκεύστε την αίτηση <br></br>στον υπολογιστή σας(δεξί κλίκ αποθήκευση εικόνας)<br></br>4.Επόμενο</h3></div>
-->
    <div align="center">
        <div class="boxed">
            <h1>Υπεύθυνη Δήλωση</h1>
            <br></br>
            <!-- <br><embed src="uliko/aitisi_sitisis_2018.pdf" type="application/pdf"  width="800px" height="600px" /> -->
            <div id="capture">
                <img src="uliko/ypeuthini_dilosi_sitisis.jpg" width="800px" height="100%">

                <div class="gap1"><input type="text" name="lastname" size="20"></div>
                <div class="gap2"><input type="text" name="lastname" size="22"></div>
                <div class="gap3"><input type="text" name="lastname" size="50"></div>
                <div class="gap4"><input type="text" name="lastname" size="50"></div>
                <div class="gap5"><input type="text" name="lastname" size="50"></div>
                <div class="gap6"><input type="text" name="lastname" size="50"></div>
                <div class="gap7"><input type="text" name="lastname" size="15"></div>
                <div class="gap8"><input type="text" name="lastname" size="21"></div>
                <div class="gap9"><input type="text" name="lastname" size="14"></div>
                <div class="gap10"><input type="text" name="lastname" size="10"> </div>
                <div class="gap11"><input type="text" name="lastname" size="1cm" maxlength="4"></div>
                <div class="gap12"><input type="text" name="lastname" size="4"></div>
                <div class="gap13"><input type="text" name="lastname" size="15"></div>
                <div class="gap14"><input type="text" name="lastname" size="16"></div>

                <div class="gap15"><input type="text" name="lastname" size="40"></div>
                <div class="gap16"><textarea type="textarea" rows="5" cols="85" name="lastname" maxlength="435"> </textarea></div>


                <div class="gap17"><input type="text" name="lastname" size="10cm" style="font-weight: bold; font-size: 10px; " maxlength="8"></div>
                <div class="gap19"><input type="text" name="lastname" style="text-align:center; width: 250px;"></div>







            </div>
            <!--capture-->
        </div>
        <!--center-->
    </div>
    <!--boxed-->




    <script>
        function Help() {
            bootbox.alert({
                message: "<h6>1.Συμπληρώστε την δήλωση<h6>2.Αποθήκευση<h6>3.Εκτύπωση<h6>4.Στην συνέχεια μεταβείτε σε μια δημόσια αρχή ΚΕΠ για να επικυρώσετε το έγγραφο<h6>5.Σαρώστε το επικυρωμένο πλέον εγγραφο<h6>6.Τέλος αποθηκεύστε την δήλωση στον υπολογιστή σας<h6>7.Επόμενο",
                className: 'rubberBand animated'
            });

        }
    </script>



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
        /*function Save() {
html2canvas(document.querySelector("#capture")).then(function(canvas) {
   
   // Export canvas as a blob 
   canvas.toBlob(function(blob) {
        // Generate file download
        window.saveAs(blob, "yourwebsite_screenshot.png");
    });
});*/
        function Save() {
            html2canvas(document.querySelector("#capture")).then(function(canvas) {

                var doc = new jsPDF();
                doc.addImage(canvas, 0, 0, 210, 297);
                doc.save('Υπεύθυνη Δήλωση.pdf');
            });

        }
    </script>

    <script type="text/javascript">
        function readURL(input) {

            if (input.files && input.files[0]) {

                var reader = new FileReader();



                reader.onload = function(e) {

                    $('#profile-img-tag').attr('src', e.target.result);

                }

                reader.readAsDataURL(input.files[0]);

            }

        }

        $("#profile-img").change(function() {

            readURL(this);

        });
    </script>

    <!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>


    <!-- bootbox code -->
    <script src="js/bootbox.min.js"></script>
    <script src="js/bootbox.locales.min.js"></script>

    </div>
</body>

</html>
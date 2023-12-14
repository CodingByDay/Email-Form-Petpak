<!DOCTYPE html>
<html>
<head>
    <title>Prijava - Petpak</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="styleshebet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    <link rel="mask-icon" href="images/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">



    <style type="text/css">

    #quiz {
        display: none;
    }
    .container {
        padding: 2em;
        background-color: white;
    }


    body {
        background-color: blue;
    }


    .action-buttons {
        display: flex;
        margin-right: 2em;
        justify-content: center;
        margin-top: 20px; /* Add some space from the top */
    }
    .action-buttons button {
        margin: 2em;
    }
    .container {
            padding: 2em;
            background-color: white;
            border-radius: 10px; /* Adjust the value to change the roundness */
        }


        .clock {
            font-size: 1em;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            text-align: center;
            padding: 20px;
            background-color: blue; 
            color: #fff;
            border-radius: 10px;
            display: inline-block;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            animation: glow 2s ease-in-out infinite alternate;
        }

        @keyframes glow {
            from {
                text-shadow: 0 0 10px #fff, 0 0 20px #00bcd4, 0 0 30px #2196f3, 0 0 40px #9c27b0, 0 0 50px #f44336, 0 0 60px #ff9800, 0 0 70px #ffeb3b;
            }
            to {
                text-shadow: 0 0 20px #fff, 0 0 30px #00bcd4, 0 0 40px #2196f3, 0 0 50px #9c27b0, 0 0 60px #f44336, 0 0 70px #ff9800, 0 0 80px #ffeb3b;
            }
        }
    </style>
</head>
<body>
<?php



?>
<div class="container">
    <center><div class="clock" id="digitalClock"></div></center>
    <h1 class="text-center mt-4">NOTRANJA PRIJAVA KRŠITVE PREDPISA V DELOVNEM OKOLJU</h1>
    <p>Vašo prijavo bo obravnaval zaupnik v organizaciji in vam po potrebi nudil pomoč v primeru povračilnih ukrepov delodajalca. Prijava bo obravnavana v postopku, kot je opredeljen v notranjem pravilniku (glej povezavo). Če tako želite, lahko prijavo podate anonimno, brez razkritja svojih osebnih podatkov. Če želite prejeti povratno informacijo, pa morate navesti, na kateri naslov oziroma način jo želite prejeti.</p>
    <div class="shrink-button" onclick="shrinkContent()">
    <div class="shrink-button" onclick="shrinkContent()">
    <div style="padding: 10px; text-align: right; cursor:pointer;" >
        <i class="material-icons" onclick="closeWindow()" style="font-size: 50px; color: black;">minimize</i>
    </div>

</div>

</div>
    <div class="survey-buttons d-flex justify-content-center">
    <!-- Boxed text with Material Icons for anonymous completion -->
    <div style="text-align: center; cursor:pointer; margin-right: 20px;">
        <div style="border: 2px solid black; padding: 10px;">
            <i class="material-icons" onclick="selectCompletionMethod('anonymous')" style="font-size: 50px; color: black;">visibility_off</i>
        </div>
        <div>Anonimno</div>
    </div>
    
    <!-- Boxed text with Material Icons for personal completion -->
    <div style="text-align: center;">
        <div style="border: 2px solid black; cursor:pointer;padding: 10px;">
            <i class="material-icons" onclick="selectCompletionMethod('personal')" style="font-size: 50px; color: black;">visibility</i>
        </div>
        <div>Navadno</div>
    </div>
</div>

<br /> <br />

    <form id="quiz">
        <!-- Question 1 -->
        <center><h2 id="title-add">PODATKI O KRŠITVI</h2></center>
        <br />
       


        <div class="form-group">
            <label for="organization">Naziv organizacije:</label>
            <input type="text" class="form-control" id="organization" name="organization" required>
        </div>
        <br />
        <div class="form-group">
            <label for="violation_time">Čas začetka, trajanja in konca kršitve:</label>
            <input type="text" class="form-control" id="violation_time" name="violation_time" required >
        </div>
        <br />

        <div class="form-group">
            <label for="violator_info">Podatki o kršitelju:</label>
            <input type="text" class="form-control" id="violator_info" name="violator_info" required>
        </div>
        <br />

        <div class="form-group">
            <label for="violation_description">Opis kršitve:</label>
            <textarea class="form-control" id="violation_description" name="violation_description" rows="4" cols="50" ></textarea>
        </div>
        <br />

        <div class="form-group">
            <label for="violated_law">Kršeni predpis:</label>
            <input type="text" class="form-control" id="violated_law" name="violated_law" >
        </div>
        <br />

        <div class="form-group">
            <label for="evidence">Priče, dokumenti ali druge dokaze:</label>
            <textarea class="form-control" id="evidence" name="evidence" rows="4" cols="50" required></textarea>
        </div>
        <br />

        <div class="custom-file mb-3">
        <input type="file" class="custom-file-input" name="evidence_file" id="evidence_file">
        <label class="custom-file-label" for="customFile">Choose file</label>
        <br />

    </div>
        <center><h2>ZAŠČITA PRED POVRAČILNIMI UKREPI</h2></center>
        <br />

        <div class="form-group">
            <label>Ali obstaja tveganje povračilnih ukrepov zaradi prijave?</label><br>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" onclick="showMeasuresReact()" id="retaliatory_risk_yes" name="retaliatory_risk" value="yes">
                <label class="form-check-label" for="retaliatory_risk_yes">DA</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" onclick="hideMeasuresReact()" type="radio" id="retaliatory_risk_no" name="retaliatory_risk" value="no">
                <label class="form-check-label" for="retaliatory_risk_no">NE</label>
            </div>
        </div>
        <br />

        <div class="form-group" id="measures_react">
            <label for="retaliatory_measures">Povračilni ukrepi:</label>
            <textarea class="form-control" id="retaliatory_measures" name="retaliatory_measures" rows="4" cols="50"></textarea>


            <div class="form-group">
            <label>Ali potrebujete pomoč in zaščito pred povračilnimi ukrepi (10. člen ZZPri)?</label><br>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="legal_options" name="legal_options[]" value="Informacije o pravnih možnostih">
                <label class="form-check-label" for="legal_options">Informacije o pravnih možnostih</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="confirmation_receipt" name="legal_options[]" value="Potrdilo o vloženi prijavi">
                <label class="form-check-label" for="confirmation_receipt">Potrdilo o vloženi prijavi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="evidence_from_process" name="legal_options[]" value="Dokazila iz postopka s prijavo">
                <label class="form-check-label" for="evidence_from_process">Dokazila iz postopka s prijavo</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="other_option" name="legal_options[]" value="Drugo">
                <label class="form-check-label" for="other_option">Drugo:</label>
                <input type="text" class="form-control" id="other_text" name="other_text">
            </div>
        </div>
        </div>
        <br />

        <center><h2>INFORMACIJE O OBRAVNAVI PRIJAVE</h2></center>
        <!-- Add fields related to handling the report -->
        <br />

        <center><h2>POTRDITEV RESNIČNOSTI</h2></center>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="confirmation" name="confirmation" required >
                <label class="form-check-label" for="confirmation">Potrjujem resničnost informacij</label>
            </div>
        </div>
        <br />

        <div class="form-group">
            <label for="place_date">Kraj in datum:</label>
            <input type="text" class="form-control" id="place_date" name="place_date" required>
        </div>
        <div class="action-buttons">
            <button type="submit" class="btn btn-success" onclick="tabulateAnswers()">Oddaj</button>
        </div>
    </form>
</div>
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Vnesite podatke</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="fullName">Ime in priimek:</label>
            <input type="text" class="form-control" name = "fullname" id="fullName">
          </div>
          <div class="form-group">
            <label for="connectionType">Zaposlen ali druga povezava z delovnim okoljem:</label>
            <input type="text" class="form-control" name="connectionType" id="connectionType">
          </div>
          <div class="form-group">
            <label for="address">Naslov:</label>
            <input type="text" class="form-control" name="address" id="address">
          </div>
          <div class="form-group">
            <label for="email">E-pošta:</label>
            <input type="email" class="form-control" name="email" id="email">
          </div>
          <div class="form-group">
            <label for="phone">Telefon:</label>
            <input type="tel" class="form-control" name="phone" id="phone">
          </div>
          <div class="form-group">
            <label for="otherContacts">Drugi kontaktni podatki:</label>
            <input type="text" class="form-control" name="otherContacts" id="otherContacts">
          </div>


           <!-- Modal Footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Oddaj</button>
      </div>
        </form>
      </div>

     

    </div>
  </div>
</div>


<div class="modal" id="contactModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Kontaktni naslov za povratne informacije</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
                <form id="contactForm">
                    <div class="form-group">
                        <label for="feedbackEmail">E-pošta:</label>
                        <input type="email" name="email" class="form-control" id="feedbackEmail">
                    </div>
                    <!-- Other fields as needed -->

                    <button type="submit"class="btn btn-primary">Oddaj</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<!-- Your existing JavaScript -->
<script>

function closeWindow() {
    var surveyContainer = document.getElementById("quiz");
        surveyContainer.style.display = "none";
}

function updateClock() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Add leading zeroes to the numbers if they're less than 10
            hours = hours < 10 ? '0' + hours : hours;
            minutes = minutes < 10 ? '0' + minutes : minutes;
            seconds = seconds < 10 ? '0' + seconds : seconds;

            var time = hours + ':' + minutes + ':' + seconds;
            document.getElementById('digitalClock').innerText = time;
        }

        // Update the clock every second
        setInterval(updateClock, 1000);

        // Initial call to display the clock immediately
        updateClock();

    isAnonymous = true;
     function showMeasuresReact() {
        document.getElementById("measures_react").style.display = "block";
    }

    function hideMeasuresReact() {
        document.getElementById("measures_react").style.display = "none";
    }
    function selectCompletionMethod(method) {
        var heading = document.getElementById('title-add');

        var surveyContainer = document.getElementById("quiz");
        surveyContainer.style.display = "block";
        if (method === 'anonymous') {
            heading.textContent = "PODATKI O KRŠITVI (ANONIMNO)"
            isAnonymous = true;
        } else if (method === 'personal') {
            heading.textContent = "PODATKI O KRŠITVI (NAVADNO)"
            isAnonymous = false;
        }
    }

    document.getElementById('quiz').addEventListener('submit', function (e) {
            e.preventDefault(); // Prevent form submission      
                if(isAnonymous) {
                $('#contactModal').modal('show');
                // Get form data     
            } else {
                $('#myModal').modal('show');          
            }
        });


$('#contactForm').submit(function (e) {
    e.preventDefault(); // Prevent form submission

        var contactFormData = new FormData(this);
        var quizFormData = new FormData(document.getElementById('quiz'));

        // Combine data from both forms
        for (var pair of contactFormData.entries()) {
            quizFormData.append(pair[0], pair[1]);
        }

        sendDataToServer(quizFormData);

        $('#contactModal').modal('hide');
});

// Modify the submit event listener for the myModal form
$('#myModal form').submit(function (e) {
    e.preventDefault(); // Prevent form submission

        var myModalFormData = new FormData(this);
        var quizFormData = new FormData(document.getElementById('quiz'));

        // Combine data from both forms
        for (var pair of myModalFormData.entries()) {
            quizFormData.append(pair[0], pair[1]);
        }

        sendDataToServer(quizFormData);

        $('#myModal').modal('hide');
});

    function sendDataToServer(formData) {
        fetch('email_handler.php', {
            method: 'POST',
            body: formData
        })
        .then(response => {
            if (response.ok) {
                Swal.fire('Uspeh!', 'Podatki uspešno poslani!', 'success');
            } else {
                Swal.fire('Napaka!', 'Napaka, poskusite kasneje.', 'error');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
        $(function() {
            hideMeasuresReact()
            
        });


</script>
<center><img src="/images/logo.png" width="150" alt="Logo"></center>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Satisfaction Measurement Survey</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- main header -->
    <div class="container mt-3 text-spacing">
        <div class="text-center">
            <img src="seal.png" class="seal">
            <h4>Republic of the Philippines</h4>
            <h5>Department of Education</h5>
            <h6>REGION XII</h6>
            <p>DIVISION OF GENERAL SANTOS CITY</p>
        </div>
    </div>
    <div class="container mt-3">
        <div class="text-center">
            <h2>HELP US SERVE YOU BETTER!</h2>
        </div>
        <p class="text-justify">
            This Client Satisfaction Measurement (CSM) tracks the customer experience of government offices. Your feedback on your <b><u>recently concluded transaction</u></b> will help this office provide a better service. Personal information shared will be kept confidential and you always have the option not to answer this form.
        </p>
    </div>

    <!-- Start of Form -->
    <form method="POST" action="process_form.php">
        
    <!-- Section  1: Select Department -->
    <div class="container mt-3" id="formContainer">
        <div id="section1" class="form-section">
        <div class="form-group">
            <label for="department">Select Department</label>
            <select class="form-control" id="department" name="department" required>
                <option>Select Department</option>
                <option>Department  1</option>
                <option>Department  2</option>
                <option>Department  3</option>
            </select>
        </div>
        <!-- <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary" onclick="nextSection(2)">Next</button>
        </div> -->
    </div>

    <!-- Section  2: Client Info -->
    <div class="container mt-3" id="formContainer">
        <div id="section2" class="form-section">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="form-group">
                <label>Client Type</label>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clientType" id="clientTypeCitizen" value="Citizen" required>
                    <label class="form-check-label" for="clientTypeCitizen">
                        Citizen
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clientType" id="clientTypeBusiness" value="Business" required>
                    <label class="form-check-label" for="clientTypeBusiness">
                        Business
                    </label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="clientType" id="clientTypeGovernment" value="Government" required>
                    <label class="form-check-label" for="clientTypeGovernment">
                        Government
                    </label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" name="date" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="sex">Sex</label>
                    <select class="form-control" id="sex">
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="age">Age</label>
                    <input type="number" class="form-control" id="age" name="age" min="12" max="99">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="region">Region of Residence</label>
                    <input type="text" class="form-control" id="region" name="region" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="service">Service Availed</label>
                    <input type="text" class="form-control" id="service" name="serivce" required>
                </div>
            </div>
            <!-- <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mr-2" onclick="previousSection(1)">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextSection(3)">Next</button>
            </div> -->
        </div>
    </div>

    <!-- CC Questions -->
    <div class="container mt-3" id="formContainer">
        <div id="section3" class="form-section">
            <div class="container mt-3">   
                <p class="text-justify">
                    <b>INSTRUCTIONS:</b> Select your answer to the Citizen's Charter (CC) questions. The Citizen's Charter is an official document that reflects the services of a government agency/office including its requirements, fees, and processing times among times.
                </p>

                <div class="form-group">
                    <label>CC1: Which of the following best describes your awareness of CC?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1Option1" value="option1" required>
                        <label class="form-check-label" for="question1Option1">I know what a CC is and I saw this office's CC.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1Option2" value="option2">
                        <label class="form-check-label" for="question1Option2">I know what a CC but I did NOT see this office's CC.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1Option3" value="option3">
                        <label class="form-check-label" for="question1Option3">I learned of the CC only when I saw this office's CC.</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question1" id="question1Option4" value="option4">
                        <label class="form-check-label" for="question1Option4">I do not know what a CC is and I did not see one in this office. (Answer N/A on CC2 na CC3)</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>CC2: If aware of CC (answered 1-3 in CC1), would you say that the CC of this office was...?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2Option1" value="option1" required>
                        <label class="form-check-label" for="question2Option1">Easy to see</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2Option2" value="option2">
                        <label class="form-check-label" for="question2Option2">Somwhat easy to see</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2Option3" value="option3">
                        <label class="form-check-label" for="question2Option3">Difficult to see</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2Option4" value="option4">
                        <label class="form-check-label" for="question2Option4">Not visible at all</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question2" id="question2Option5" value="option5">
                        <label class="form-check-label" for="question2Option5">N/A</label>
                    </div>
                </div>
    
                <div class="form-group">
                    <label>CC3: If aware of CC (answered 1-3 in CC1), how much did the CC help you in your transaction?</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3Option1" value="option1" required>
                        <label class="form-check-label" for="question3Option1">Helped very much</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3Option2" value="option2">
                        <label class="form-check-label" for="question3Option2">Somwhat helped</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3Option3" value="option3">
                        <label class="form-check-label" for="question3Option3">Did not help</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="question3" id="question3Option4" value="option4">
                        <label class="form-check-label" for="question3Option4">N/A</label>
                    </div>
                </div>
                <!-- <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-primary mr-2" onclick="previousSection(2)">Previous</button>
                    <button type="button" class="btn btn-primary" onclick="nextSection(4)">Next</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- SQD -->
    <div class="container mt-3" id="formContainer">
        <div id="section4" class="form-section">
            <div class="table-responsive">
                <p class="text-justify">
                    <b>INSTRUCTIONS:</b> For Survey Question (SQD) 0-8, please select the column that best corrsponds to your answer.
                </p>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col">😊 <br>Strongly Agree</th>
                            <th scope="col">🙂 <br>Agree</th>
                            <th scope="col">😐 <br>Neutral</th>
                            <th scope="col">🙁 <br>Disagree</th>
                            <th scope="col">😠 <br>Strongly Disagree</th>
                            <th scope="col">N/A <br>Not Applicable</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SQD0. I am satisfied with the service that I availed.</td>
                            <td>
                                <input type="radio" name="sqd0" value="sqd0_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd0" value="sqd0_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd0" value="sqd0_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd0" value="sqd0_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd0" value="sqd0_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd0" value="sqd0_na">
                            </td>
                        </tr>
                        <tr>
                            <td>SQD1. I spent a reasonable amount of time for my transaction.</td>
                            <td>
                                <input type="radio" name="sqd1" value="sqd1_strong_agree" required>
                            </td>
                            <td>                              
                                <input type="radio" name="sqd1" value="sqd1_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd1" value="sqd1_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd1" value="sqd1_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd1" value="sqd1_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd1" value="sqd1_na">
                            </td>
                        </tr>
      
                        <tr>
                            <td>SQD2. The office followed the transaction's requirements and steps based on the information provided.</td>
                            <td>
                                <input type="radio" name="sqd2" value="sqd2_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd2" value="sqd2_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd2" value="sqd2_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd2" value="sqd2_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd2" value="sqd2_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd2" value="sqd2_na">
                            </td>
                        </tr>
      
                        <tr>   
                            <td>SQD3. The steps (including payment) I needed to do for my transaction were easy and simple.</td>
                            <td>
                                <input type="radio" name="sqd3" value="sqd3_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd3" value="sqd3_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd3" value="sqd3_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd3" value="sqd3_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd3" value="sqd3_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd3" value="sqd3_na">
                            </td>
                        </tr>
      
                        <tr>
                            <td>SQD4. I easily found information about my transaction from the office or its website.</td>
                            <td>
                                <input type="radio" name="sqd4" value="sqd4_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd4" value="sqd4_agree">
                            </td>
                            <td>    
                                <input type="radio" name="sqd4" value="sqd4_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd4" value="sqd4_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd4" value="sqd4_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd4" value="sqd4_na">
                            </td>
                        </tr>
                        
                        <tr>
                            <td>SQD5. I paid a reasonable amount of fees for my transaction.</td>
                            <td>
                                <input type="radio" name="sqd5" value="sqd5_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd5" value="sqd5_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd5" value="sqd5_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd5" value="sqd5_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd5" value="sqd5_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd5" value="sqd5_na">
                            </td>
                        </tr>
      
                        <tr>
                            <td>SQD6. I feel the office was fair to everyone, or "walang palakasan", during my transaction.</td>
                            <td>   
                                <input type="radio" name="sqd6" value="sqd6_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd6" value="sqd6_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd6" value="sqd6_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd6" value="sqd6_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd6" value="sqd6_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd6" value="sqd6_na">
                            </td>
                        </tr>
      
                        <tr>
                            <td>SQD7. I was treated corteously by the staff and (if asked for help) the staff was helpful.</td>
                            <td>
                                <input type="radio" name="sqd7" value="sqd7_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd7" value="sqd7_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd7" value="sqd7_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd7" value="sqd7_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd7" value="sqd7_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd7" value="sqd7_na">
                            </td>
                        </tr>
      
                        <tr>
                            <td>SQD8. I got what I needed from the government office, or (if denied) denial of request was sufficiently explained to me.</td>
                            <td>    
                                <input type="radio" name="sqd8" value="sqd8_strong_agree" required>
                            </td>
                            <td>
                                <input type="radio" name="sqd8" value="sqd8_agree">
                            </td>
                            <td>
                                <input type="radio" name="sqd8" value="sqd8_neutral">
                            </td>
                            <td>
                                <input type="radio" name="sqd8" value="sqd8_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd8" value="sqd8_strong_disagree">
                            </td>
                            <td>
                                <input type="radio" name="sqd8" value="sqd8_na">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mr-2" onclick="previousSection(3)">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextSection(5)">Next</button>
            </div> -->
        </div>
    </div>

    <!-- Suggestions -->
    <div class="container mt-3" id="formContainer">
        <div id="section5" class="form-section">
            <div class="form-group">
                <label for="suggestions">Suggestions on how we can further improve our services (Optional):</label>
                <textarea class="form-control" name="suggestions" id="suggestions" rows="3"></textarea>
            </div>
            <!-- <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-primary mr-2" onclick="previousSection(4)">Previous</button>
                <button type="button" class="btn btn-primary" onclick="nextSection(6)">Next</button>
            </div> -->
        </div>
    </div>

    <!-- Contact Info -->
    <div class="container mt-3" id="formContainer">
        <div id="section6" class="form-section">
            <div class="form-group">
                 <label for="contact">Email Address/Cellphone Number/Facebook Messenger Account (Optional):</label>
                  <textarea class="form-control" name="contact" id="contact" rows="3"></textarea>
            </div>
            <div class="d-flex justify-content-center">
               <!-- <button type="button" class="btn btn-primary mr-2" onclick="previousSection(5)">Previous</button> -->
               <button type="submit" class="btn btn-primary">Submit</button>
           </div>
      </div>
    </div>


    </form>

<!-- extrenal js
<script src="script.js"></script> -->

<!-- JQuery, Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>


</body>

</html>

<html>
<head>
<title>Registration form for PMKVY Junior Software Developer course</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="main_form.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script src="main_form_validate.js"></script> -->
</head>
<body>

<div class="container" style="margin-top: 1em;">
    <form method="post" action="imageupload.php">
        <div class="card person-card">
        <div class="progress" style="width: 90%; margin: 0 auto;">
            <div class="progress-bar" role="progressbar" style="width: 10%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
        </div>
            <div class="card-body">
                <img id="img_sex" class="person-img"
                    src="img/intro-logo1.png">
                <h2 id="who_message" class="card-title">Your Personal Information !</h2>
                <div class="row">
                    <div class="form-group col-md-2">
                        <select id="input_sex" name="shri" class="form-control">
                            <option value="Mr.">Mr.</option>
                            <option value="Ms.">Ms.</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4">
                        <input id="first_name" type="text" name="first_name" class="form-control" placeholder="First name">
                        <div id="first_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <input id="last_name" type="text" name="middle_name" class="form-control" placeholder="Middle name">
                        <div id="middle_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <input id="last_name" type="text" name="last_name" class="form-control" placeholder="Last name">
                        <div id="last_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="form-group col-md-2">
                            <label for="gender" class="col-form-label">Gender</label>
                                <select id="input_sex" name="gender" class="form-control">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                    </div>
                    <div class="form-group col-md-5">
                        <label for="email" class="col-form-label">Your father's name</label>
                        <input id="father_name" type="text" name="father_name" class="form-control" placeholder="Father's name">
                        <div id="father_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                    <div class="form-group col-md-5">
                            <label for="email" class="col-form-label">Your mother's name</label>
                        <input id="mother_name" type="text" name="mother_name" class="form-control" placeholder="Mother's name">
                        <div id="mother_name_feedback" class="invalid-feedback">
                            
                        </div>
                    </div>
                 
                </div>
                <hr>
                <div class="row">
                        <div class="form-group col-md-3">
                            <label for="DOB" class="col-form-label">DOB</label>
                            <input id="DOB" type="date" name="dob" class="form-control" placeholder="Your DOB">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="email" class="col-form-label">Religion</label>
                            <input id="father_name" type="text" name="religion" class="form-control" placeholder="Your religion">
                            <div id="father_name_feedback" class="invalid-feedback">
                                
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                                <label for="caste" class="col-form-label">Caste</label>
                                    <select id="input_sex" name="caste" class="form-control">
                                        <option value="GENERAL">GENERAL</option>
                                        <option value="ST">ST</option>
                                        <option value="SC">SC</option>
                                        <option value="OBC">OBC</option>
                                        <option value="MOBC">MOBC</option>
                                    </select>
                        </div>
                        
                 
                    </div>



            </div>
        </div>
        
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Your Contact Details !</h2>
                        <div class="row">
                                <div class="col-md-6" style="padding=0.5em;">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="address" class="col-form-label">Your address</label>
                                <textarea type="text" class="form-control" name="address" id="address" placeholder="Your address" required></textarea>
                                <div class="phone-feedback">
                                
                                </div>
                            </div>
                       
                        </div>
                        <div class="col-md-6" style="padding=0.5em;">
                                <div class="form-group">
                                        <label for="tel" class="col-form-label">Mobile number</label>
                                        <input type="text" class="form-control" name="mobile_number" id="tel" placeholder="+91 999 999 999" required>
                                        <div class="phone-feedback">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                            <label for="tel" class="col-form-label">Residence phone no</label>
                                            <input type="text" class="form-control" name="residence_number" id="tel" placeholder="+91 999 999 999" required>
                                            <div class="phone-feedback">
                                            
                                            </div>
                                        </div>  
                        </div>
                    </div>
                    </div>
                
        </div>

        <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Your Educational Qualifications !</h2>
                        <div class="row">
                                <div class="col-md-6" style="padding=0.5em;">
                        <div class="form-group">
                            <label for="10th" class="col-form-label">10th</label>
                            <input type="text" class="form-control" name="10th_per" id="10th_per" placeholder="percentage or grade" required>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                                <label for="12th" class="col-form-label">12th</label>
                                <input type="text" class="form-control" name="12th_per" id="12th_per" placeholder="percentage or grade" required>
                            <div class="email-feedback">
                            
                            </div>
                            </div>
                        
                            <div class="form-group">
                                        <label for="grad" class="col-form-label">Graduation</label>
                                        <input type="text" class="form-control" name="grad_per" id="grad_per" placeholder="graduation percentage" required>
                                        <div class="phone-feedback">
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="post_grad" class="col-form-label">Post Graduation</label>
                                        <input type="text" class="form-control" name="post_grad_per" id="post_grad_per" placeholder="post graduation percentage" required>
                                        <div class="phone-feedback">
                                        
                                        </div>
                                    </div>
                       
                        </div>
                        <div class="col-md-6" style="padding=0.5em;">
                                    
                                
                                    <div class="form-group">
                                            <label for="tel" class="col-form-label">Board</label>
                                            <input type="text" class="form-control" name="10th_board" id="10th_board" placeholder="Board Name" required>
                                            <div class="phone-feedback">
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tel" class="col-form-label">Board</label>
                                            <input type="text" class="form-control" name="12th_board" id="12th_board" placeholder="Board Name" required>
                                            <div class="phone-feedback">
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tel" class="col-form-label">University</label>
                                            <input type="text" class="form-control" name="grad_university" id="grad_university" placeholder="University Name" required>
                                            <div class="phone-feedback">
                                            
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="tel" class="col-form-label">University</label>
                                            <input type="text" class="form-control" name="post_grad_university" id="post_grad_university" placeholder="University Name" required>
                                            <div class="phone-feedback">
                                            
                                            </div>
                                        </div>  
                        </div>
                    </div>
                    </div>
                
        </div>
        <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Your Job Skills !</h2>
                        <div class="row">
                                <div class="col-md-6" style="padding=0.5em;">
                        <div class="form-group">
                            <label for="unicode" class="col-form-label">Have you ever worked in a UNICODE based website?
                            </label>
                            
                        </div>
                        <div class="form-group">
                            <label for="tai_ahom" class="col-form-label">Do you have any knowledge about the Tai Ahom language?
                            </label>
                            
                        </div>
                        
                            <div class="form-group">
                            <label for="font" class="col-form-label">Have you ever designed a font for a language?
                            </label>
                            
                        </div>
                                    
                       
                        </div>
                        <div class="col-md-6" style="padding=0.8em;">
                        <div class="form-group">
                            <label class="radio-inline">
                            <input type="radio" name="unicode" id="unicode"> Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="unicode" id="unicode" checked> No
                            </label>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="radio-inline">
                            <input type="radio" name="tai_ahom" id="tai_ahom"> Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="tai_ahom" id="tai_ahom" checked> No
                            </label>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                        
                            <div class="form-group">
                            <label class="radio-inline">
                            <input type="radio" name="font" id="font"> Yes
                            </label>
                            <label class="radio-inline">
                            <input type="radio" name="font" id="font" checked> No
                            </label>
                            <div class="email-feedback">
                            
                            </div>
                        </div>
                                    
                       
                        </div>
                        
                    </div>
                    </div>
                
        </div>
        <div style="margin-top: 1em;">
            <button type="submit" name="submit_first" class="btn btn-primary btn-lg btn-block">NEXT</button>
        </div>
        </form>
</div>




</body>
</html>
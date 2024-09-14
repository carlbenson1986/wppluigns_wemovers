<?php
/*
Plugin Name: WeMovers Submission Form
Description: Custom plugins for wemovers.co.uk to submit submission data to serviceM8. Short Code is [wemovers_submission_form]
Author: Carl Benson 
*/


// Shortcode for Multi step submission form
add_shortcode('wemovers_submission_form', 'wemovers_submission_form_fn');

function wemovers_submission_form_fn()
{
    ob_start();
?>

<link rel="stylesheet" href="<?php echo plugin_dir_url(__FILE__) ?>style.css">

    <div id="submisisonFrom" class="steps1">
        <form>
            <div id="step1">
                <h3>Contact Information</h3>
                <div class="mb-3">
                    <label for="fullname" class="form-label">First & last name</label>
                    <input type="text" name="fullname" class="form-control" id="fullname" require placeholder="Your First & last name">
                </div>
                <div class="mb-3">
                    <label for="emailAddress" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="emailAddress" require placeholder="Your Email Address">
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label">Conatact phone number</label>
                    <input type="text" name="phone" class="form-control" id="phone" require placeholder="Your Conatact phone number">
                </div>
                <div class="mb-3">
                    <label for="address" class="form-label">Job address</label>
                    <input type="text" name="address" class="form-control" id="address" require placeholder="Job Address">
                </div>
                <div class="mb-3">
                    <label for="company" class="form-label">Business / company name (optional)</label>
                    <input type="text" name="company" class="form-control" id="company" placeholder="Company name">
                </div>

                <h3>Please provide some details</h3>
                <p>What kind of sofa do you want to clear?</p>
                <div class="checkbroup">
                    <input type="checkbox" name="armchair1" class="btn-check" id="armchair1" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="armchair1"><i class="fa fa-minus" aria-hidden="true"></i> 1 - Armchair <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="sofa0" class="btn-check" id="sofa0" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="sofa0"><i class="fa fa-minus" aria-hidden="true"></i> 0-2 Sofa <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="seatersofa1" class="btn-check" id="seatersofa1" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="seatersofa1"><i class="fa fa-minus" aria-hidden="true"></i> 1-3 Seater Sofa <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="seatersofa4" class="btn-check" id="seatersofa4" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="seatersofa4"><i class="fa fa-minus" aria-hidden="true"></i> 0-4 Seater Sofa <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="cofnersofa0" class="btn-check" id="cofnersofa0" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="cofnersofa0"><i class="fa fa-minus" aria-hidden="true"></i> 0 - Corner Sofa <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="singlerecliner" class="btn-check" id="singlerecliner" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="singlerecliner"><i class="fa fa-minus" aria-hidden="true"></i> 0 - Single Recliner <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="reclinersofa" class="btn-check" id="reclinersofa" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="reclinersofa"><i class="fa fa-minus" aria-hidden="true"></i> 0 - Recliner Sofa <i class="fa fa-plus" aria-hidden="true"></i></label>

                    <input type="checkbox" name="sofabed" class="btn-check" id="sofabed" checked autocomplete="off">
                    <label class="btn d-flex justify-content-between" for="sofabed"><i class="fa fa-minus" aria-hidden="true"></i> 0 - Sofa Bed <i class="fa fa-plus" aria-hidden="true"></i></label>
                </div>

                <img src="https://cdn-www-content.servicem8.com/weuseservicem8/images/weuseservicem8_logo.png" alt="We use SrviceM8">
                <div class="text-end">
                    <a href="#" id="toSetp2" class="btn btn-primary btn-lg ml-auto py-3">Select a time ></a>
                </div>
            </div>
            <div id="step2">
                <div class="d-flex justify-content-between">
                    <a href="#" id="toStep1" class="btn btn-primary btn-lg py-3"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                    <a>Arrange time later</a>
                </div>
                <h3>Select a time</h3>
                <p>Select a time bellow that works for you. We'll arrive within 1 hour of your chosen time.</p>
                <div>

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="suggested-tab" data-bs-toggle="tab" data-bs-target="#suggestedTime" type="button" role="tab" aria-controls="suggestedTime" aria-selected="true">Suggested Time</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="available-tab" data-bs-toggle="tab" data-bs-target="#availableTime" type="button" role="tab" aria-controls="availableTime" aria-selected="false">All Available Time</button>
                        </li>


                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active my-3" id="suggestedTime" role="tabpanel" aria-labelledby="suggested-tab" tabindex="0">
							<div class="row">
								
							
                            <a href="" class="label btn d-flex justify-content-between">
                                <span>
                                    Tomorrow, 26 August<br />
                                    10:45 AM

                                </span>
                                <span>
                                    £58.75
                                </span>

                            </a>
                            <a href="" class="label btn d-flex justify-content-between">
                                <span>
                                    Tuesday, 27 August<br />
                                    9:30 AM

                                </span>
                                <span>
                                    £58.75
                                </span>

                            </a>
                            <a href="" class="label btn d-flex justify-content-between">
                                <span>
                                    Wednesday, 28 August<br />
                                    9:30 AM

                                </span>
                                <span>
                                    £58.75
                                </span>

                            </a>
                            <a href="" class="label btn d-flex justify-content-between">
                                <span>
                                    Thursday, 29 August<br />
                                    9:30 AM

                                </span>
                                <span>
                                    £58.75
                                </span>

                            </a>
                            <a href="" class="label btn d-flex justify-content-between">
                                <span>
                                    Friday, 30 August<br />
                                    10:45 AM

                                </span>
                                <span>
                                    £58.75
                                </span>

                            </a>
                            <a href="" class="label btn d-flex justify-content-between">
                                <span>
                                    Monday, 2 September<br />
                                    9:30 AM

                                </span>
                                <span>
                                    £58.75
                                </span>

                            </a>
								</div>
                        </div>
						
                        <div class="tab-pane fade my-3" id="availableTime" role="tabpanel" aria-labelledby="available-tab" tabindex="0">
                            <div class="d-flex justify-content-between">
                                <a href="" id="Pre3Days">
                                    < Previous 3 Days</a>
                                        <a href="" id="Next3Day">Next 3 Days</a>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <h5 class="text-center">Mon, 26 August</h5>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            10:45 AM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>

                                </div>
                                <div class="col-md-4">
                                    <h5  class="text-center">Tue, 27 August</h5>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            10:45 AM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <h5  class="text-center">Wed, 28 August</h5>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            10:45 AM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                    <a href="" class="label btn d-flex justify-content-between">
                                        <span>
                                            12:15 PM
                                        </span>
                                        <span>
                                            £58.75
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
				<p class="text-end">
                	<a href="" class="btn btn-lg btn-primary" id="toStep3">REVIEW ></a>
				</p>
            </div>
            <div id="step3">
                <a href="#" id="backStep2" class="btn btn-primary btn-lg py-3"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</a>
                <h3>Booking Summary</h3>
                <div class="border p-3 my-3">
                    <div class="d-flex justify-content-between">
                        <span  style="width:60px">Contact</span>
                        <span  style="width:80%">
                            Mark the Preferred<br/>
                            info@markthepreferred.com<br/>
                            02930383822<br/>
                            2 xyz uc street<br/>
                            WeMovers
                        </span>
                        <span style="width:30px">
                            <a href="" id="backToSetp2">Edit</a>
                        </span>
                    </div>
					<hr/>
                    <div class="d-flex justify-content-between mt-3">
                        <span  style="width:60px">Service</span>
                        <span  style="width:80%">
                            Sofe Removal<br/>
                            Tomorrow, 26 August<br/>
                            Arriving between <br/>
                            10:00am to 10:45am
                        </span>
                        <span  style="width:30px">
                            
                        </span>
                    </div>
                </div>
				<p class="text-end">
					<a href="" class="btn btn-lg btn-primary" id="toStep3">BOOK SERVICE ></a>	
				</p>
                
            </div>
            <div id="thankYou" class="text-center">
                <h3>Thank you for your booking!</h3>
                <p>You'll receive an email confirmation shortly.</p>
                
					<a href="" class="btn btn-lg btn-primary">RETURN HOME</a>
				
				
            </div>
        </form>
    </div>


 
<?php
    return ob_get_clean();
}

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .form {
            background-color: #93e4c12a !important;
            color: #1f6f78;
        }
    </style>
    <title>Hello, world!</title>
</head>

<body class="container">
    <h1 class="mt-2">National President Guest Appearance Request Form</h1>
    
    <form class="">
        <div class="form border rounded p-3 my-5 ">
            <div class="mx-3 alert alert-warning">
                <p>  "This request can be for any of the members of the Board of Directors." </p>

                <p>     "All requests must be submitted six (6) weeks prior to the event date." </p>

                <p>     "Requests for multiple Written Greetings are limited to three (3) per month." </p>
                </div>
            
            <h3 class="mb-2">Request Type</h3>
            
            <div class="ml-3 mb-5 mt-2 d-flex flex-wrap  justify-content-start">        
                <div class="form-group col-md-4">
                    <input class="form-check-input" type="checkbox" name="request-type" value="speaker-request" id="speaker-request">
                    <label class="form-check-label" for="speaker-request">Speaker Request
                </div>
                <div class="form-group col-md-4">
                    <input class="form-check-input" type="checkbox" name="request-type" value="written-greeting" id="written-greeting">
                    <label class="form-check-label" for="written-greeting">Written Greeting Request
                </div>
                <div class="form-group col-md-4">
                    <input class="form-check-input" type="checkbox" name="request-type" value="video-greeting" id="video-greeting">
                    <label class="form-check-label" for="video-greeting">Video Greeting
                </div>
            </div>

            <h3 class="mb-3">CONTACT PERSON</h3>

            {{-- Contact Person --}}
            <div class="d-flex flex-wrap  justify-content-between">
                <div class="form-group col-md-6">
                    <label for="first-name">First Name</label>
                    <input type="text" class="form-control form-control-lg" id="first-name" name="first-name" placeholder="First Name">
                </div>
                <div class="form-group col-md-6">
                    <label for="last-name">Last Name</label>
                    <input type="text" class="form-control form-control-lg" id="last-name" name="last-name" placeholder="Last Name">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <input type="text" class="form-control form-control-lg" id="city" name="city" placeholder="City">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control form-control-lg" id="state" name="state" placeholder="State">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control form-control-lg" id="zip" name="zip" placeholder="Zip">
                </div>
    
                <div class="form-group col-md-12">
                    <label for="address">Address</label>
                    <input type="text" class="form-control form-control-lg" id="address" name="address" placeholder="Address">
                </div>
               
                <div class="form-group col-md-4">
                    <label for="phone">Phone</label>
                    <input type="text" class="form-control form-control-lg" id="phone" name="phone" placeholder="Phone">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="cell-phone">Cell Phone</label>
                    <input type="text" class="form-control form-control-lg" id="cell-phone" name="cell-phone" placeholder="Cell Phone">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="fax">Fax</label>
                    <input type="text" class="form-control form-control-lg" id="fax" name="fax" placeholder="Fax">
                </div>
            </div>

            <h3 class="mb-3 mt-3">CHAPTER</h3>
            {{-- Chapter --}}
            <div class="d-flex flex-wrap  justify-content-between">
                <div class="form-group col-md-12">
                    <label for="chapter">Chapter</label>
                    <input type="text" class="form-control form-control-lg" id="chapter" name="chapter" placeholder="Chapter">
                </div>

                <div class="form-group col-md-4">
                    <label for="city">City</label>
                    <input type="text" class="form-control form-control-lg" id="city" name="city" placeholder="City">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control form-control-lg" id="state" name="state" placeholder="State">
                </div>
    
                <div class="form-group col-md-4">
                    <label for="chapter-region">Chapter Region</label>
                    <input type="text" class="form-control form-control-lg" id="chapter-region" name="chapter-region" placeholder="Chapter Region">
                </div>
            </div>

            <h3 class="mb-3 mt-3">EVENT INFORMATION</h3>

            {{-- Event Information --}}

            <div class="d-flex flex-wrap  justify-content-between">
                <div class="form-group col-md-12">
                    <label for="event-type">Event Type</label>
                    <input type="text" class="form-control form-control-lg" id="event-type" name="event-type" placeholder="Event Type">
                </div>

                <div class="form-group col-md-12">
                    <label for="event-theme">Event Theme</label>
                    <input type="text" class="form-control form-control-lg" id="event-theme" name="event-theme" placeholder="Event Theme">
                </div>
    
                <div class="form-group col-md-12">
                    <label for="event-location">Event Location</label>
                    <input type="text" class="form-control form-control-lg" id="event-location" name="event-location" placeholder="Event Location">
                </div>
    
                <div class="form-group col-md-3">
                    <label for="event-date">Event Date</label>
                    <input type="date" class="form-control form-control-lg" id="event-date" name="event-date" placeholder="Event Date">
                </div>

                <div class="form-group col-md-3">
                    <label for="event-start-time">Event Start Time</label>
                    <input type="text" class="form-control form-control-lg" id="event-start-time" name="event-start-time" placeholder="Event Start Time">
                </div>

                <div class="form-group col-md-3">
                    <label for="event-end-time">Event End Time</label>
                    <input type="text" class="form-control form-control-lg" id="event-end-time" name="event-end-time" placeholder="Event End Time">
                </div>

                <div class="form-group col-md-3">
                    <label for="expectedattendes">Expected # of attendees</label>
                    <input type="text" class="form-control form-control-lg" id="expectedattendes" name="expectedattendes" placeholder="22">
                </div>

                <div class="form-group col-md-12">
                    <label for="description-attendes">Brief description of Attendees</label>
                    <textarea class="form-control" id="description-attendes" name="description-attendes" rows="4"></textarea>
                </div>

                <div class="form-group col-md-6">
                    <label for="colors-attire">Colors & Attire</label>
                    <input type="text" class="form-control form-control-lg" id="colors-attire" name="colors-attire" placeholder="Colors & Attire">
                </div>

                <div class="form-group col-md-6">
                    <label for="non-aka">Will Non-AKA Members be in attendance?</label>
               
                    <div class="mt-2">
                        <input class="" type="radio" name="non-aka" id="non-aka" value="yes"> Yes
                        <input class="ml-3" type="radio" name="non-aka" id="non-aka" value="no"> No
                    </div>
                </div>
            </div>
                <h3 class="mb-3 mt-3">PLEASE LIST ANY SPECIAL GUESTS & DIGNITARIES</h3>

                <div class="form-group col-md-12">
                    <label for="special-guests">Please separate with commas (,)</label>
                    <textarea class="form-control" id="special-guests" name="special-guests" rows="4"></textarea>
                </div>

                <h3 class="mt-3">ROLE OF INTERNATIONAL FIRST VICE PRESIDENT</h3>
                <span class="mb-3">(Select Role & give maximum time allotted; if ‘Other’, define below)</span>

                <div class="ml-3 mt-2 d-flex flex-wrap  justify-content-start">        
                    <div class="form-group col-md-3">
                        <input class="form-check-input" type="checkbox" name="role-of-president" value="keynote-speaker" id="keynote-speaker">
                        <label class="form-check-label" for="keynote-speaker">Keynote Speaker
                    </div>
                    <div class="form-group col-md-3">
                        <input class="form-check-input" type="checkbox" name="role-of-president" value="remarks" id="remarks">
                        <label class="form-check-label" for="remarks">Remarks
                    </div>
                    <div class="form-group col-md-3">
                        <input class="form-check-input" type="checkbox" name="role-of-president" value="greetings" id="greetings">
                        <label class="form-check-label" for="greetings">Greetings
                    </div>
                    <div class="form-group col-md-3">
                        <input class="form-check-input" type="checkbox" name="role-of-president" value="attendee-only" id="attendee-only">
                        <label class="form-check-label" for="attendee-only">Attendee Only
                    </div>
                    <div class="form-group col-md-12">
                        <input class="form-check-input" type="checkbox" name="role-of-president" value="other-attendee" id="other-attendee">
                        <label class="form-check-label" for="other-attendee">Other
                    </div>
                    <div class="form-group col-md-12">
                        <label for="special-guests">If you selected other, please provide details</label>
                        <textarea class="form-control" id="special-guests" name="special-guests" rows="4"></textarea>
                    </div>
                </div>

                {{-- EVENT LOGISTICS --}}

                <h3 class="mb-3 mt-3">EVENT LOGISTICS</h3>
                <span>(Due NO LATER THAN three (3) weeks in advance of the event)</span>
              
                <div class="d-flex flex-wrap  justify-content-between">
                    <div class="mt-3 form-group col-md-12">
                        <label for="log-lodging-facility">Lodging Facility</label>
                        <input type="text" class="form-control form-control-lg" id="log-lodging-facility" name="log-lodging-facility" placeholder="Lodging Facility">
                    </div>
                    
                    <div class="form-group col-md-4">
                        <label for="log-city">City</label>
                        <input type="text" class="form-control form-control-lg" id="log-city" name="log-city" placeholder="City">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="log-state">State</label>
                        <input type="text" class="form-control form-control-lg" id="log-state" name="log-state" placeholder="State">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="log-zip">Zip</label>
                        <input type="text" class="form-control form-control-lg" id="log-zip" name="log-zip" placeholder="Zip">
                    </div>

                    <div class="form-group col-md-12">
                        <label for="log-address">Address</label>
                        <input type="text" class="form-control form-control-lg" id="log-address" name="log-address" placeholder="Address">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="log-phone">Phone</label>
                        <input type="text" class="form-control form-control-lg" id="log-phone" name="log-phone" placeholder="015222222">
                    </div>

                    <div class="form-group col-md-4">
                        <label for="log-wifi">Wi-Fi Access</label>
                        <div class="mt-2"></div>
                        <input class="" type="radio" name="log-wifi" id="log-wifi" value="yes"> Yes
                        <input class="ml-3" type="radio" name="log-wifi" id="log-wifi" value="no"> No
                    </div>

                    <div class="form-group col-md-4">
                        <label for="log-access-code">Access Code</label>
                        <input type="text" class="form-control form-control-lg" id="log-access-code" name="log-access-code" placeholder="xsdf3a2sda">
                    </div>
                </div>

                {{-- information --}}

                <div class="px-4">
                <p>
                   <span class="text-success"> <strong> PLEASE NOTE:</strong> </span> The First Vice President considers speaking engagements, other Sorority and public activities to be within the scope of official
                    duties. <strong> If the request is for an Alpha Kappa Alpha Sorority, Incorporated® event, please use the Alpha Kappa Alpha's Protocol Guide section
                    regarding guest appearances and speaker requests of the International First Vice-President to direct you. </strong>
                </p>
               
               <p> If the request is for a public event not sponsored by Alpha Kappa Alpha Sorority, Incorporated®, please contact the International First Vice-
                President directly for protocol guidance at <span class="text-danger"> dreed@aka1908.com.</span>
            </p>
            <p>
                Transportation details can be discussed directly with the International First Vice-President.
            </p>

            <input type="checkbox"> By submitting this request, we understand and agree to abide by the Alpha Kappa Alpha Protocol Guide.
        </div>
            <div class="mt-4"></div>
                <button class="btn ml-3 btn-lg btn-success">Submit</button>
        </div>
    </form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

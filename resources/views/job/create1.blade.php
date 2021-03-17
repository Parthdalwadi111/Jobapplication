<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.15.1/moment.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker.min.css"> 
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/css/bootstrap-datetimepicker-standalone.css"> 
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                /*height: 100vh;*/
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            hr {
              -moz-border-bottom-colors: none;
              -moz-border-image: none;
              -moz-border-left-colors: none;
              -moz-border-right-colors: none;
              -moz-border-top-colors: none;
              border-color: #EEEEEE -moz-use-text-color #FFFFFF;
              border-style: solid none;
              border-width: 1px 0;
              margin: 18px 0;
              width: 100%;
              color: aliceblue;
            }
        </style>
    </head>
    <body>
      
        <div class="flex-center position-ref">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        <!-- @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif -->
                    @endauth
                </div>
            @endif

            <div class=""> <!-- content -->
                <div class="container">

                  <h2>Application Forms</h2>
                  <form class="form-horizontal" type="POST" action="{{ route('Job') }}">
                    
                    <!-- Basic Details -->
                    <div class="panel panel-default">
                      <div class="panel-heading">Basic Details</div>
                      <div class="panel-body">
                        <div class="form-group col-md-12">
                            <div class="form-group col-md-6">
                                <label class="control-label col-sm-2" for="name">Name:</label>
                                <div class="col-sm-10">
                                    <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                            </div>
                        </div>

                        <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                          <label class="control-label col-sm-2" for="address">Address:</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                          </div>
                        </div>
                        <div class="form-group col-md-6">     
                        <label class="control-label col-sm-2" for="gender">Gender:</label>
                          <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                            <label class="form-check-label" for="male">
                            Male
                            </label>
                          </div>

                          <div class="col-sm-3">
                            <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                            <label class="form-check-label" for="female">
                              Female
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="form-group col-md-12">
                        <div class="form-group col-md-6">
                          <label class="control-label col-sm-2" for="mobile">Mobile:</label>
                          <div class="col-sm-10">
                            <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                          </div>
                        </div>
                      </div>

                      </div>
                    </div>
                    <!-- Basic Details -->

                    <!-- Education details -->
                    <div class="panel panel-default">
                      <div class="panel-heading">Education details</div>
                      <div class="panel-body">
                        <div class="exam_detail">
                            <input type="hidden" id="hidden_ad_level" name="hidden_ad_level" value="1">
                            <div class="ad" id="add_1">
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="qualification">Qualification:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="qualification" placeholder="Enter qualification" name="qualification[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="institute">Institute/University:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="institute" placeholder="Enter Institute/University" name="institute[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="year">Passed Year:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="marks">Marks</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="marks" placeholder="Enter marks" name="marks[]">
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-10">
                                <button type="button" id="btadAdd" class="addbutton btn btn-primary" name="addbutton">+ Add</button>
                                <button type="button" id="btadRm" class="removebutton btn btn-primary" name="removebutton">- Remove</button>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Education details -->

                    <!-- Work Experience -->
                    <div class="panel panel-default">
                      <div class="panel-heading">Work Experience</div>
                      <div class="panel-body">
                        <div class="exam_detail">
                            <input type="hidden" id="hidden_work_level" name="hidden_work_level" value="1">
                            <div class="wo" id="work_1">
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="Company">Company:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="company" placeholder="Enter Company" name="company[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="Designation">Designation:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="From">From:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control datetimepicker" id="datetimepickerform" placeholder="Enter From" name="from[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="To">To</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control datetimepicker" id="datetimepickerto" placeholder="Enter to" name="to[]">
                                        </div>
                                    </div>
                                  </div>
                            </div>
                            <div class="form-group col-md-10">
                                <button type="button" id="workAdd" class="addbutton btn btn-primary" name="addbutton">+ Add</button>
                                <button type="button" id="workRm" class="removebutton btn btn-primary" name="removebutton">- Remove</button>
                            </div>
                        </div>
                      </div>
                    </div>
                    <!-- Work Experience -->

                    <!-- Known Languages -->
                    <div class="panel panel-default">
                      <div class="panel-heading">Known Languages</div>
                      <div class="panel-body">
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="known_languages" value="Hindi" name="language[]">Hindi</label>
                            <label class="checkbox-inline"><input type="checkbox" name="hindi_types[]" class="languages" value="Read" disabled>Read</label>
                            <label class="checkbox-inline"><input type="checkbox" name="hindi_types[]" class="languages" value="Write" disabled>Write</label>
                            <label class="checkbox-inline"><input type="checkbox" name="hindi_types[]" class="languages" value="Speak" disabled>Speak</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="known_languages" value="English" name="language[]">English</label>
                            <label class="checkbox-inline"><input type="checkbox" name="english_types[]" class="languages" value="Read" disabled>Read</label>
                            <label class="checkbox-inline"><input type="checkbox" name="english_types[]" class="languages" value="Write" disabled>Write</label>
                            <label class="checkbox-inline"><input type="checkbox" name="english_types[]" class="languages" value="Speak" disabled>Speak</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="known_languages" value="Gujarati" name="language[]">Gujarati</label>
                            <label class="checkbox-inline"><input type="checkbox" name="gujarati_types[]" class="languages" value="Read" disabled>Read</label>
                            <label class="checkbox-inline"><input type="checkbox" name="gujarati_types[]" class="languages" value="Write" disabled>Write</label>
                            <label class="checkbox-inline"><input type="checkbox" name="gujarati_types[]" class="languages" value="Speak" disabled>Speak</label>
                        </div>
                      </div>
                    </div>
                    <!-- Known Languages -->

                    <!-- Technical Experience -->
                    <div class="panel panel-default">
                      <div class="panel-heading">Technical Experience</div>
                      <div class="panel-body">
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="technical_experience" value="PHP" name="experience[]">PHP</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_php[]" class="experience" value="Beginner" disabled> Beginner</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_php[]" class="experience" value="Mediator" disabled> Mediator</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_php[]" class="experience" value="Expert" disabled> Expert</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="technical_experience" value="Mysql" name="experience[]">Mysql</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_mysql[]" class="experience" value="Beginner" disabled> Beginner</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_mysql[]" class="experience" value="Mediator" disabled> Mediator</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_mysql[]" class="experience" value="Expert" disabled> Expert</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="technical_experience" value="Laravel" name="experience[]">Laravel</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_laravel[]" class="experience" value="Beginner" disabled> Beginner</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_laravel[]" class="experience" value="Mediator" disabled> Mediator</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_laravel[]" class="experience" value="Expert" disabled> Expert</label>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="checkbox-inline"><input type="checkbox" class="technical_experience" value="Oracle" name="experience[]">Oracle</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_oracle[]" class="experience" value="Beginner" disabled> Beginner</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_oracle[]" class="experience" value="Mediator" disabled> Mediator</label>
                            <label class="checkbox-inline"><input type="radio" name="experience_types_oracle[]" class="experience" value="Expert" disabled> Expert</label>
                        </div>
                      </div>
                    </div>
                    <!-- Technical Experience -->

                    <!-- Preference -->
                    <div class="panel panel-default">
                      <div class="panel-heading">Preference</div>
                      <div class="panel-body">

                        <div class="form-group col-md-12">
                          <label class="control-label col-sm-2" for="preferred_location">Preferred Location:</label>
                          <div class="col-md-4">
                            <select class="form-control" name="preferred_location" aria-label="Default select example">
                              <option selected> select </option>
                              <option value="Prahladnagar">Prahladnagar</option>
                              <option value="Thaltej">Thaltej</option>
                              <option value="Iskon">Iskon</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group col-md-12">
                          <label class="control-label col-sm-2" for="current_ctc">Current CTC:</label>
                          <div class="col-md-4">
                            <input type="mobile" class="form-control" id="current_ctc" placeholder="Enter Current CTC" name="current_ctc">
                          </div>
                        </div>

                        <div class="form-group col-md-12">
                          <label class="control-label col-sm-2" for="expected_ctc">Expected CTC:</label>
                          <div class="col-md-4">
                            <input type="mobile" class="form-control" id="expected_ctc" placeholder="Enter Expected CTC" name="expected_ctc">
                          </div>
                        </div>                        

                        <div class="form-group col-md-12">
                          <label class="control-label col-sm-2" for="notice_period">Notice Period:</label>
                          <div class="col-md-4">
                            <input type="mobile" class="form-control" id="notice_period" placeholder="Enter Notice Period" name="notice_period">
                          </div>
                        </div>

                      </div>
                    </div>
                    <!-- Preference -->

                    <div class="form-group col-md-12">
                        <input type="submit" class="btn btn-primary col-md-2" style="float: right;" value="Submit">
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </body>
</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('.datetimepicker').datetimepicker();

        $('.known_languages').change(function() {
            if(this.checked) {
                $(this).parent().next().find('.languages').removeAttr("disabled");
                $(this).parent().next().next().find('.languages').removeAttr("disabled");
                $(this).parent().next().next().next().find('.languages').removeAttr("disabled");
            }else{
                $(this).parent().next().find('.languages').attr("disabled", true);
                $(this).parent().next().next().find('.languages').attr("disabled", true);
                $(this).parent().next().next().next().find('.languages').attr("disabled", true);
            }
        });

        $('.technical_experience').change(function() {
            if(this.checked) {
                $(this).parent().next().find('.experience').removeAttr("disabled");
                $(this).parent().next().next().find('.experience').removeAttr("disabled");
                $(this).parent().next().next().next().find('.experience').removeAttr("disabled");
            }else{
                $(this).parent().next().find('.experience').attr("disabled", true);
                $(this).parent().next().next().find('.experience').attr("disabled", true);
                $(this).parent().next().next().next().find('.experience').attr("disabled", true);
            }
        });

        $("#btadAdd").click(function() {
            iCnt = $("#hidden_ad_level").val();
            iCnt = parseInt(iCnt) + 1;
            $("#hidden_ad_level").val(iCnt);
            var addetails = `<div class="ad" id="add_`+iCnt+`"><hr>
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="qualification">Qualification:</label>
                                        <div class="col-sm-8">
                                            <input type="qualification" class="form-control" id="qualification" placeholder="Enter qualification" name="qualification[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="institute">Institute/University:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="year">Passed Year:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="year" placeholder="Enter year" name="year[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="marks">Marks</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="marks" placeholder="Enter marks" name="marks[]">
                                        </div>
                                    </div>
                                  </div>
                            </div>`;
            $(".ad").last().after(addetails);
        });

        $("#btadRm").click(function() {
            iCnt = $("#hidden_ad_level").val();
            if (iCnt > 1) {
                $("#add_" + iCnt).remove();
                iCnt = parseInt(iCnt) - 1;
                $("#hidden_ad_level").val(iCnt);
            }
        });

        $("#workAdd").click(function() {
            iCnt = $("#hidden_work_level").val();
            iCnt = parseInt(iCnt) + 1;
            $("#hidden_work_level").val(iCnt);
            var addetails = `<div class="ad" id="work_`+iCnt+`"><hr>
                                <div class="form-group col-md-12">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="Company">Company:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="company" placeholder="Enter Company" name="company[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="Designation">Designation:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="From">From:</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control datetimepicker" id="" placeholder="Enter From" name="from[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-3" for="To">To</label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control datetimepicker" id="" placeholder="Enter to" name="to[]">
                                        </div>
                                    </div>
                                  </div>
                            </div>`;
            $(".wo").last().after(addetails);
        });

        $("#workRm").click(function() {
            iCnt = $("#hidden_work_level").val();
            if (iCnt > 1) {
                $("#work_" + iCnt).remove();
                iCnt = parseInt(iCnt) - 1;
                $("#hidden_work_level").val(iCnt);
            }
        });
    });
</script>
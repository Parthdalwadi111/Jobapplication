@extends('layouts.app')

@section('content')
<div class="container">
    <h3 style="text-align: center;">Application Forms</h3>
    <form class="form-horizontal" type="POST" action="{{ route('Job') }}">

    <div class="row">
        <div class="col-md-12">
            <!-- Basic Details -->
            <div class="card">
                <div class="card-header">Basic Details</div>
                <div class="card-body">
                    <div class="form-group row col-md-12">
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-5" for="name">Name:</label>
                            <div class="col-sm-10">
                                <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-5" for="email">Email:</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 row">
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-5" for="address">Address:</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-5" for="gender">Gender:</label>
                            <div class="col-md-3" style="margin: 0 0 0 30px;">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                                <label class="form-check-label" for="male">
                                Male
                                </label>
                            </div>
                            <div class="col-md-3" style="margin: 0 0 0 30px;">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                                <label class="form-check-label" for="female">
                                  Female
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group col-md-12 row">
                        <div class="form-group col-md-6">
                            <label class="control-label col-sm-5" for="mobile">Mobile:</label>
                            <div class="col-sm-10">
                                <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
                            </div>
                        </div>
                    </div>

                </div>
            </div></br>
            <!-- Basic Details -->

            <!-- Education details -->
            <div class="card">
                <div class="card-header">Education details</div>
                <div class="card-body">
                    <div class="exam_detail">
                        <input type="hidden" id="hidden_ad_level" name="hidden_ad_level" value="1">
                        <div class="ad" id="add_1">
                            <div class="form-group col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="qualification">Qualification:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="qualification" placeholder="Enter qualification" name="qualification[]">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="institute">Institute/University:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="institute" placeholder="Enter Institute/University" name="institute[]">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="year">Passed Year:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="year" placeholder="Enter Year" name="year[]">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="marks">Marks</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="marks" placeholder="Enter marks" name="marks[]">
                                    </div>
                                </div>
                              </div>
                        </div>
                        <div class="form-group col-md-12" style="text-align: right;">
                            <button type="button" id="btadAdd" class="addbutton btn btn-primary" name="addbutton">+ Add</button>
                            <button type="button" id="btadRm" class="removebutton btn btn-primary" name="removebutton">- Remove</button>
                        </div>
                    </div>
                </div>
            </div></br>
            <!-- Education details -->

            <!-- Work Experience -->
            <div class="card">
                <div class="card-header">Work Experience</div>
                <div class="card-body">
                    <div class="exam_detail">
                        <input type="hidden" id="hidden_work_level" name="hidden_work_level" value="1">
                        <div class="wo" id="work_1">
                            <div class="form-group col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="Company">Company:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="company" placeholder="Enter Company" name="company[]">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="Designation">Designation:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation[]">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12 row">
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="From">From:</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control datetimepicker" id="datetimepickerform" placeholder="Enter From" name="from[]">
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label class="control-label col-sm-5" for="To">To</label>
                                    <div class="col-md-10">
                                        <input type="text" class="form-control datetimepicker" id="datetimepickerto" placeholder="Enter to" name="to[]">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-12" style="text-align: right;">
                            <button type="button" id="workAdd" class="addbutton btn btn-primary" name="addbutton">+ Add</button>
                            <button type="button" id="workRm" class="removebutton btn btn-primary" name="removebutton">- Remove</button>
                        </div>
                    </div>
                </div>
            </div></br>
            <!-- Work Experience -->

            <!-- Known Languages -->
            <div class="card">
                <div class="card-header">Known Languages</div>
                <div class="card-body">
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="known_languages col-sm-2" value="Hindi" name="language[]">Hindi
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="hindi_types[]" class="languages col-sm-2" value="Read" disabled>
                            Read
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="hindi_types[]" class="languages col-sm-2" value="Write" disabled>
                            Write
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="hindi_types[]" class="languages col-sm-2" value="Speak" disabled>
                            Speak
                        </label>
                    </div>
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="known_languages col-sm-2" value="English" name="language[]">English
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="english_types[]" class="languages col-sm-2" value="Read" disabled>
                            Read
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="english_types[]" class="languages col-sm-2" value="Write" disabled>
                            Write
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="english_types[]" class="languages col-sm-2" value="Speak" disabled>
                            Speak
                        </label>
                    </div>
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="known_languages col-sm-2" value="Gujarati" name="language[]">
                            Gujarati
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="gujarati_types[]" class="languages col-sm-2" value="Read" disabled>
                            Read
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="gujarati_types[]" class="languages col-sm-2" value="Write" disabled>
                            Write
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" name="gujarati_types[]" class="languages col-sm-2" value="Speak" disabled>
                            Speak
                        </label>
                    </div>
                </div>
            </div></br>
            <!-- Known Languages -->

            <!-- Technical Experience -->
            <div class="card">
                <div class="card-header">Technical Experience</div>
                <div class="card-body">
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="technical_experience col-sm-2" value="PHP" name="experience[]">
                            PHP
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_php[]" class="experience col-sm-2" value="Beginner" disabled>
                            Beginner
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_php[]" class="experience col-sm-2" value="Mediator" disabled>
                            Mediator
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_php[]" class="experience col-sm-2" value="Expert" disabled>
                            Expert
                        </label>
                    </div>
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="technical_experience col-sm-2" value="Mysql" name="experience[]">
                            Mysql
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_mysql[]" class="experience col-sm-2" value="Beginner" disabled>
                            Beginner
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_mysql[]" class="experience col-sm-2" value="Mediator" disabled>
                            Mediator
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_mysql[]" class="experience col-sm-2" value="Expert" disabled>
                            Expert
                        </label>
                    </div>
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="technical_experience col-sm-2" value="Laravel" name="experience[]">
                            Laravel
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_laravel[]" class="experience col-sm-2" value="Beginner" disabled>
                            Beginner
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_laravel[]" class="experience col-sm-2" value="Mediator" disabled>
                            Mediator
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_laravel[]" class="experience col-sm-2" value="Expert" disabled>
                            Expert
                        </label>
                    </div>
                    <div class="form-group col-md-12 row">
                        <label class="checkbox-inline col-sm-2">
                            <input type="checkbox" class="technical_experience col-sm-2" value="Oracle" name="experience[]">
                            Oracle
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_oracle[]" class="experience col-sm-2" value="Beginner" disabled>
                            Beginner
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_oracle[]" class="experience col-sm-2" value="Mediator" disabled>
                            Mediator
                        </label>
                        <label class="checkbox-inline col-sm-2">
                            <input type="radio" name="experience_types_oracle[]" class="experience col-sm-2" value="Expert" disabled>
                            Expert
                        </label>
                    </div>
                </div>
            </div></br>
            <!-- Technical Experience -->

            <!-- Preference -->
            <div class="card">
                <div class="card-header">Preference</div>
                <div class="card-body">
                    <div class="form-group col-md-12 row">
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

                    <div class="form-group col-md-12 row">
                        <label class="control-label col-sm-2" for="current_ctc">Current CTC:</label>
                        <div class="col-md-4">
                            <input type="mobile" class="form-control" id="current_ctc" placeholder="Enter Current CTC" name="current_ctc">
                        </div>
                    </div>

                    <div class="form-group col-md-12 row">
                        <label class="control-label col-sm-2" for="expected_ctc">Expected CTC:</label>
                        <div class="col-md-4">
                            <input type="mobile" class="form-control" id="expected_ctc" placeholder="Enter Expected CTC" name="expected_ctc">
                        </div>
                    </div>

                    <div class="form-group col-md-12 row">
                        <label class="control-label col-sm-2" for="notice_period">Notice Period:</label>
                        <div class="col-md-4">
                            <input type="mobile" class="form-control" id="notice_period" placeholder="Enter Notice Period" name="notice_period">
                        </div>
                    </div>
                </div>
            </div></br>
            <!-- Preference -->

            <div class="form-group col-md-12" style="text-align: center;">
                <input type="submit" class="btn btn-primary col-md-2" value="Submit">
            </div>
        </div>
    </div>

    </form>
</div>
@endsection
@section('page_script')
<script type="text/javascript">
    $(document).ready(function() {
        // $('.datetimepicker').datetimepicker();

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
                                <div class="form-group col-md-12 row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="qualification">Qualification:</label>
                                        <div class="col-md-10">
                                            <input type="qualification" class="form-control" id="qualification" placeholder="Enter qualification" name="qualification[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="institute">Institute/University:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="institute" placeholder="Enter institute" name="institute[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="year">Passed Year:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="year" placeholder="Enter year" name="year[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="marks">Marks</label>
                                        <div class="col-md-10">
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
                                <div class="form-group col-md-12 row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="Company">Company:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="company" placeholder="Enter Company" name="company[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="Designation">Designation:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" id="designation" placeholder="Enter Designation" name="designation[]">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 row">
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="From">From:</label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control datetimepicker" id="" placeholder="Enter From" name="from[]">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="control-label col-sm-5" for="To">To</label>
                                        <div class="col-md-10">
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
@endsection
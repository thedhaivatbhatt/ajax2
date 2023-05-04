<?php
session_start();
require_once("inc/connection.php");
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.css" />
</head>

<body>
    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <div id="showmsg">

                </div>
                <div class="card shadow">
                    <div class="card-header ">
                        <h2 style=" font-family:serif"><b>Form</b> </h2>
                    </div>
                    <div class="card-body">

                        <form id="myform" class="myform" method="post" enctype="multipart/form-data">

                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion ">
                                    <label for="first">First name</label>
                                    <input type="text" name="first" class="form-control" id="first" placeholder="Enter First name">
                                    <!-- <div class="mt-1 text-danger" id="first_name_error"></div> -->
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="middle">Middle name</label>
                                    <input type="text" id="middle" name="middle" class="form-control" placeholder="Enter Middle name">
                                    <!-- <div class="mt-1 text-danger" id="middle_name_error"></div> -->
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="last">Last name</label>
                                    <input type="text" id="last" name="last" class="form-control" placeholder="Enter Last name">
                                    <!-- <div class="mt-1 text-danger" id="last_name_error"></div> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email">
                                    <div class="mt-1 text-danger" id="email_name_error"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="mobile">Moblie</label>
                                    <input type="tel" id="mobile" class="form-control" name="mobile" placeholder="Enter your Mobile">
                                    <div class="mt-1 text-danger" id="mobile_name_error"></div>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="date1">Date</label>
                                    <input type="date" id="date1" class="form-control" name="date1" placeholder="Enter your Mobile">
                                    <!-- <div class="mt-1 text-danger" id="date_name_error"></div> -->
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-2  mb-3 valiidtion">
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-12 pt-0">Select Gender</legend>
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

                                            <!-- <div class="form-control">
                                                <input class="form-check-input adtype" type="radio" name="gender" id="male" name="adtype" value="male">
                                                <label class="form-check-label" for="formRadioDefault">male</label>
                                            </div>
                                            <div class="form-control">
                                                <input class="form-check-input adtype" type="radio" name="gender" id="female" name="adtype" value="female" checked="">
                                                <label class="form-check-label" for="formRadioChecked">female</label>
                                            </div> -->

                                            <div class="col-auto">
                                                <div class="form-check">
                                                    <input required class="form-check-input adtype" type="radio" name="gender" id="male" value="male">
                                                    <label class="form-check-label" for="male">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input required class="form-check-input adtype" type="radio" name="gender" id="female" value="female">
                                                    <label class="form-check-label" for="female">
                                                        female
                                                    </label>
                                                </div>
                                            </div>
                                    </fieldset>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="pincode">Pincode</label>
                                    <input type="number" id="pincode" class="form-control" name="pincode" placeholder="Enter your city pincode">
                                    <!-- <div class="mt-1 text-danger" id="pincode_name_error"></div> -->
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label class="form-label" for="city">City</label>
                                    <select class="select form-select" id="city" name="city">
                                        <option value="">Select</option>
                                        <option value="bvn">BVN</option>
                                        <option value="amd">AMD</option>
                                        <option value="mum">MUM</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion ">
                                    <label class="form-label" for="language">language</label>
                                    <div class="list-group ">
                                        <div class="checkbox language">
                                            <label><input type="checkbox" name="language" id="eng" value="eng" class="language">eng</label>
                                        </div>
                                        <div class="checkbox language">
                                            <label><input type="checkbox" name="language" id="guj" value="guj" class="language">guj</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-12 col-md-4  mb-3 valiidtion">
                                    <label for="floatingtextarea">Address</label>
                                    <div class="form-floating">
                                        <textarea id="floatingtextarea" id="floatingtextarea" name="floatingtextarea" class="form-control"></textarea>
                                        <!-- <div class="mt-1 text-danger" id="floatingtextarea_name_error"></div> -->
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-1">

                            </div>
                            <div class="row">
                                <div class="col-12 col-sm-12 col-md-3  mb-3 valiidtion">
                                </div>
                                <div class="col-12 col-sm-12 col-md-9 mb-3 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-outline-primary submit" id="submit">Register with us</button>
                                    <button type="reset" class="btn btn-outline-secondary">clear all</button>
                                </div>
                            </div>
                            <input type="hidden" name="studentid" id="studentid">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered table-hover dt-responsive" style="width:100% ">
                            <thead>
                                <th class="col">#</th>
                                <th class="col">first</th>
                                <th class="col">middle</th>
                                <th class="col">last</th>
                                <th class="col">email</th>
                                <th class="col">mobile</th>
                                <th class="col">date</th>
                                <th class="col">gender</th>
                                <th class="col">Pincode</th>
                                <th class="col">city</th>
                                <th class="col">language</th>
                                <th class="col">address</th>
                                <th class="col">edit</th>
                                <th class="col">delete</th>
                            </thead>
                            <tbody id="table-body">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="js/jquery-3.6.3.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        getTableData();
        deleteData();
        // var current_row = 0;

        //insrt data start
        $("#myform").submit(function(e) {
            e.preventDefault();
        }).validate({
            submitHandler: function(form) {
                // valiidtionForm();
                $("#submit").prop("disabled", true);
                $("#submit").text("Proceeding...");
                var formData = new FormData();

                var first = $('#first').val();
                var middle = $('#middle').val();
                var last = $('#last').val();
                var email = $('#email').val();
                var mobile = $('#mobile').val();
                var date1 = $('#date1').val();
                var adtype = $('.adtype:checked').val();
                var pincode = $('#pincode').val();
                var city = $('#city').val();
                // var language = $('#language:checked').val();
                var floatingtextarea = $('#floatingtextarea').val();
                var language = [];
                $('input[name="language"]:checked').each(function() {
                    language.push($(this).val());
                });
                // console.log(language)
                // var adtype = document.getElementsByName("adtype");
                // for (var i = 0; i < adtype.length; i++) {
                //     if (adtype[i].checked) {
                //         console.log("adtype " + i + ": " + adtype[i].value);
                //     }
                // }
                formData.append("action", "insertdata");
                formData.append("first", first);
                formData.append("middle", middle);
                formData.append("last", last);
                formData.append("email", email);
                formData.append("mobile", mobile);
                formData.append("date1", date1);
                formData.append("adtype", adtype);
                formData.append("pincode", pincode);
                formData.append("city", city);
                formData.append("language", language);
                formData.append("floatingtextarea", floatingtextarea);

                $.ajax({
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    url: "inc/api.php",
                    success: function(dataResult) {
                        $("#submit").prop("disabled", false);
                        $("#submit").text("Register with us");
                        alert("Form submitted successfully.");
                        getTableData();
                        // if (dataResult.status == 200) {
                        //     // window.location.href = 'http://localhost/viva/thankyou/';
                        // }
                    }
                });

            },
        });
        //insrt data end


        //table database call start 
        function getTableData() {
            var formData = new FormData();
            formData.append("action", "select");
            $.ajax({
                type: 'POST',
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                url: "inc/api.php",
                success: function(dataResult) {
                    // console.log(dataResult);
                    var tableData = $.parseJSON(JSON.stringify(dataResult));

                    var i = 0;
                    var newrow = '';

                    // formData.append("action", "insertdatatab");
                    $.each(tableData, function(index, value) {
                        // console.log(value);
                        newrow += `<tr data-id=${value['id']}><td>${i+1}</td><td>${value['first']}</td><td>${value['middle']}</td><td>${value['last']}</td><td>${value['email']}</td><td>${value['mobile']}</td><td>${value['date1']}</td><td>${value['adtype']}</td><td>${value['pincode']}</td><td>${value['city']}</td><td>${value['language']}</td><td>${value['floatingtextarea']}</td><td><i id=${value['id']} class='fas fa-edit edit' style='cursor:pointer'></i></td><td class="btn-delete" data-studentid=${value['id']}><i id=${value['id']}-delete class='fas fa-trash' style='cursor:pointer'></i></td></tr>`;
                        i++;
                        $("#table-body").html(newrow);

                    });

                    // $("#submit").prop("disabled", false);
                    // $("#submit").text("Register with us");
                    // alert("Form submitted successfully.");
                    // if (dataResult.status == 200) {
                    //     // window.location.href = 'http://localhost/viva/thankyou/';
                    // }
                }
            });
        }
        //table database call end    

        //data delete start
        $(document).on("click", ".btn-delete", function() {
            var id = $(this).data("studentid");
            alert(id);
            deleteData(id);
            var row = $(this).parent();
            $(row).addClass("bg-warning text-white").slideUp("slow");
        });

        function deleteData(id) {
            var formData = new FormData();
            formData.append("action", "deletedata");
            formData.append("id", id);
            mythis = this;
            $.ajax({
                type: 'POST',
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                url: "inc/api.php",
                success: function(dataResult) {
                    $("#delete").prop("disabled", false);
                    $("#delete").text("delete");
                    alert("Delete successfully.");
                    $(mythis).closest("tr").fadeOut();
                    // if (dataResult.status == 200) {
                    //     // window.location.href = 'http://localhost/viva/thankyou/';
                    // }
                }
            });
        };
        //data delete end


        //data edit start
        $(document).on("click", ".edit", function() {
            var studentid = $(this).attr("id");
            $("#studentid").val(studentid);
            row = $(this).parent().parent();
            // current_row = $(this).parent().parent().attr("data-id");
            // console.log("current id is ", current_row)
            first = $(row).find("td").eq(1).html();
            middle = $(row).find("td").eq(2).html();
            last = $(row).find("td").eq(3).html();
            email = $(row).find("td").eq(4).html();
            mobile = $(row).find("td").eq(5).html();
            date1 = $(row).find("td").eq(6).html();
            adtype = $(row).find("td").eq(7).html();
            pincode = $(row).find("td").eq(8).html();
            city = $(row).find("td").eq(9).html();
            var language = $(row).find("td").eq(10).html();
            floatingtextarea = $(row).find("td").eq(11).html();
            // let commaSeparatedString = 'apple,banana,orange';
            let myArray = language.split(',');
            // console.log(myArray);

            // $.each(language, function(index, value) {
            //     $('input[type=checkbox][name=language][value="' + value + '"]').prop('checked', true)
            // });
            // console.log(language);

            // $('.language').prop('checked', true);

            // var language = [];
            $('input[type=checkbox][name=language]').prop('checked', false);
            $.each(myArray, function(index, value) {
                $('input[type=checkbox][name=language][value="' + value + '"]').prop('checked', true)
            });
            // if(language=="eng"){

            //     $('input[type="checkbox"][value="eng"]').prop('checked', true);
            // }

            // $('input[type="checkbox"][value="guj"]').prop('checked', true);

            // language = $(row).find("td").eq(10).html();
            $("#first").val(first);
            $("#middle").val(middle);
            $("#last").val(last);
            $("#email").val(email);
            $("#mobile").val(mobile);
            $("#date1").val(date1);
            $("#adtype").val(adtype);
            $("#pincode").val(pincode);
            $("#city").val(city);
            $("#language").val(language);
            $("#floatingtextarea").val(floatingtextarea);
            // alert(language);
            if (adtype == "male") {
                $("#male").prop("checked", true);
            } else {
                $("#female").prop("checked", true);
            }

            // var language = [];
            // $(':checkbox:checked').each(function(i) {
            //     language[i] = $(this).language();
            // });


            // var language = [];
            // $('input[name="language"]:checked').each(function() {
            //     language.push($(this).val());
            //     if (language == "eng") {
            //         $("#eng").prop("checked", true);
            //     } else {
            //         $("#guj").prop("checked", true);
            //     }
            // });
            // var language = $('input[name="language"]:checked').map(function() {
            //     return $(this).val();
            // }).get().join(',');
            // alert('Selected values: ' + language.join(','));

            // if (language == "eng") {
            //     $("#eng").prop("checked", true);
            // } else {
            //     $("#guj").prop("checked", true);
            // }

            // $("#marks").val(marks);
            $("#btnadd").html("save changes").removeClass("bg-primary").addClass("bg-warning");
            $("#submit").attr("type", "button");
            $("#submit").text("Update row");

        });
        //data edit end 


        //data update start      
        $("#submit").click(function() {
            var formData = new FormData();
            formData.append("action", "UpdateData");
            var studentid = $("#studentid").val();
            formData.append("studentid", studentid);

            if ($("#submit").text() == "Update row") {
                // console.log("update clie")
                var first = $("#first").val();
                var middle = $("#middle").val();
                var last = $("#last").val();
                var email = $("#email").val();
                var mobile = $("#mobile").val();
                var date1 = $("#date1").val();
                var adtype = $('.adtype:checked').val();
                var pincode = $("#pincode").val();
                var city = $("#city").val();
                // var language = $("#language").val();
                var floatingtextarea = $("#floatingtextarea").val();
                // var current_row = $("#current_row").val();
                if (adtype == "male") {
                    $("#male").prop("checked", true);
                } else {
                    $("#female").prop("checked", true);
                }
                var language = [];
                // console.log(language);
                $('input[name="language"]:checked').each(function() {
                    language.push($(this).val());
                });
                // console.log(language);
                $.each(language, function(index, value) {
                    $('input[type=checkbox][name=language][value="' + value + '"]').prop('checked', true)
                });
                // var my_row = $(`tr[data-id='${current_row}'`);
                console.log(language);
                formData.append("first", first);
                formData.append("middle", middle);
                formData.append("last", last);
                formData.append("email", email);
                formData.append("mobile", mobile);
                formData.append("date1", date1);
                formData.append("adtype", adtype);
                formData.append("pincode", pincode);
                formData.append("city", city);
                formData.append("language", language);
                formData.append("floatingtextarea", floatingtextarea);
                // formData.append("current_row", current_row);

                $(row).find("td").eq(1).html($("#first").val());
                $(row).find("td").eq(2).html($("#middle").val());
                $(row).find("td").eq(3).html($("#last").val());
                $(row).find("td").eq(4).html($("#email").val());
                $(row).find("td").eq(5).html($("#mobile").val());
                $(row).find("td").eq(6).html($("#date1").val());
                $(row).find("td").eq(7).html($("#adtype").val());
                $(row).find("td").eq(8).html($("#pincode").val());
                $(row).find("td").eq(9).html($("#city").val());
                $(row).find("td").eq(10).html($("#language").val());
                $(row).find("td").eq(11).html($("#floatingtextarea").val());

                $.ajax({
                    type: 'POST',
                    data: formData,
                    dataType: "json",
                    contentType: false,
                    processData: false,
                    url: "inc/api.php",
                    success: function(dataResult) {
                        $("#submit").prop("disabled", false);
                        $("#submit").text("Update row");
                        alert("Form update successfully.");
                        getTableData();
                        // if (dataResult.status == 200) {
                        //     // window.location.href = 'http://localhost/viva/thankyou/';
                        // }
                    }
                });
                getTableData();
            }
        });
        //data update end
    </script>
</body>

</html>
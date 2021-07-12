
                    
                    var count246 = 0;
                    var count211Y1 = 0;
                    var output1 = "";
    
                            // jQuery button click event to add a row
                    $('#addRow211Y1').on('click', function () {
                      count211Y1++;
                      var output1 = "<tr id='row"+count211Y1+"'><td ><input type='text' class='form-control programCode' required/></td>";
                      output1+= "<td><input type='text' class='form-control programName'  required/></td>";
                      output1+= "<td><input type='number' class='form-control numberSeats' required /></td>";
                      output1+= "<td><input type='number' class='form-control numberEligible'  required/></td>";
                      output1+= "<td><input type='number' class='form-control numberAdmit'  required/></td>";
                      output1+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count211Y1+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output1+= "</tr>";
                      tableBody = $("#table211Y1 tbody");
                      tableBody.append(output1);             
                    });

                    $("#table211Y1 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f211Y1").on("submit", function(event){
                    var programName = [];
                    var programCode = [];
                    var numberSeats = [];
                    var numberEligible = [];
                    var numberAdmit = [];
                     event.preventDefault();
                    $('.programName').each(function(){
                        programName.push($(this).val());
                    });
                    $('.programCode').each(function(){
                        programCode.push($(this).val());
                    });
                    $('.numberSeats').each(function(){
                        numberSeats.push($(this).val());
                    });
                    $('.numberEligible').each(function(){
                        numberEligible.push($(this).val());
                    });
                    $('.numberAdmit').each(function(){
                        numberAdmit.push($(this).val());
                    });
                
                    $.ajax({
                        url: "save211_1.php",
                        method:"POST",
                        data: {programCode: programCode, programName: programName,numberSeats: numberSeats , numberEligible: numberEligible, numberAdmit: numberAdmit},
                        success: function(data){
                            $("#msg211_1").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg211_1").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
                    // Year 2
                    var count211Y2 = 0;
                    var output2 = "";
    
                            // jQuery button click event to add a row
                    $('#addRow211Y2').on('click', function () {
                      count211Y2++;
                      var output2 = "<tr id='row"+count211Y2+"'><td ><input type='text' class='form-control programCode' required/></td>";
                      output2+= "<td><input type='text' class='form-control programName' required/></td>";
                      output2+= "<td><input type='number' class='form-control numberSeats'  required/></td>";
                      output2+= "<td><input type='number' class='form-control numberEligible' required /></td>";
                      output2+= "<td><input type='number' class='form-control numberAdmit'  required/></td>";
                      output2+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count211Y2+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output2+= "</tr>";
                      tableBody = $("#table211Y2 tbody");
                      tableBody.append(output2);             
                    });

                    $("#table211Y2 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f211Y2").on("submit", function(event){
                    var programName = [];
                    var programCode = [];
                    var numberSeats = [];
                    var numberEligible = [];
                    var numberAdmit = [];
                     event.preventDefault();
                    $('.programName').each(function(){
                        programName.push($(this).val());
                    });
                    $('.programCode').each(function(){
                        programCode.push($(this).val());
                    });
                    $('.numberSeats').each(function(){
                        numberSeats.push($(this).val());
                    });
                    $('.numberEligible').each(function(){
                        numberEligible.push($(this).val());
                    });
                    $('.numberAdmit').each(function(){
                        numberAdmit.push($(this).val());
                    });
                    $.ajax({
                        url: "save211_2.php",
                        method:"POST",
                        data: {programCode: programCode, programName: programName,numberSeats: numberSeats , numberEligible: numberEligible, numberAdmit: numberAdmit},
                        success: function(data){
                            $("#msg211_2").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg211_2").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
                    // Year 3
                    var count211Y3 = 0;
                    var output3 = "";
    
                            // jQuery button click event to add a row
                    $('#addRow211Y3').on('click', function () {
                      count211Y3++;
                      var output3 = "<tr id='row"+count211Y3+"'><td ><input type='text' class='form-control programCode' required/></td>";
                      output3+= "<td><input type='text' class='form-control programName'  required/></td>";
                      output3+= "<td><input type='number' class='form-control numberSeats' required /></td>";
                      output3+= "<td><input type='number' class='form-control numberEligible'  required/></td>";
                      output3+= "<td><input type='number' class='form-control numberAdmit'  required/></td>";
                      output3+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count211Y3+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output3+= "</tr>";
                      tableBody = $("#table211Y3 tbody");
                      tableBody.append(output3);             
                    });

                    $("#table211Y3 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }        
                    });
                    $("#f211Y3").on("submit", function(event){
                    var programName = [];
                    var programCode = [];
                    var numberSeats = [];
                    var numberEligible = [];
                    var numberAdmit = [];
                     event.preventDefault();
                    $('.programName').each(function(){
                        programName.push($(this).val());
                    });
                    $('.programCode').each(function(){
                        programCode.push($(this).val());
                    });
                    $('.numberSeats').each(function(){
                        numberSeats.push($(this).val());
                    });
                    $('.numberEligible').each(function(){
                        numberEligible.push($(this).val());
                    });
                    $('.numberAdmit').each(function(){
                        numberAdmit.push($(this).val());
                    });
                
                    $.ajax({
                        url: "save211_3.php",
                        method:"POST",
                        data: {programCode: programCode, programName: programName,numberSeats: numberSeats , numberEligible: numberEligible, numberAdmit: numberAdmit},
                        success: function(data){
                            $("#msg211_3").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg211_3").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
                    // Year 4
                    var count211Y4 = 0;
                    var output4 = "";
    
                            // jQuery button click event to add a row
                    $('#addRow211Y4').on('click', function () {
                      count211Y4++;
                      var output4 = "<tr id='row"+count211Y4+"'><td ><input type='text' class='form-control programCode' required/></td>";
                      output4+= "<td><input type='text' class='form-control programName'  required/></td>";
                      output4+= "<td><input type='number' class='form-control numberSeats'  required/></td>";
                      output4+= "<td><input type='number' class='form-control numberEligible'  required/></td>";
                      output4+= "<td><input type='number' class='form-control numberAdmit'  required/></td>";
                      output4+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count211Y4+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output4+= "</tr>";
                      tableBody = $("#table211Y4 tbody");
                      tableBody.append(output4);             
                    });

                    $("#table211Y4 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f211Y4").on("submit", function(event){
                    var programName = [];
                    var programCode = [];
                    var numberSeats = [];
                    var numberEligible = [];
                    var numberAdmit = [];
                     event.preventDefault();
                    $('.programName').each(function(){
                        programName.push($(this).val());
                    });
                    $('.programCode').each(function(){
                        programCode.push($(this).val());
                    });
                    $('.numberSeats').each(function(){
                        numberSeats.push($(this).val());
                    });
                    $('.numberEligible').each(function(){
                        numberEligible.push($(this).val());
                    });
                    $('.numberAdmit').each(function(){
                        numberAdmit.push($(this).val());
                    });
               
                    $.ajax({
                        url: "save211_4.php",
                        method:"POST",
                        data: {programCode: programCode, programName: programName,numberSeats: numberSeats , numberEligible: numberEligible, numberAdmit: numberAdmit},
                        success: function(data){
                            $("#msg211_4").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg211_4").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
                });
                    // Year 5

                    var count211Y5 = 0;
                    var output5 = "";
    
                            // jQuery button click event to add a row
                    $('#addRow211Y5').on('click', function () {
                      count211Y5++;
                      var output5 = "<tr id='row"+count211Y5+"'><td ><input type='text' class='form-control programCode' required/></td>";
                      output5+= "<td><input type='text' class='form-control programName'  required/></td>";
                      output5+= "<td><input type='number' class='form-control numberSeats' required /></td>";
                      output5+= "<td><input type='number' class='form-control numberEligible'  required/></td>";
                      output5+= "<td><input type='number' class='form-control numberAdmit'  required/></td>";
                      output5+= "<td><input type='button' class='btn btn-danger deleteY1' value='Delete'data-toggle='tooltip' data-row='row"+count211Y5+"' data-placement='bottom' title='Once Deleted cannot be retreived' /></td>";
                      output5+= "</tr>";
                      tableBody = $("#table211Y5 tbody");
                      tableBody.append(output5);             
                    });

                    $("#table211Y5 tbody").on('click', '.deleteY1', function(){
                                    if(confirm("Are you sure you want to delete this data?")){
                                        var delete_row = $(this).data("row");
                                        $('#'+delete_row).remove();
                                    }else{
                                        return false;
                                    }
                                
                    });
                    $("#f211Y5").on("submit", function(event){
                    var programName = [];
                    var programCode = [];
                    var numberSeats = [];
                    var numberEligible = [];
                    var numberAdmit = [];
                     event.preventDefault();
                    $('.programName').each(function(){
                        programName.push($(this).val());
                    });
                    $('.programCode').each(function(){
                        programCode.push($(this).val());
                    });
                    $('.numberSeats').each(function(){
                        numberSeats.push($(this).val());
                    });
                    $('.numberEligible').each(function(){
                        numberEligible.push($(this).val());
                    });
                    $('.numberAdmit').each(function(){
                        numberAdmit.push($(this).val());
                    });
                
                    $.ajax({
                        url: "save211_5.php",
                        method:"POST",
                        data: {programCode: programCode, programName: programName,numberSeats: numberSeats , numberEligible: numberEligible, numberAdmit: numberAdmit},
                        success: function(data){
                            $("#msg211_5").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                        },
                        error: function(){
                            $("#msg211_5").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                            
                        }
                    });
            });

    // For 241
    var count241 = 0;
    var output = "";
    $("#addRow241").on("click", function(){
        count241++;
        output = "<tr id='row"+count241+"'>";
        output += "<td><input type='text' class='form-control name' required/></td>";
        output += "<td><input type='text' class='form-control pan' required/></td>";
        output += "<td><input type='text' class='form-control designation' required/></td>";
        output += "<td><input type='number' class='form-control year' required/></td>";
        output += "<td><select class='form-control appointmentNature'><option value='' disabled selected>Select</option><option value='Against Sanctioned Post'>Against Sanctioned Post</option><option value='Temporary'>Temporary</option><option value='Permanent'>Permanent</option></select></td>";
        output += "<td><input type='text' class='form-control nameDept' required/></td>";
        output += "<td><input type='number' class='form-control yearExperience' required/></td>";
        output += "<td><input type='text' class='form-control stillServing' required/></td>";
        output += "<td><button type='button' class='delete241 btn btn-danger' data-row='row"+count241+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table241 tbody");
        tableBody.append(output);
    });

    $("#table241 tbody").on('click', '.delete241', function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg241").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 241");
        }else{
            return false;
        }
    
    });

    $("#f241").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var name = [];
        var pan = [];
        var designation = [];
        var year = [];
        var appointmentNature = [];
        var nameDept = [];
        var yearExperience = [];
        var stillServing= [];
         
        $('.name').each(function(){
            name.push($(this).val());
        });
        $('.pan').each(function(){
            pan.push($(this).val());
        });
        $('.designation').each(function(){
            designation.push($(this).val());
        });
        $('.year').each(function(){
            year.push($(this).val());
        });
        $('.appointmentNature').each(function(){
            appointmentNature.push($(this).val());
        });
        $('.nameDept').each(function(){
            nameDept.push($(this).val());
        });
        $('.yearExperience').each(function(){
            yearExperience.push($(this).val());
        });
        $('.stillServing').each(function(){
            stillServing.push($(this).val());
        });

        $.ajax({
            url: "save241.php",
            method:"POST",
            data: {q1: name, q2: designation, q3: year, q4: appointmentNature, q5: nameDept, q6: yearExperience, q7: stillServing},
            success: function(data){
                $("#msg241").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 241 data");
            },
            error: function(){
                $("#msg241").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 241");
            }
        });
    });


    // 242
    var count242 = 0;
    var output = "";
    $("#addRow242").on("click", function(){
        count242++;
        output = "<tr id='row"+count242+"'>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='text' class='form-control q3' required/></td>";
        output += "<td><input type='text' class='form-control q4' required/></td>";
        output += "<td><button type='button' class='delete242 btn btn-danger' data-row='row"+count242+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table242 tbody");
        tableBody.append(output);
    });

    $("#table242 tbody").on('click', '.delete242', function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg242").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 242");
        }else{
            return false;
        }
    
    });

    $("#f242").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];

         
        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $.ajax({
            url: "save242.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4},
            success: function(data){
                $("#msg242").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 242 data");
            },
            error: function(){
                $("#msg242").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 242");
            }
        });
    });


    // For 243
    var count243 = 0;
    var output = "";
    $("#addRow243").on("click", function(){
        count243++;
        output = "<tr id='row"+count243+"'>";
        output += "<td><input type='text' class='form-control name' required/></td>";
        output += "<td><input type='text' class='form-control pan' required/></td>";
        output += "<td><input type='text' class='form-control designation' required/></td>";
        output += "<td><input type='number' class='form-control year' required/></td>";
        output += "<td><select class='form-control appointmentNature'><option value='' disabled selected>Select</option><option value='Against Sanctioned Post'>Against Sanctioned Post</option><option value='Temporary'>Temporary</option><option value='Permanent'>Permanent</option></select></td>";
        output += "<td><input type='text' class='form-control nameDept' required/></td>";
        output += "<td><input type='number' class='form-control yearExperience' required/></td>";
        output += "<td><input type='text' class='form-control stillServing' required/></td>";
        output += "<td><button type='button' class='delete243 btn btn-danger' data-row='row"+count243+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table243 tbody");
        tableBody.append(output);
    });

    $("#table243 tbody").on('click', '.delete243', function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg243").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 243");
        }else{
            return false;
        }
    
    });

    $("#f243").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var name = [];
        var pan = [];
        var designation = [];
        var year = [];
        var appointmentNature = [];
        var nameDept = [];
        var yearExperience = [];
        var stillServing= [];
         
        $('.name').each(function(){
            name.push($(this).val());
        });
        $('.pan').each(function(){
            pan.push($(this).val());
        });
        $('.designation').each(function(){
            designation.push($(this).val());
        });
        $('.year').each(function(){
            year.push($(this).val());
        });
        $('.appointmentNature').each(function(){
            appointmentNature.push($(this).val());
        });
        $('.nameDept').each(function(){
            nameDept.push($(this).val());
        });
        $('.yearExperience').each(function(){
            yearExperience.push($(this).val());
        });
        $('.stillServing').each(function(){
            stillServing.push($(this).val());
        });

        $.ajax({
            url: "save243.php",
            method:"POST",
            data: {q1: name, q2: designation, q3: year, q4: appointmentNature, q5: nameDept, q6: yearExperience, q7: stillServing},
            success: function(data){
                $("#msg243").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 241 data");
            },
            error: function(){
                $("#msg243").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 241");
            }
        });
    });

    // For 244
    var count244 = 0;
    var output = "";
    $("#addRow244").on("click", function(){
        count244++;
        output = "<tr id='row"+count244+"'>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='text' class='form-control q3' required/></td>";
        output += "<td><input type='text' class='form-control q4' required/></td>";
        output += "<td><input type='text' class='form-control q5' required/></td>";
        output += "<td><input type='text' class='form-control q6' required/></td>";
        output += "<td><input type='text' class='form-control q7' required/></td>";
        output += "<td><input type='text' class='form-control q8' required/></td>";
        output += "<td><button type='button' class='delete244 btn btn-danger' data-row='row"+count244+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table244 tbody");
        tableBody.append(output);
    });

    $("#table244 tbody").on('click', '.delete244', function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg244").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 244");
        }else{
            return false;
        }
    
    });

    $("#f244").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];
        var q5 = [];
        var q6 = [];
        var q7 = [];
        var q8 = [];

         
        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $('.q5').each(function(){
            q5.push($(this).val());
        });
        $('.q6').each(function(){
            q6.push($(this).val());
        });
        $('.q7').each(function(){
            q7.push($(this).val());
        });
        $('.q8').each(function(){
            q8.push($(this).val());
        });

        $.ajax({
            url: "save244.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7: q7, q8:q8},
            success: function(){
                $("#msg244").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 244 data");
            },
            error: function(){
                $("#msg244").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 244");
            }
        });
    });


    $("#select245_1").on("change", function(){
        var yearstr = $("#select245_1").val();
        var year1 = parseInt(yearstr);
        // alert(year1+1);
        $("#select245_2").val(year1-1);
        $("#select245_3").val(year1-2);
        $("#select245_4").val(year1-3);
        $("#select245_5").val(year1-4);
    
      });
      
      $("#f245").on("submit", function(e){
          e.preventDefault();
          e.stopPropagation();
          var q1 = $(".q1").val();
          var q2 = $(".q2").val();
          var q3 = $(".q3").val();
          var q4 = $(".q4").val();
          var q5 = $(".q5").val();
          var q6 = $(".q6").val();
          var q7 = $(".q7").val();
          var q8 = $(".q8").val();
          var q9 = $(".q9").val();
          var q10 = $(".q10").val();
          var q11 = $(".q11").val();
          var q12 = $(".q12").val();
          var q13 = $(".q13").val();
          var q14 = $(".q14").val();
          var q15 = $(".q15").val();
          var q16 = $(".q16").val();
          var q17 = $(".q17").val();
          var q18 = $(".q18").val();
          var q19 = $(".q19").val();
          var q20 = $(".q20").val();
          var q21 = $(".q21").val();
          var q22 = $(".q22").val();
          var q23 = $(".q23").val();
          var q24 = $(".q24").val();
          var q25 = $(".q25").val();
          var q26 = $(".q26").val();
          var q27 = $(".q27").val();
          var q28 = $(".q28").val();
          var q29 = $(".q29").val();
          var q30 = $(".q30").val();

          $.ajax({
              url: "save245.php",
              method: "POST",
              data: {q1:q1, q2:q2,q3:q3,q4:q4,q5:q5,q6:q6,q7:q7,q8:q8,q9:q9,q10:q10,q11:q11,q12:q12,q13:q13,q14:q14,q15:q15,q16:q16,q17:q17,q18:q18,q19:q19,q20:q20,q21:q21,q22:q22,q23:q23,q24:q24,q25:q25,q26:q26,q27:q27,q28:q28,q29:q29,q30:q30},
              success: function(){
                $("#msg245").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 245 data");
            },
            error: function(){
                $("#msg245").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 245");
            }
          });
          

      });

    // 246
    var count246 = 0;
    var output = "";
    $("#addRow246").on("click", function(){
        // alert("Hey There");
        count246++;
        output = "<tr id='row"+count246+"'>";
        output += "<td>"+count246+"</td>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='text' class='form-control q3' required/></td>";
        output += "<td><input type='number' class='form-control q4' required/></td>";
        output += "<td><button type='button' class='delete246 btn btn-danger' data-row='row"+count246+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table246 tbody");
        tableBody.append(output);
    });

    $("#table246 tbody").on("click", ".delete246", function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg246").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 246");
        }else{
            return false;
        }
    
    });

    $("#f246").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];

         
        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $.ajax({
            url: "save246.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4},
            success: function(data){
                $("#msg246").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 246 data");
            },
            error: function(){
                $("#msg246").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 246");
            }
        });
    });

    // 251
    var count251 = 0;
    var output = "";
    $("#addRow251").on("click", function(){
        // alert("Hey There");
        count251++;
        output = "<tr id='row"+count251+"'>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='text' class='form-control q3' required/></td>";
        output += "<td><input type='number' class='form-control q4' required/></td>";
        output += "<td><input type='number' class='form-control q5' required/></td>";
        output += "<td><button type='button' class='delete251 btn btn-danger' data-row='row"+count251+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table251 tbody");
        tableBody.append(output);
    });

    $("#table251 tbody").on("click", ".delete251", function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg251").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 251");
        }else{
            return false;
        }
    
    });

    $("#f251").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];
        var q5 = [];

         
        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $('.q5').each(function(){
            q5.push($(this).val());
        });
        $.ajax({
            url: "save251.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5},
            success: function(data){
                $("#msg251").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 251 data");
            },
            error: function(){
                $("#msg251").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 251");
            }
        });
    });
     // 252
     var count252 = 0;
     var output = "";
     $("#addRow252").on("click", function(){
         // alert("Hey There");
         count252++;
         output = "<tr id='row"+count252+"'>";
         output += "<td><input type='number' class='form-control q1' required/></td>";
         output += "<td><input type='number' class='form-control q2' required/></td>";
         output += "<td><input type='number' class='form-control q3' required/></td>";
         output += "<td><button type='button' class='delete252 btn btn-danger' data-row='row"+count252+"'>Delete</button></td>";
         output += "</tr>";
         tableBody = $("#table252 tbody");
         tableBody.append(output);
     });
 
     $("#table252 tbody").on("click", ".delete252", function(){
         if(confirm("Are you sure you want to delete this data?")){
             var delete_row = $(this).data('row');
             $("#"+delete_row).remove();
             $("#msg252").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
             console.log("Deleted 252");
         }else{
             return false;
         }
     
     });
 
     $("#f252").on("submit", function(e){
 
         e.preventDefault();
         e.stopPropagation();
 
         var q1 = [];
         var q2 = [];
         var q3 = [];
          
         $('.q1').each(function(){
             q1.push($(this).val());
         });
         $('.q2').each(function(){
             q2.push($(this).val());
         });
         $('.q3').each(function(){
             q3.push($(this).val());
         });
         
         $.ajax({
             url: "save252.php",
             method:"POST",
             data: {q1: q1, q2: q2, q3: q3},
             success: function(data){
                 $("#msg252").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                 console.log("Saved 252 data");
             },
             error: function(){
                 $("#msg252").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                 console.log("Error Saving Data 252");
             }
         });
     });

     $("#f253").on("submit", function(e){
         e.preventDefault();
         e.stopPropagation();

         var q1 = $(".q1").val();
         $.ajax({
             url: "save253.php",
             method: "POST",
             data: {q1:q1},
             success: function(){
                $("#msg253").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 253 data");
             },
             error: function(){
                $("#msg253").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 253");
             }
         });
     });

     $("#f254").on("submit", function(e){
        e.preventDefault();
        e.stopPropagation();

        var qR = $(".qR").val();
        var q1 = $(".q1").val();
        var q3 = $(".q1").val();
        var q4 = $(".q1").val();
        var q2 = $(".q1").val();
        var q5 = $(".q1").val();

        $.ajax({
            url: "save254.php",
            method: "POST",
            data: {qR:qR, q1:q1, q2:q2, q3:q3, q4:q4, q5:q5},
            success: function(){
               $("#msg254").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
               console.log("Saved 254 data");
            //    alert(qR);
            },
            error: function(){
               $("#msg254").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
               console.log("Error Saving Data 254");
            }
        });
    });

    $("#f255").on("submit", function(e){
        e.preventDefault();
        e.stopPropagation();

        var q1 = $(".q1").val();
        var q2 = $(".q2").val()
        $.ajax({
            url: "save255.php",
            method: "POST",
            data: {q1:q1, q2:q2},
            success: function(){
               $("#msg255").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
               console.log("Saved 255 data");
            },
            error: function(){
               $("#msg255").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
               console.log("Error Saving Data 255");
            }
        });
    });

    $("#f261").on("submit", function(e){
        e.preventDefault();
        e.stopPropagation();

        var q1 = $(".q1").val();
        var q2 = $(".q2").val()
        $.ajax({
            url: "save261.php",
            method: "POST",
            data: {q1:q1, q2:q2},
            success: function(){
               $("#msg261").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
               console.log("Saved 261 data");
            },
            error: function(){
               $("#msg261").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
               console.log("Error Saving Data 261");
            }
        });
    });

    $("#f262").on("submit", function(e){
        e.preventDefault();
        e.stopPropagation();

        var q1 = $(".q1").val();
        var q2 = $(".q2").val()
        $.ajax({
            url: "save262.php",
            method: "POST",
            data: {q1:q1, q2:q2},
            success: function(){
               $("#msg262").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
               console.log("Saved 262 data");
            },
            error: function(){
               $("#msg262").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
               console.log("Error Saving Data 262");
            }
        });
    });

    // 263
    var count263 = 0;
    var output = "";
    $("#addRow263").on("click", function(){
        // alert("Hey There");
        count263++;
        output = "<tr id='row"+count263+"'>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='number' class='form-control q3' required/></td>";
        output += "<td><input type='number' class='form-control q4' required/></td>";
        output += "<td><button type='button' class='delete263 btn btn-danger' data-row='row"+count263+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table263 tbody");
        tableBody.append(output);
    });

    $("#table263 tbody").on("click", ".delete263", function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg263").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 263");
        }else{
            return false;
        }
    
    });

    $("#f263").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];
        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $.ajax({
            url: "save263.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4},
            success: function(data){
                $("#msg263").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 263 data");
            },
            error: function(){
                $("#msg263").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 263");
            
            }
        });
    });

    // 271
    var count271 = 0;
    var output = "";
    $("#addRow271").on("click", function(){
        // alert("Hey There");
        count271++;
        output = "<tr id='row"+count271+"'>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='text' class='form-control q3' required/></td>";
        output += "<td><input type='text' class='form-control q4' required/></td>";
        output += "<td><input type='text' class='form-control q5' required/></td>";
        output += "<td><input type='text' class='form-control q6' required/></td>";
        output += "<td><input type='text' class='form-control q7' required/></td>";
        output += "<td><input type='number' class='form-control q9' required/></td>";
        output += "<td><button type='button' class='delete271 btn btn-danger' data-row='row"+count271+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table271 tbody");
        tableBody.append(output);
    });

    $("#table271 tbody").on("click", ".delete271", function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg271").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 271");
        }else{
            return false;
        }
    
    });

    $("#f271").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];
        var q5 = [];
        var q6 = [];
        var q7 = [];
        var q8 = [];
        
        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $('.q5').each(function(){
            q5.push($(this).val());
        });
        $('.q6').each(function(){
            q6.push($(this).val());
        });
        $('.q7').each(function(){
            q7.push($(this).val());
        });
        $('.q8').each(function(){
            q8.push($(this).val());
        });
        // $('.q9').each(function(){
        //     q9.push($(this).val());
        // });
        
        // $('.q10').each(function(){
        //     q10.push($(this).val());
        // });
        $.ajax({
            url: "save271.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7: q7, q8: q8},
            success: function(data){
                $("#msg271").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 271 data");
            },
            error: function(){
                $("#msg271").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 271");
            
            }
        });
    });

    // 271
    var count272 = 0;
    var output = "";
    $("#addRow272").on("click", function(){
        // alert("Hey There");
        count271++;
        output = "<tr id='row"+count272+"'>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q1' required/></td>";
        output += "<td><input type='text' class='form-control q2' required/></td>";
        output += "<td><input type='text' class='form-control q3' required/></td>";
        output += "<td><input type='text' class='form-control q4' required/></td>";
        output += "<td><input type='text' class='form-control q5' required/></td>";
        output += "<td><input type='text' class='form-control q6' required/></td>";
        output += "<td><input type='text' class='form-control q7' required/></td>";
        output += "<td><input type='number' class='form-control q9' required/></td>";
        output += "<td><button type='button' class='delete272 btn btn-danger' data-row='row"+count272+"'>Delete</button></td>";
        output += "</tr>";
        tableBody = $("#table272 tbody");
        tableBody.append(output);
    });

    $("#table272 tbody").on("click", ".delete272", function(){
        if(confirm("Are you sure you want to delete this data?")){
            var delete_row = $(this).data('row');
            $("#"+delete_row).remove();
            $("#msg272").html("<h5 style='color: red; text-align; center'>Row Deleted!</h5>");
            console.log("Deleted 272");
        }else{
            return false;
        }
    
    });

    $("#f272").on("submit", function(e){

        e.preventDefault();
        e.stopPropagation();

        var q1 = [];
        var q2 = [];
        var q3 = [];
        var q4 = [];
        var q5 = [];
        var q6 = [];
        var q7 = [];
        var q8 = [];
        var q10 = [];
        var q8 = [];

        $('.q1').each(function(){
            q1.push($(this).val());
        });
        $('.q2').each(function(){
            q2.push($(this).val());
        });
        $('.q3').each(function(){
            q3.push($(this).val());
        });
        $('.q4').each(function(){
            q4.push($(this).val());
        });
        $('.q5').each(function(){
            q5.push($(this).val());
        });
        $('.q6').each(function(){
            q6.push($(this).val());
        });
        $('.q7').each(function(){
            q7.push($(this).val());
        });
        $('.q8').each(function(){
            q8.push($(this).val());
        });
        $('.q9').each(function(){
            q9.push($(this).val());
        });
        
        $('.q10').each(function(){
            q10.push($(this).val());
        });
        $.ajax({
            url: "save272.php",
            method:"POST",
            data: {q1: q1, q2: q2, q3: q3, q4: q4, q5: q5, q6: q6, q7: q7, q8: q8, q9:q9, q10:q10},
            success: function(data){
                $("#msg272").html("<h5 style='color: green; text-align; center'>Data Saved!</h5>");
                console.log("Saved 272 data");
            },
            error: function(){
                $("#msg272").html("<h5 style='color: red; text-align; center'>Ajax Call Error!</h5>");
                console.log("Error Saving Data 272");
            
            }
        });
    });
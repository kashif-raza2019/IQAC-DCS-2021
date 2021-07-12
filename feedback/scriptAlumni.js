    // Created By Kashif Raza
    $(document).ready(function(){
        $("#myModal").modal('show');
    });

    var fillCount = 0;
    var docWidth = $(window).width();
    var singleFill = docWidth/55;

    var countQ1 = 0;
    var countQ2 = 0;
    var countQ3 = 0;
    var countQ4 = 0;
    var countQ5= 0;
    var countQ6 = 0;
    var countQ7 = 0;
    var countQ8 = 0;
    var countQ9 = 0;
    var countQ10 = 0;
    var countQ11 = 0;
    var countQ12= 0;
    var countQ13= 0;
    var countQ35 = 0;
    var countQ39= 0;
    var countQ38= 0;
    var countQ36= 0;
    var countQ37= 0;

    $(".q1").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ1 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ1++;
            }
        });
    });
    $(".q2").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ2 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ2++;
            }
        });
    });
    $(".q3").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ3 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ3++;
            }
        });
    });$(".q4").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ4 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ4++;
            }
        });
    });$(".q5").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ5 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ5++;
            }
        });
    });$(".q6").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ6 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ6++;
            }
        });
    });$(".q7").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ7 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ7++;
            }
        });
    });$(".q8").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ8 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ8++;
            }
        });
    });$(".q9").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ9 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ9++;
            }
        });
    });$(".q10").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ10 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ10++;
            }
        });
    });$(".q11").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ11 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ11++;
            }
        });
    });$(".q12").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ12 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ12++;
            }
        });
    });$(".q13").on("click", function(){
        $(this).attr("checked", function(){
            // alert("checked");
            if(countQ13 == 0){
                fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
                countQ13++;
            }
        });
    });
    $("#suggestion1").keyup(function(){
        if(countQ35 == 0){
            fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
             countQ35++;
        }
    });
    $("#suggestion2").keyup(function(){
        if(countQ36 == 0){
            fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
             countQ36++;
        }
    });
    $("#suggestion3").keyup(function(){
        if(countQ37 == 0){
            fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
             countQ37++;
        }
    });
    $("#suggestion4").keyup(function(){
        if(countQ38 == 0){
            fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
             countQ38++;
        }
    });
    $("#suggestion5").keyup(function(){
        if(countQ39 == 0){
            fillCount += singleFill;
            $(".progressFill").css({'width': fillCount});
             countQ39++;
        }
    });


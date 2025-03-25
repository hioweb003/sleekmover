/*$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});*/
//"_token": "{{ csrf_token() }}"
function details(id){
    $(".shwdetails"+id).slideToggle();
}

function apply(id){
    $(".shwform").fadeIn();
    $("#jobt").val($(".jbtit"+id).text());
    $(".jobtitle").text($(".jbtit" + id).text()+" Job");
}

$(document).ready(function(){
    //for all tracking 
    $("#submittrackform").submit(function(e){
      e.preventDefault();
      let trackno = $("#trackno").val();
      if(trackno == ""){
          $("#trcsnp").text("field cannot be empty").addClass("text-danger");
      }else{
            $.ajax({
            url:"/alltrackingservices/trackingnumber",
            method:"POST",
            data: $(this).serialize(),
            beforeSend:function(){
                $("#trcsnp").text("Loading... Please Wait").addClass('text-primary');
            },
            success:function(response){
               // alert(response);
                $("#trcsnp").text("");
                $(".tableno").show();
               $("#bdytrackno").html(response);
               $("#trackno").val(" ");
            },
            error:function(){
                alert("Error");
                 $("#trcsnp").text("");
            }
        });
      }
      
      
    });

     $("#trackemail").submit(function(e){
          e.preventDefault();
      let trackemil = $("#trackemailid").val();
      if(trackemil == ""){
          $("#emtar").text("field cannot be empty").addClass("text-danger");
      }else{
            $.ajax({
            url:"/alltrackingservices/emailtrack",
            method:"POST",
            data: $(this).serialize(),
            beforeSend:function(){
               $("#emtar").text("Loading... Please Wait").addClass('text-primary');
            },
            success:function(response){
               //alert(response);
             
             $("#emtar").text("");
                $(".tableemail").show().fadeIn();
               $("#emailtrack").html(response);
               $("#trackemailid").val(" ");
             
            },
            error:function(){
                alert("Error");
                 $("#emtar").text("");
            }
        });
      }
      
    });

    // quantity counter 
   // $('#qty_input').prop('disabled', true);
    $('#plus-btn').click(function () {
        $('#qty_input').val(parseInt($('#qty_input').val()) + 1);
    });
    $('#minus-btn').click(function () {
        $('#qty_input').val(parseInt($('#qty_input').val()) - 1);
        if ($('#qty_input').val() == 0) {
            $('#qty_input').val(1);
        }

    });


//submitting quote form 
    $(".shping").submit(function(){
        $("#sbm").text("submitting");
        $("#sbm").attr('disabled',true);
    });

    //changing sizes 
    $("#sizes").change(function(){
        let size = $("#sizes").val();
        if (size == "envelop") {
            $("#length").val('12');
            $("#width").val('9');
            $("#height").val('1');
        } else if (size == "oneortwobook") {
            $("#length").val('9');
            $("#width").val('5');
            $("#height").val('1');
        } else if (size == "boardgame") {
            $("#length").val('15');
            $("#width").val('11');
            $("#height").val('3');
        } else if (size == "smallkitchen") {
            $("#length").val('18');
            $("#width").val('15');
            $("#height").val('13');
        } else if (size == "movingbox") {
            $("#length").val('30');
            $("#width").val('18');
            $("#height").val('18');
        } else if (size == "pallet") {
            $("#length").val('48');
            $("#width").val('40');
            $("#height").val('');
        } else {
            $("#length").val('');
            $("#width").val('');
            $("#height").val('');
        }
    });

    //get all city form and to 
    $("#frmcountry").change(function(){
        let frmcountry = $("#frmcountry").val();
        $.ajax({
            url:"/country/from",
            method:"post",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {frmcountry:frmcountry},
            beforeSend:function(){
                $("#shwfrmld").show();
            },
            success:function(data){
                $("#shwfrmld").hide();
                $("#frmcity").html(data);
                
            },
            error:function(){
                alert('Error');
                $("#shwfrmld").hide();
            }
        });
    });

    $("#tocountry").change(function () {
        let tocountry = $("#tocountry").val();
        $.ajax({
            url:"/country/to",
            method:"post",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data:{tocountry: tocountry},
            beforeSend:function(){
                $("#shwtold").show();
            },
            success:function(data){
                $("#shwtold").hide();
                $("#tocity").html(data);
            },
            error:function(){
                alert('Error');
                $("#shwtold").hide();
            }
        });
    });


   //next and prev customer new shipment
    $("#next").click(function () {
        $(".stagetwo").show();
        $(".stageone").hide();
    });
    $("#back").click(function(){
        $(".stagetwo").hide();
        $(".stageone").show();
    });
  });
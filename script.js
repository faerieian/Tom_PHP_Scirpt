$(document).ready(function() {
    // handle the calculation of days between two dates
    $("#calculate-days").click(function() {
      var date1 = $("#date1").val();
      var date2 = $("#date2").val();
      $.ajax({
        type: "POST",
        url: "calculate_days.php",
        data: { date1: date1, date2: date2 },
        success: function(data) {
          $("#days-result").html(data);
        }
      });
    });
  
    // handle the conversion of a string to a QR code
    $("#create-qr-code").click(function() {
      var input_string = $("#input-string").val();
      $.ajax({
        type: "POST",
        url: "create_qr_code.php",
        data: { input_string: input_string },
        success: function(data) {
          $("#qr-code-result").html(data);
        }
      });
    });
  });
  
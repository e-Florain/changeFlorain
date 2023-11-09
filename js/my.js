$(document).ready(function(){
    $('select').formSelect();
  });

  $(document).ready(function(){
    $('.datepicker').datepicker(
      {'format': 'yyyy-mm-dd'}
    );
  });

function checkValuesSub() {
  var amount = $("#amount").val();
  if (amount < 20) {
    $("#amounthelper").attr('data-error', 'Montant trop faible');
    $("#amount").addClass("invalid");
    return false;
  }
  if (amount > 999) {
    $("#amounthelper").attr('data-error', 'Montant trop gros');
    $("#amount").addClass("invalid");
    return false;
  }
}

function checkIBAN() {
  var iban = $("#iban").val();
  if (!isIBAN(iban)) {
    return false
  } else {
    return true
  }
}

function isIBAN(iban) {
  var regex = /^FR\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*\d\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[A-Z0-9]\s*[\d]\s*[\d]\s*$/;
  return regex.test(iban);
}

$( "#iban" ).change(function() {
  console.log("check iban");
  $("#iban").addClass("invalid");
  var iban = $("#iban").val();
  if (!isIBAN(iban)) {
    console.log("not iban");
    $("#iban").removeClass("valid");
    $("#iban").addClass("invalid");
  } else {
    $("#iban").removeClass("invalid");
    $("#iban").addClass("valid");
  }
});
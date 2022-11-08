$(document).ready(function(){
    $('select').formSelect();
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
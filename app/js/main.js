$(function () {

  $("#calcFormDate").datepicker();

  /* BURGER */
  $('.js-burger').on('click', function(){
    $('.nav-list').toggle();
  })
  /* RANGE INPUTS */
  const sumRange = document.getElementById("calcFormSumRange");
  const outputSumRange = document.getElementById("calcFormSum");
  outputSumRange.innerHTML = sumRange.value;
  sumRange.oninput = function () {
    outputSumRange.value = this.value;
  }
  outputSumRange.oninput = function () {
    sumRange.value = this.value;
  }

  const depSumRange = document.getElementById("calcFormDepSumRange");
  const outputDepSumRange = document.getElementById("calcFormDepSum");
  outputDepSumRange.innerHTML = depSumRange.value;
  depSumRange.oninput = function () {
    outputDepSumRange.value = this.value;
  }
  outputDepSumRange.oninput = function () {
    depSumRange.value = this.value;
  }
  /* RADIO BUTTONS */
  $('.calc__form-radio').click(function(){
    if(this.value == 'false'){
      $("#calcFormDepSum").attr("disabled", true);
    } else {
      $("#calcFormDepSum").attr("disabled", false);
    }
  });

  /* FORM */
  let result = $('#calcFormValue');
  $('#calcForm').submit(function(e) {
    e.preventDefault();
    $.ajax({
        type: "POST",
        url: 'calc.php',
        data: $(this).serialize(),
        success: function(response)
        {
          const jsonData = JSON.parse(response);
           result.text(jsonData)
       }
   });
 });
});
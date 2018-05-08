
function showstatus_success(){
  document.getElementById('subscribtion_loading').style = "display: none";
  document.getElementById('subscribtion_failed').style = "display: none";
  document.getElementById('subscribtion_succesfull').style = "display: block";
}
function showstatus_fail(){
  document.getElementById('subscribtion_loading').style = "display: none";
  document.getElementById('subscribtion_failed').style = "display: block";
  document.getElementById('subscribtion_succesfull').style = "display: none";
}

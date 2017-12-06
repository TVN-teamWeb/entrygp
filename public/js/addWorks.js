var idAgency = -1;
//Click tasto  esegue...
$("#agencyAdd").click(function() {
openAgency();
//Definir un array
var list = new Array();
var ris = $('input[name=agencyList]').val();

if (ris != "") {
 list = JSON.parse($('input[name=agencyList]').val());
}

  //Definisco una variabile che conterrò un oggett di tipo json
  var dataform = new Object ();

  //trova tutte le voci dentro il form "agency-form" ed esegue la funzione
  $("#agency-form").find("input,select").each(function(){
    eval(('dataform.'+ $(this).attr('id') + '= "' + $(this).val()) + '"');
  });



  var link = "<a href='#' class='agencyItem' id='"+list.length+"'>"+ dataform.companyname  +"</a>";


  if (idAgency > -1){
    list[idAgency]= dataform;
    $('#agencyAdd').html('update');
} else{

$('#agencyAdd').html('add');
list[list.length]= dataform;
}


  $('input[name=agencyList]').val(JSON.stringify(list));
  if (idAgency == -1){
    $("#agencyItems").append(link);
  }else{
    $('#'+idAgency).html(dataform.companyname);
  }
  idAgency = -1;
});

$("#openAgency").click(function() {
  idAgency = -1;
});


$('body').on('click', 'a.agencyItem', function() {
  idAgency = $(this).attr('id');
console.log(idAgency);

  openAgency();
  $('#agency').modal();
  $('#companyname').val($(this).html());


});


function openAgency() {

//Definir un array
var list = new Array();
var ris = $('input[name=agencyList]').val();

if (ris != "") {
 list = JSON.parse($('input[name=agencyList]').val());
}

  if (idAgency > -1){
    $('#agencyAdd').html('update');
} else{

$('#agencyAdd').html('add');
}

}

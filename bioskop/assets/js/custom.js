sDays = new Array('Cetvrtak 02.02.2017','Petak 03.02.2017','Subota 04.02.2017','Nedelja 05.02.2017');
aDays = new Array('Petak 03.02.2017','Subota 04.02.2017','Nedelja 05.02.2017');
lDays = new Array('Ponedeljak 06.01.2017','Utorak 07.02.2017');

populateSelect();

$(function() {
    $('#film').change(function(){
        populateSelect();
    });
});

function populateSelect(){
    film=$('#film').val();
    $('#item').html('');
    
  if (film == 'Veliki kineski zid'){
    sDays.forEach(function(t) {
      $('#item').append('<option>'+t+'</option>');
    });
  } else if (film == 'Assassins Creed') {
    aDays.forEach(function(t) {
      $('#item').append('<option>'+t+'</option>');
    });
  } else {
    lDays.forEach(function(t) {
      $('#item').append('<option>'+t+'</option>');
    });
  }

  if (film == '-- Izaberite film --') {
    $('.specCase').hide();
  } else {
    $('.specCase').fadeIn(600);
  }
}

    //// Rezervacije DEMO
    //$("#conf").click(function(){
    //        $("#first").hide();
    //        $("#second").show();
    //});


// Galerija
$(function() {
        
   /* activate the carousel */
   $("#modal-carousel").carousel({interval:false});

   /* when clicking a thumbnail */
   $(".row .thumbnail").click(function(){
    var content = $(".carousel-inner");
    var title = $(".modal-title");
  
    content.empty();  
    title.empty();
  
  	var id = this.id;  
     var repo = $("#img-repo .item");
     var repoCopy = repo.filter("#" + id).clone();
     var active = repoCopy.first();
  
    active.addClass("active");
    title.html(active.find("img").attr("title"));
  	content.append(repoCopy);

    // show the modal
  	$("#modal-gallery").modal("show");
  });
});

// LIMIT REZERVACIJE + PROCES POTVRDE
$(function() {
  limit = 4;

  $('li.seat input').on('change', function() {
    if($('li.seat input:checked').length > limit) {
      this.checked = false;
      alert("Selektovali ste maximalni broj mesta");
    }
  });
//
//  $('#ticketRes').click(function() {
//    $('li.seat input:checked').attr('disabled', true);
//    $('#ticketDismiss').click(function() {
//      $('li.seat input:checked').attr('disabled', false);
//    });
//  });
});

function AjaxCall(url,data,dataType) {
	this.type='GET';
	this.url="http://localhost/bioskop/" + url;
	this.data=data;
	this.dataType=dataType;
}

AjaxCall.prototype.sendRequest = function(onSuccess) {
	$.ajax({
		type: this.type,
		url: this.url,
		data: this.data,
		success : onSuccess,
		error: function(e) {
                    alert('Error: ' + e.name);
		}
	});
};
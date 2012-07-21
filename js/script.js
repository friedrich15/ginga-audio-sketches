function editContent(id) {
	var div = $('#' + id);	
	div.addClass("edit");
	div.removeClass("noEdit");
}

function editContentDone(id) {
	var div = $('#' + id);	
	div.addClass("noEdit");
	div.removeClass("edit");
	saveChange(id);
}

function saveChange(id) {
	alert('Wird noch nicht gespeichert!');

	var data = {
		text: $('#' + id).text(),
		id: id
	};
  $.ajax({ 
    url: "dynsave.php", 
    type: "POST", 
    data: data
    dataType: "json", 
    cache: false, 
    success: function(data) { 
      alert('Saved.'); 
  	}
	});
}


function editContentStart(element) {
	var div = $(element);
	div.addClass("editing");
}

function editContentDone(element) {
	var div = $(element);
	div.removeClass("editing");
}

function editContentChanged(element) {
  saveChange($(element).attr('id'));
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


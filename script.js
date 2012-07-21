function editContent(id){	
	var div = document.getElementById(id);	
	div.className = "edit";
}

function editContentDone(id){	
	var div = document.getElementById(id);	
	div.className = "noEdit";
	saveChange(id);
}

function saveChange(id){
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



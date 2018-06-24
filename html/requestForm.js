// JavaScript Document
/*
function showFormSegment(){
	
	
	
}*/

function showFormSegment(){
	var checkBoxes = document.getElementsByClassName("segChecks");
	console.log(checkBoxes)
	var boxid;
	var segs = document.getElementsByTagName("table");
	for (boxid in checkBoxes){
		boxid = parseInt(boxid)
		if (!isNaN(boxid)){
			
		var box = checkBoxes.item(boxid);
		console.log("boxid: "+ boxid+ "box: "+ box)
		console.log(box.getAttribute("value"));
			console.log("segs: "+ segs)
			
		var segid;
		for (segid in segs){
			var seg = segs.item(segid);
			console.log(seg);
			var formname = box.getAttribute("value");
		if (seg.getAttribute('name') === formname){ //check if the value of the checkbox is a valid name of a table
			console.log("joepieee")
			if (box.checked === true){
			seg.style.display = "table";
		  } else {
			seg.style.display = "none";
		  }
			
			}
			
		}
			
			/*x*/
			
			
			}
		
		
		/**/
		
	
		
		}
	console.log("hallee");
	
}
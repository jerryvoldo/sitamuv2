const canvas = document.querySelector("canvas");
const signaturePad = new SignaturePad(canvas, {
	backgroundColor: 'rgba(255, 255, 255, 0)',
  	penColor: 'rgb(0, 0, 0)'
});



$("#simpanBtn").on("click", function(){
		var allInputs = $( ":input" );
		console.log(allInputs.serialize());
		alert(allInputs.serialize())
});


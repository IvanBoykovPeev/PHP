/**
 * @author ivan
 */
var counter = 0;
var wordListEnglish = ["hello", "name", "car"];
var wordListBulgarian = ["здравей", "име", "кола"];
function printWord(counter) {
	if (counter >= wordListEnglish.length) {
		start();
	} else {
		document.getElementById("word").value = wordListEnglish[counter];
	}
}

function start() {
	counter = 0;
	printWord(counter);
}


function next() {

	counter++;
	printWord(counter);

}

function check () {
  var a = document.getElementById("wordText").value;
  var b = wordListBulgarian[counter];
  console.log(a);
  console.log(b);
  if (a == b) {
  document.getElementById("otgovor").innerText = "Verno";
  }
  else {
  	document.getElementById("otgovor").innerText = "Greshno";
  }
}

var item = [];
$(function() {
	$("#list1").click(function() {
		$.getJSON("WordList1.php", function(data) {

			jQuery.each(data, function(index, value) {
				wordListEnglish[index] = value.en;
				wordListBulgarian[index] = value.bg;
			});
			console.log(wordListEnglish);
			console.log(wordListBulgarian);
		});
	});
});

$(function() {
	$("#clear_btn").click(function() {
		$("#wordText").val("");
	});
});






console.log(wordListEnglish);

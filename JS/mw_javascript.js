function myFunction() {
  var dots = document.getElementById("dots");
  var showText = document.getElementById("show");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    showText.style.display = "none";
  } 
  else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    showText.style.display = "inline";
  }
}

function myFunction_two() {
  var dots_two = document.getElementById("dots_two");
  var show_twoText = document.getElementById("show_two");
  var btn_twoText = document.getElementById("myBtn_two");

  if (dots_two.style.display === "none") {
    dots_two.style.display = "inline";
    btn_twoText.innerHTML = "Read more";
    show_twoText.style.display = "none";
  } 
  else {
    dots_two.style.display = "none";
    btn_twoText.innerHTML = "Read less";
    show_twoText.style.display = "inline";
  }
}

function myFunction_three() {
  var dots_three = document.getElementById("dots_three");
  var show_threeText = document.getElementById("show_three");
  var btn_threeText = document.getElementById("myBtn_three");

  if (dots_three.style.display === "none") {
    dots_three.style.display = "inline";
    btn_threeText.innerHTML = "Read more";
    show_threeText.style.display = "none";
  } 
  else {
    dots_three.style.display = "none";
    btn_threeText.innerHTML = "Read less";
    show_threeText.style.display = "inline";
  }
}
 
 var click = 0; 
 function removeDuplicates()
    {
        var object1 = ["Matt Johnson", "Bart Paden", "Ryan Doss", "Michael Spangler"];
        var object2 = ["Matt Johnson", "Bart Paden", "Jordan Heigle", "Tyler Viles"];
        var combinedArray = object1.concat(object2);
		var uniqueArray = [];
		var count = 0;
		var found = false;
		var header = document.getElementById("header")
		var result = document.getElementById("result")
		
		if (click == 0)
		{	
	    header.innerHTML = "List of distinct names";
		for(i=0;i<combinedArray.length;i++)
			{
				for(j=0;j<uniqueArray.length;j++)
				{
					if(combinedArray[i] == uniqueArray[j])
					{
						found = true;
					}
				}
				count++;
				if(count == 1 && found == false)
				{
					uniqueArray.push(combinedArray[i]);
					result.innerHTML += ('<ul>' + '<li>' + combinedArray[i] + '</li>' + '</ul>');
					
				}
				count = 0;
				found = false;
			}
			click++;
		}
		else if (click>= 1)
        {
            alert("The process has already been completed.")
        }
	}
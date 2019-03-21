 //javacript comment for one line will not be used by the browser
  function myFirstFunction() {
    var message = "hello I use Javascript";
    alert(message);
  }
  console.log("A message fron JavaScript");
  /*
  block comment to go over more than one line
  will not be used by browser
  */

  function sizeWarning(e) {
    if (e.target.outerWidth < 550) {
       alert("Why so teeeny!!!!!");
    }
  }

  window.addEventListener("resize", sizeWarning);
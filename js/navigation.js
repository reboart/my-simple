function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "mobile") {
    x.className += " active";
  } else {
    x.className = "mobile";
  }
  var x = document.getElementById("backnav");
  if (x.className === "backnav") {
    x.className += " active";
  }else {
    x.className = "backnav";
  }

  
  

}


const loadpage = document.getElementById("loadpage");
const landing = document.getElementById("LandingPage");


var i = 0;
function move() {
  if (i == 0) {
    i = 1;
    var prcnt = document.getElementById("percent");
    var width = 0;
    var id = setInterval(frame, 20);

    function frame() {
      if (width >= 100) {
      	loadpage.style.display = "none";
      	landing.style.display = "flex";
        clearInterval(id);
      } else {
        width++;
        prcnt.innerHTML = width  + "%";
      }
    }
  }
}

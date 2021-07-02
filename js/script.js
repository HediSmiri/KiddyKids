function zoom(imgid,height,width){
    var img = document.getElementById(imgid);
    img.style.height=height;
    img.style.width=width;
}

function zoomout(imgid){
    var img = document.getElementById(imgid);
    img.style.height='300px';
    img.style.width='424.891';
}

  

  // sleep time expects milliseconds
function sleep (time) {
    return new Promise((resolve) => setTimeout(resolve, time));
  }

function playAudio(audioo) {
  var back = document.getElementById("background");
  var x = document.getElementById(audioo); 
  back.pause();
  x.play();    
} 

function playAudiob(audioo) { 
    var x = document.getElementById(audioo); 
    x.play(); 
  } 
  

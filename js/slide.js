var i = 0; // Start point
var images = [];
var time = 1500;

// Image List
images[0] = 'img/ima1.png';
images[1] = 'img/ima2.png';
images[2] = 'img/ima3.png';
images[3] = 'img/ima4.png';

// Change Image
function changeImg(){
  document.slide.src = images[i];

  if(i < images.length - 1){
    i++;
  } else {
    i = 0;
  }

  setTimeout("changeImg()", time);
}

window.onload = changeImg;



function ChangeSlide(sens) {
    i = i + sens;
    if (i < 0)
        i = images.length - 1;
    if (i > images.length - 1)
        i = 0;
    document.getElementById("slide").src = images[i];
}

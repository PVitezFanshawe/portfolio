$(document).foundation()


var expand = document.getElementById('navToggle').addEventListener('click', expandNav, false);


function expandNav(){
  // console.log("fired from expandLine");
var navHam = document.getElementById('navEl');

  if(navHam.style.display == 'inline'){
    navHam.style.display = 'none';
  }
  else{
    navHam.style.display = 'inline';
  }
};


function loadCont(){
  fetch('./admin/scripts/functions.php')
  .then((res) => res.json())
  .then((data) => {
    let output = '<h2>My Work</h2>';
    data.forEach(function(work){
    output += `<div class="portItem small-12 medium-6  columns">
      <img class="mainWorkImg" src="images/${work.works_img}" alt="Portfolio Item">
      <p>'${work.works_desc}'</p>
      </div>`;
    });
    document.getElementById('myWork').innerHTML = output;
    let mainLight = document.querySelectorAll('.mainWorkImg');
    mainLight.forEach((el, index) => {
      el.addEventListener('click', popLightbox, false);
    });
  })
}

loadCont.call();



function popLightbox() {
  window.scrollTo(0, 0);
  document.body.style.overflow = "hidden";

  let lightbox = document.querySelector('.lightBox');
  lightbox.style.display = 'block';

  let mainImg = lightbox.querySelector('.lightBoxMain');
  let thumbs = lightbox.querySelector('.lightBoxTumbs');


  fetch('./admin/scripts/lotr.php')
  .then((resp) => resp.json())
  .then((dat) => {
    //console.log(dat);
    let output = `<div class=" lightBoxMain large-10 large-centered">
      <i class="fa fa-times fa-3x" aria-hidden="true"></i>`;
    dat.forEach(function(light){
    output += `
      <img class="lightBoxTumbs" id="${light.lightbox_id}" src="images/${light.lightbox_img}" alt="Lightbox main image">
    `;
    });
    output += `
    <i class="fa fa-arrow-left fa-3x" aria-hidden="true"></i>
    <i class="fa fa-arrow-right fa-3x" aria-hidden="true"></i>
  </div>
    `;

    document.querySelector('.lightBox').innerHTML = output;
    document.querySelector('.fa-times').addEventListener('click', closeLightbox, false);
  })
}
function closeLightbox(){
//console.log('fired from closeLightbox');
  let lightBox = document.querySelector('.lightBox');
  lightBox.style.display = 'none';
  document.body.style.overflow = "visible";
}
/*
  when clicking on image, open lightBox
  when clicking on x, close lightBox

  when clicking on thumbnail, change to that Picture
  - event listeners for each thumb
  - add and remove class to fade

 */

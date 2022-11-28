const slider = document.querySelectorAll('.slider');
const innerslider = document.querySelectorAll('.inner-slider');
const prev = document.querySelectorAll('.slider-prev');
const next = document.querySelectorAll('.slider-next');

for (let i = 0; i < slider.length; i++) {
    let dragged = false;
    let startX;
    let x;

    // Desktop Version

    slider[i].addEventListener("mousedown", e => {
        dragged = true;
        startX = e.offsetX - innerslider[i].offsetLeft;
        slider[i].style.cursor = "grabbing";
    });

    slider[i].addEventListener("mouseenter", () => {
        slider[i].style.cursor = "grab";
    });

    slider[i].addEventListener("mouseup", () => {
        slider[i].style.cursor = "grab";
        dragged = false;
    });

    slider[i].addEventListener("mousemove", e => {
        if (!dragged) return;
        e.preventDefault();

        x = e.offsetX;

        innerslider[i].style.left = `${x - startX}px`;

        checkProbs();

    });

    // Mobile Version

    slider[i].addEventListener('touchstart', e => {
        dragged = true;
        startX = e.targetTouches[0].clientX - innerslider[i].offsetLeft;

        checkProbs();

    }, {passive: true});

    slider[i].addEventListener('touchmove', e => {
        if (!dragged) return;
        x = e.targetTouches[0].clientX;

        innerslider[i].style.left = `${x - startX}px`;

        checkProbs();

    }, {passive: true});

    prev[i].addEventListener('click', () => {
        let innersliderLeft = innerslider[i].style.left;
        innerslider[i].style.left = parseInt(innersliderLeft.replace('px', '')) + 265 + 'px';

        checkProbs();
    });

    next[i].addEventListener('click', () => {
        let innersliderLeft = innerslider[i].style.left;
        innerslider[i].style.left = innersliderLeft.replace('px', '') - 265 + 'px';

        checkProbs();
    });

    const checkProbs = () => {
        let outer = slider[i].getBoundingClientRect();
        let inner = innerslider[i].getBoundingClientRect();

        if (parseInt(innerslider[i].style.left) > 0)
            innerslider[i].style.left = "-10px";

        if (inner.right < outer.right)
            innerslider[i].style.left = `-${inner.width - outer.width - 10}px`;
    }

}


// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementById("closeModalTema");

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

// MODAL ESTUDO
// Get the modal
var modalEstudo = document.getElementById("modalEstudo");

// Get the button that opens the modal
var btnAddEstudo = document.getElementById("addEstudoBtn");

// Get the <span> element that closes the modal
var spanCloseEst = document.getElementById("closeEst");

// When the user clicks on the button, open the modal
btnAddEstudo.onclick = function() {
  modalEstudo.style.display = "flex";
}

// When the user clicks on <span> (x), close the modal
spanCloseEst.onclick = function() {
  modalEstudo.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modalEstudo) {
    modalEstudo.style.display = "none";
  }
}




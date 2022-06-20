const formBx = document.querySelector('.formBx');

function right() {
    formBx.classList.remove('left');
    formBx.classList.add('right');
}

function left() {
    formBx.classList.remove('right');
    formBx.classList.add('left');
}

const btn = document.querySelector('#btn');
btn.onmousemove = function(e) {
    const left = e.pageX - btn.offsetleft;
    const top = e.pageY - btn.offsetTop;

    btn.style.setProperty('--x', left + 'px');
    btn.style.setProperty('--y', top + 'px');
}
const ml = document.getElementById('ml');
console.log(ml);

const modal = document.getElementById('modal');
console.log(modal)

const pc = document.getElementById('pc')

const closeMd = document.getElementById('close-md')

const closeMdFirst = document.getElementById('btnclosemd')

ml.addEventListener('click', function(){
    modal.classList.toggle('show');
})

pc.addEventListener('click', function(){
    modal.classList.toggle('show');
})

closeMd.addEventListener('click', function(){
    modal.classList.toggle('show')
})

closeMdFirst.addEventListener('click', function(){
    modal.classList.toggle('show')
})
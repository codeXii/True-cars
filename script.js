
var list1 = document.querySelector('#list1');
var list2 = document.querySelector('#list2');
var list3 = document.querySelector('#list3');
var list4 = document.querySelector('#list4');

var div1 = document.querySelector('#div-1');
var div2 = document.querySelector('#div-2');
var div3 = document.querySelector('#div-3');
var div4 = document.querySelector('#div-4');

list1.addEventListener('click', function(){
    div1.classList.remove('false');
    div2.classList.add('false');
    div3.classList.add('false');
    div4.classList.add('false');
});

list2.addEventListener('click', function(){
    div2.classList.remove('false');
    div1.classList.add('false');
    div3.classList.add('false');
    div4.classList.add('false');
});

list3.addEventListener('click', function(){
    div3.classList.remove('false');
    div1.classList.add('false');
    div2.classList.add('false');
    div4.classList.add('false');
});

list4.addEventListener('click', function(){
    div4.classList.remove('false');
    div1.classList.add('false');
    div2.classList.add('false');
    div3.classList.add('false');
});


// Script for navigation bar

const bar = document.getElementById('bar');
const close = document.getElementById('close');
const nav = document.getElementById('navbar');

if (bar) {
    bar.addEventListener('click', () =>{
     nav.classList.add('active');   
    })
}

if (close){
    close.addEventListener('click', ()=>{
        nav.classList.remove('active');
    })
}

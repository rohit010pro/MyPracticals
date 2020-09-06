const menuIcon=document.querySelector('.menu-icon');
const sideBar=document.querySelector('.side-bar');
const headList=document.querySelectorAll('.head-list');
// const headListIcon =document.querySelectorAll('.head-list .icon');
// const subList=document.querySelectorAll('.sublist'); 
const header = document.querySelector('#header');
const overlay = document.querySelector('.overlay');

menuIcon.addEventListener('click',()=>{
  menuIcon.classList.toggle('cross'); 
  sideBar.classList.toggle('slide');
  overlay.classList.toggle('show');
});

overlay.addEventListener('click',()=>{
  menuIcon.classList.toggle('cross'); 
  sideBar.classList.toggle('slide');
  overlay.classList.toggle('show');
});

headList.forEach((hlist)=>{
    hlist.addEventListener('click',()=>{
     let subList = hlist.nextElementSibling; 
     if(subList.style.maxHeight){
      subList.style.maxHeight = null;
      hlist.firstElementChild.style.transform="rotate(0)";
     }
     else{ 
      hlist.firstElementChild.style.transform="rotate(180deg)"; 
      subList.style.maxHeight=subList.scrollHeight + "px";
      if(subList.parentElement.parentElement)
       subList.parentElement.parentElement.style.maxHeight = "max-content";   
      }
    });
});

// headList.addEventListener('click',()=>{
//     // subList.classList.toggle('show');
//     if(subList.style.maxHeight)
//     subList.style.maxHeight = null;
//     else
//     subList.style.maxHeight=subList.scrollHeight + "px";
// });

var prevYpos = window.pageYOffset;
window.onscroll=()=>{
    var currentYpos = window.pageYOffset;
    if(prevYpos > currentYpos)
     header.style.top="0";
    else
     header.style.top="-100%"; 
    prevYpos = currentYpos;    
}

// For Question part
const quesPart = document.querySelector('.question-part');
const crossIcon = document.querySelector('.cross-icon');
const goIcon = document.querySelector('.go-icon');

crossIcon.addEventListener('click',()=>{
  quesPart.style.right="-100%";
});

goIcon.addEventListener('click',()=>{
  quesPart.style.right="0";
});
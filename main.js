// menu toggle

function openNav() {
  document.getElementById("mySidebar").style.width = "350px";
  document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  // document.body.style.opacity = "0.7";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.body.style.backgroundColor = "white";
  // document.body.style.opacity = "1";
}


let timeFilter = document.getElementsByClassName('btn-time')
for (let i = 0; i < timeFilter.length; i++) {
  timeFilter[i].addEventListener('click', function (e) {
      if (e.target.classList.contains('activee')) {
          e.target.classList.remove('activee')
      } else {
          e.target.classList.add('activee')
      }
  })
}

let categoryFilter = document.getElementsByClassName('btn-category')
for (let i = 0; i < categoryFilter.length; i++) {
  categoryFilter[i].addEventListener('click', function (e) {
      if (e.target.classList.contains('activee')) {
          e.target.classList.remove('activee')
      } else {
          e.target.classList.add('activee')
      }
  })
}


let groupFilter = document.getElementsByClassName('btn-group')
for (let i = 0; i < groupFilter.length; i++) {
  groupFilter[i].addEventListener('click', function (e) {
      if (e.target.classList.contains('activee')) {
          e.target.classList.remove('activee')
      } else {
          e.target.classList.add('activee')
      }
  })
}


let searchBtn = document.getElementById('search')
searchBtn.addEventListener('click', function(e){
let selectedCategory = []
let selectedTime = []
let selectedGroup = []

let activeCategories = document.querySelectorAll('.btn-category.activee')
let activeTime = document.querySelectorAll('.btn-time.activee')
let activeGroup = document.querySelectorAll('.btn-group.activee')

for(let i = 0; i< activeCategories.length; i++) {
  selectedCategory.push(activeCategories[i].innerHTML)
}
for(let i = 0; i<activeTime.length; i++){
  selectedTime.push(activeTime[i].innerHTML)
}
for(let i = 0; i<activeGroup.length; i++){
  selectedGroup.push(activeGroup[i].innerHTML)
}

let allCards = document.getElementsByClassName('cards')

for(let i = 0; i<allCards.length; i++) {
  allCards[i].classList.remove('hidden')
  let category = allCards[i].getElementsByClassName('this-category')[0].innerHTML
  let time = allCards[i].getElementsByClassName('this-time')[0].innerHTML
  let group = allCards[i].getElementsByClassName('this-group')[0].innerHTML


  if(selectedCategory.length > 0 && selectedCategory.indexOf(category) == -1) {
    allCards[i].classList.add('hidden')
  }

  if(selectedTime.length > 0 && selectedTime.indexOf(time) == - 1){
    allCards[i].classList.add('hidden')
  }
  if(selectedGroup.length > 0 && selectedGroup.indexOf(group) == - 1){
    allCards[i].classList.add('hidden')
  }
 


}


})





























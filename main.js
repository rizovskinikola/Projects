console.log('Loaded');

function setActive(type) {
    console.log(type);

    let myActiveItem = document.querySelector('.projects-nav li.active');

    if (myActiveItem) {
        myActiveItem.classList.remove('active');
    }

    let myListItems = document.querySelectorAll('.projects-nav li');
    let myCards = document.querySelectorAll('.card-holder');

    for (let i = 0; i < myCards.length; i++) {
        const card = myCards[i];
        card.style.display = 'none';
    }

    switch (type) {
        case 'marketing':
            myListItems[0].classList.add('active');

            let myMarketingCards = document.querySelectorAll('.card-holder.marketing')
            for (let i = 0; i < myMarketingCards.length; i++) {
                const card = myMarketingCards[i];
                card.style.display = 'block';
            }
            break;
        case 'development':
            myListItems[1].classList.add('active');

            let myDevelopmentCards = document.querySelectorAll('.card-holder.developer')
            for (let i = 0; i < myDevelopmentCards.length; i++) {
                const card = myDevelopmentCards[i];
                card.style.display = 'block';
            }
            break;
        case 'design':
            myListItems[2].classList.add('active');

            let myDesignCards = document.querySelectorAll('.card-holder.designer')
            for (let i = 0; i < myDesignCards.length; i++) {
                const card = myDesignCards[i];
                card.style.display = 'block';
            }
            break;
        default:
            break;
    }

}


function showSidebar() {
    let mySidebar = document.querySelector('.sidebar');
    mySidebar.style.width = '100%';
}

function closeSidebar() {
    let mySidebar = document.querySelector('.sidebar');
    mySidebar.style.width = '0';
}








//set html class to 'js'
document.querySelector('.no-js').classList.add('js');
document.querySelector('.no-js').classList.remove('no-js');

//burger menu
const burger = document.querySelector('.header__burger');
const mobileMenu = document.querySelector('.header__menu');
burger.addEventListener('click', function(){
  burger.classList.toggle('active');
  mobileMenu.classList.toggle('active');
});

const menuItems = document.querySelectorAll('li.menu-item-has-children');
Array.prototype.forEach.call(menuItems, function(el){

  const activatingA = el.querySelector('a');
  const btnOpen = '<button class="sub-menu__button sub-menu__button-open" aria-label="Expand Menu">+</button>';
  activatingA.insertAdjacentHTML('afterend', btnOpen);
  

  const subMenu = el.querySelector('.sub-menu');
  const btnClose = '<button class="sub-menu__button sub-menu__button-close">Close</button>';
  subMenu.insertAdjacentHTML('beforeend', btnClose);
  

});

/*set 'fullheight' elements to be 100vh minus the header height*/
fullHeight();
function fullHeight(){
    const windowHeight = window.innerHeight;
    const windowWidth = window.innerWidth;
	  const headerHeight = document.querySelector('header').offsetHeight;
    let fullHeight = windowHeight - headerHeight;
    if(windowHeight > windowWidth && fullHeight > 700){ //if the screen is portrait and the height is greater than 700px, limit the fullheight value (useful for portrait desktops)
        fullHeight = 700
    };
    document.querySelectorAll('.full-height').forEach(div => {
        div.style.minHeight = fullHeight + 'px'
    });

}
window.addEventListener("resize", fullHeight);

//toggle accordion content 
document.querySelectorAll('.accordion__heading').forEach(accordionButton => {
    accordionButton.setAttribute('aria-expanded', 'false'); //if js runs set aria-expanded to false
    accordionButton.addEventListener('click', function(){
        accordionButton.nextElementSibling.classList.toggle('open'); 
        const buttonState = accordionButton.getAttribute('aria-expanded') == 'false' ? 'true' : 'false';
        accordionButton.setAttribute('aria-expanded', buttonState);
    });
});


//tabbed content - taken from heydon pickering, inclusive components
(function() {
    // Get relevant elements and collections
    const tabbed = document.querySelector('.tab-block');
    if(tabbed){
      const tablist = tabbed.querySelector('ul');
      const tabs = tablist.querySelectorAll('a');
      const panels = tabbed.querySelectorAll('[id^="section"]');
      
      // The tab switching function
      const switchTab = (oldTab, newTab) => {
        newTab.focus();
        // Make the active tab focusable by the user (Tab key)
        newTab.removeAttribute('tabindex');
        // Set the selected state
        newTab.setAttribute('aria-selected', 'true');
        oldTab.removeAttribute('aria-selected');
        oldTab.setAttribute('tabindex', '-1');
        // Get the indices of the new and old tabs to find the correct
        // tab panels to show and hide
        let index = Array.prototype.indexOf.call(tabs, newTab);
        let oldIndex = Array.prototype.indexOf.call(tabs, oldTab);
        panels[oldIndex].hidden = true;
        panels[index].hidden = false;
      }
      
      // Add the tablist role to the first <ul> in the .ttab-block container
      tablist.setAttribute('role', 'tablist');
      
      // Add semantics are remove user focusability for each tab
      Array.prototype.forEach.call(tabs, (tab, i) => {
        tab.setAttribute('role', 'tab');
        tab.setAttribute('id', 'tab' + (i + 1));
        tab.setAttribute('tabindex', '-1');
        tab.parentNode.setAttribute('role', 'presentation');
        
        // Handle clicking of tabs for mouse users
        tab.addEventListener('click', e => {
          e.preventDefault();
          let currentTab = tablist.querySelector('[aria-selected]');
          if (e.currentTarget !== currentTab) {
            switchTab(currentTab, e.currentTarget);
          }
        });
        
        // Handle keydown events for keyboard users
        tab.addEventListener('keydown', e => {
          // Get the index of the current tab in the tabs node list
          let index = Array.prototype.indexOf.call(tabs, e.currentTarget);
          // Work out which key the user is pressing and
          // Calculate the new tab's index where appropriate
          let dir = e.which === 37 ? index - 1 : e.which === 39 ? index + 1 : e.which === 40 ? 'down' : null;
          if (dir !== null) {
            e.preventDefault();
            // If the down key is pressed, move focus to the open panel,
            // otherwise switch to the adjacent tab
            dir === 'down' ? panels[i].focus() : tabs[dir] ? switchTab(e.currentTarget, tabs[dir]) : void 0;
          }
        });
      });
    
      // Add tab panel semantics and hide them all
      Array.prototype.forEach.call(panels, (panel, i) => {
        panel.setAttribute('role', 'tabpanel');
        panel.setAttribute('tabindex', '-1');
        let id = panel.getAttribute('id');
        panel.setAttribute('aria-labelledby', tabs[i].id);
        panel.hidden = true; 
      });
      
      // Initially activate the first tab and reveal the first tab panel
      tabs[0].removeAttribute('tabindex');
      tabs[0].setAttribute('aria-selected', 'true');
      panels[0].hidden = false;
    };
  })();







$('document').ready(function(){

    $('.slick-workroom-gallery').slick({
      infinite: true,
      dots: false,
      arrows: false,
      fade: true,
      loop:true,
      autoplay:true,
      autoplaySpeed:3000,
    });
    $('.slick-banner-gallery').slick({
      infinite: true,
      dots: false,
      arrows: false,
      fade: true,
      loop:true,
      autoplay:true,
      autoplaySpeed:3000,
    });

    $('.testimonial-slide-gallery').slick({
      infinite: true,
      dots: true,
      arrows: false,
      fade: false,
      slidesToShow: 1,

    
  });
    
    
})
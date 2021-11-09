  //OPEN MOBILE MAIN MENU
  const menuOpen = () => {
    const btn = document.querySelector('.menu-toggler');
    const nav = document.querySelector('#primary-menu'); 
  
    btn.addEventListener('click', () => {
  
      if(nav.style.transform == "scaleY(0)") {
        nav.style.transform = "scaleY(1)";
      }
      else {
        nav.style.transform = "scaleY(0)";
      }
        
  });
}
  

  //OPEN TOP MENU
  const topMenuOpen = () => {
    const btnDots = document.querySelector('.dots');
    const navTop = document.querySelector('#top');

    btnDots.addEventListener('click', () => {

        if(navTop.style.transform == "scaleY(0)") {
            navTop.style.transform = "scaleY(1)";
          }
          else {
            navTop.style.transform = "scaleY(0)";
          }
    });
} 

//SIDE LINKS
const sideLinks = () => {
  const cta = document.querySelector('.cta-btn');
  const wrapper = document.querySelector('.holder');

  cta.addEventListener('click', () => {

      if(wrapper.style.transform == "translate(89%)") {
        wrapper.style.transform = "translate(0)";
        }
        else {
          wrapper.style.transform = "translate(89%)";
        }
  });
} 


const func = () => {
    menuOpen();
    topMenuOpen();
    sideLinks();
}
func();

/**
* Template Name: BizLand - v3.6.0
* Template URL: https://bootstrapmade.com/bizland-bootstrap-business-template/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }


  /**
   * Porfolio isotope and filter
   */
  window.addEventListener('load', () => {
    let servicesContainer = select('.services-container');
    if (servicesContainer) {
      let servicesIsotope = new Isotope(servicesContainer, {
        itemSelector: '.services-item'
      });

      let servicesFilters = select('#services-flters li', true);

      on('click', '#services-flters li', function(e) {
        e.preventDefault();
        servicesFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        servicesIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        servicesIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  /**
   * Initiate services lightbox 
   */
  const servicesLightbox = GLightbox({
    selector: '.services-lightbox'
  });

  /**
   * services details slider
   */
  new Swiper('.services-details-slider', {
    speed: 400,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()
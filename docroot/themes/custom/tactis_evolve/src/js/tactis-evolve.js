/**
 * @file
 *
 * All Drupal Behaviors with supporting functions.
 */

(() => {

  let originalHeroSize = 0;

  Drupal.behaviors.tactisLottie = {
    attach: function (context, settings) {
      once('tactisLottie', '.lottie-animation', context).forEach(
          function (element) {
            let animation = bodymovin.loadAnimation({
              container: document.getElementById(element.id),
              //path: '/themes/custom/tactis_evolve/images/json/tactis-arrow.json',
              animationData: JSON.parse(element.dataset.animation),
              renderer: 'svg',
              loop: false,
              autoplay: true,
              rendererSettings: {
                // viewBoxSize: '0 0 550 525', // ideally this would work, but animation needs to be centered after each fold.
                viewBoxSize: '-50 50 550 525', // this works viewBoxOnly but a lot of space
                // preserveAspectRatio: 'none',
                viewBoxOnly: true,
              }
            });

            animation.addEventListener('complete', (event) => {
              document.getElementById(element.id).parentElement.classList.add('activate');
              document.getElementById(element.id).parentElement.parentElement.getElementsByClassName('animate-burst')[0].classList.add('activate');
              window.dispatchEvent(new Event('resize'));
            });

          }
      );
    }
  }


  Drupal.behaviors.tactisEvolveHero = {
    attach: function (context, settings) {
      once('tactisEvolveHero', 'body').forEach(function (element) {

        window.addEventListener('resize', function(){
          headerResize(element);
          headerScroll(element);
        });

        window.addEventListener('scroll', function() {
          headerScroll(element)
        });

        headerResize(element); // once on load.
        headerScroll(element); // once on load.
      });
    }
  }

  Drupal.behaviors.tactisEvolveParallaxHeight = {
    attach: function (context, settings) {
      once('tactisEvolveParallaxHeight', '.is_parallax', context).forEach(
          function (element, myI){
            window.addEventListener('resize', function(){
              parallaxHeight(element);
            });
            parallaxHeight(element); // Run on load.
          }
      );
    }
  }

  Drupal.behaviors.tactisEvolveAnimateOnScroll = {
    attach: function (context, settings) {
      once('tactisEvolveAnimateOnScroll', '.animate', context).forEach(
          function (element){
            window.addEventListener('scroll', function() {
              animateScroll(element)
            });
           animateScroll(element); // Run on load.
          }
      );
    }
  }

  function parallaxHeight(element){
    let content = element.getElementsByClassName('field--name-field-content')[0];
    let contentHeight = content.offsetHeight;
    element.style.height = contentHeight + "px";
  }

  function animateScroll(element, index) {

    let windowHeight = window.innerHeight;
    let elementVisible = 100;
    let elementTop = element.getBoundingClientRect().top;

    if (element.classList.contains('animate-scroll')){
      elementVisible = 10;
      elementTop = element.closest('.paragraph').getBoundingClientRect().top;
    }

    if (elementTop < windowHeight - elementVisible) {
      element.classList.add('activate', 'delay');
    }else{
      element.classList.remove('activate', 'delay');
    }
  }

  function headerResize(element){
    // Lets grab some elements from our page and crete some defaults
    let orgHero = element.getElementsByClassName("region-hero")[0];
    let heroContent = orgHero.getElementsByClassName("hero-block")[0];
    let orgLogo = element.getElementsByClassName('region-header')[0];
    let orgHeader = element.getElementsByTagName('header')[0];
    let orgMain = element.getElementsByTagName('main')[0];
    // let orgHeroHeight = orgHero.offsetHeight;
    // let orgContentHeight = heroContent.offsetHeight;

    originalHeroSize = heroContent.offsetHeight;

    // This is the value of the current scroll.
    let bodyScrollTop =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop || 0;

    if (bodyScrollTop === 0) {
      //now lets set the height of the items we need to manage.
      orgHeader.style.height = (orgLogo.offsetHeight + heroContent.offsetHeight) + "px";
    }
    orgMain.style.marginTop = (orgLogo.offsetHeight + heroContent.offsetHeight) + "px";

  }

  function headerScroll(element) {

    // grabbing our elements.
    let header = element.getElementsByTagName('header')[0];
    let hero = element.getElementsByClassName("region-hero")[0];
    let logo = element.getElementsByClassName("region-header")[0];

    // This is the value of the current scroll.
    let bodyScrollTop =
        window.pageYOffset ||
        document.documentElement.scrollTop ||
        document.body.scrollTop || 0;

    // If the scroll position is <= the orginal height of our hero + the height of the logo area
    // we need to do some updates to DOM to show the parallaxing effect.
    if (bodyScrollTop <= (originalHeroSize + logo.offsetHeight)) {
      // We are currently scrolling through the hero.

      if (logo.classList.contains('border-bottom')){
        // if our logo area still have the bottom border, we are returning from a
        // lower part of the page.  Let's remove that border and its color.
        logo.classList.remove('border-bottom', 'border-secondary');
      }
      if (bodyScrollTop < originalHeroSize) {
        // If our scroll position is < the orginal hero height, we need
        // set the height of our hero and header so it appears the window
        // is closing.
        header.style.height = (logo.offsetHeight + originalHeroSize - bodyScrollTop) + "px";
        hero.style.height = originalHeroSize - bodyScrollTop + "px";
      } else {
        // The scroll position is >= the orginal hero height, so lets add
        // our border to the logo set the heights to zero.
        if (!logo.classList.contains('border-bottom')) {
          logo.classList.add('border-bottom', 'border-secondary');
          header.style.height = logo.offsetHeight + "px";
          hero.style.height = 0;
        }
      }
    }else{
      // It is possible that a page reload will not move the scroll position
      // It is also possible that mobile devices can scroll so fast, that
      // there is no time to make the adjustment.  Both cases result in the
      // hero staying open.
      // Let's just force our heights to be zero if we haven't done so already.
      if (!logo.classList.contains('border-bottom')) {
        logo.classList.add('border-bottom', 'border-secondary');
        header.style.height = logo.offsetHeight + "px";
        hero.style.height = 0;
      }
    }
  }

  function removeClassByPrefix(node, prefix) {
    const REGX = new RegExp('\\b' + prefix + '[^ ]*[ ]?\\b', 'g');
    node.className = node.className.replace(REGX, '');
    return node;
  }

})();
import $ from 'jquery';
import waypoints from '../../../node_modules/waypoints/lib/noframework.waypoints';
import smoothScroll from 'jquery-smooth-scroll';

class MobileMenu {
  constructor() {
    this.menu = $(".nav");
    this.openButton = $(".header__icon");
    this.headerTriggerElement = $(".banner-border");
    this.headerLinks = $(".nav__link, .footer__back-top");
    this.backTopLink = $(".footer__back-top");
    this.lazyImages = $(".lazyload");
    this.addSmoothScrolling();
    this.backTopWaypoint();
    this.refreshWaypoints();
    this.events();
    this.openMenu();
  }

  refreshWaypoints() {
    this.lazyImages.on('load', function() {
      Waypoint.refreshAll();
    });
  }

  addSmoothScrolling() {
    this.headerLinks.smoothScroll();
  }

  events() {
    this.openButton.click(this.openMenu.bind(this));
    this.navLink.click(this.openMenu.bind(this));
  }

  openMenu() {
    this.openButton.toggleClass("header__icon--close-x");
    this.menu.toggleClass("nav--is-visible");
  }

  backTopWaypoint() {
    let that = this;
    new Waypoint({
      element: this.headerTriggerElement[0],
      handler: function(direction) {
        if (direction == "down"){
          that.backTopLink.addClass("footer__back-top--is-visible");
        }else{
          that.backTopLink.removeClass("footer__back-top--is-visible");
        }
      }
    })
  }
}

export default MobileMenu;

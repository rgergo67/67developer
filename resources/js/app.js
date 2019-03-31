
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
window.Typed = require('typed.js');

var options = {
  strings: ["készítés", "szerkesztés", "javítás"],
  typeSpeed: 80,
  backDelay: 4000,
  backSpeed: 40,
  startDelay: 500,
  loop: true
}

var typed = new window.Typed("#typed", options);

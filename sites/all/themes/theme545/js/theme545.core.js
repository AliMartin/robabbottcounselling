/**
 * theme545 javascript core
 *
 * @author Alex Weber <alexweber.com.br>
 *
 * - Provides frequently used extensions to base javascript objects
 * - jQuery browser detection tweak
 * - Define functions used in events
 */

// Adds String.trim() method
String.prototype.trim = function(){
	return this.replace(/\s+$/, '').replace(/^\s+/, '');
}

// jQuery Browser Detect Tweak For IE7
jQuery.browser.version = jQuery.browser.msie && parseInt(jQuery.browser.version) == 6 && window["XMLHttpRequest"] ? "7.0" : jQuery.browser.version;

// Console.log wrapper to avoid errors when firebug is not present
// usage: log('inside coolFunc',this,arguments);
// paulirish.com/2009/log-a-lightweight-wrapper-for-consolelog/
window.log = function() {
  log.history = log.history || [];   // store logs to an array for reference
  log.history.push(arguments);
  if (this.console) {
    console.log(Array.prototype.slice.call(arguments));
  }
};

// init object
var theme545 = theme545 || {};

/**
 * Image handling functions
 */
theme545.image = { _cache : [] };

// preload images
theme545.image.preload = function() {
  for (var i = arguments.length; i--;) {
    var cacheImage = document.createElement('img');
    cacheImage.src = arguments[i];
    theme545.image._cache.push(cacheImage);
  }
}

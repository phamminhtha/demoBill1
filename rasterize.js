var page = require('webpage').create();
var system = require('system');

var templatePath = system.args[1];
var outputPath = system.args[2];
var text = system.args[3];

page.content = '<html><head></head><body><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script><script>$(document).ready(function(){ $("body").append("<h1>" + "' + text + '" + "</h1>"); });</script></body></html>';

page.onLoadFinished = function(status) {
  page.render(outputPath);
  phantom.exit();
};

page.open(templatePath);

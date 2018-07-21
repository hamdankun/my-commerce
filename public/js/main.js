var DOM = function() {
	
}

DOM.prototype.beforeLoad = function() {
	HoldOn.open();
};

DOM.prototype.onLoaded = function() {
	HoldOn.close();
};

DOM.prototype.render = function() {
	var self = this;
	self.beforeLoad();
	$(window).on('load', function() {
		self.onLoaded();
	});
};

new DOM().render();

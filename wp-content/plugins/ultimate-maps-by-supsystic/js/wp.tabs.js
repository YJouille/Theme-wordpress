<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96
(function( $ ){
	var methods = {
		init : function( options ) {
			return this.each(function(){
				var $this = jQuery(this);
				this._options = options || {};
				if (!$this.hasClass('umsWpTabs')) {
					$this.addClass('umsWpTabs');
					var navigations = $this.find('.nav-tab-wrapper:first').find('a.nav-tab:not(.notTab)')
					,	firstNavigation = null;
					navigations.each(function(){
						if(!firstNavigation)
							firstNavigation = jQuery(this);
						jQuery(this).click(function(){
							$this.wpTabs('activate', jQuery(this).attr('href'));
							return false;
						});
					});
					var locationHash = document.location.hash;
					if(locationHash && locationHash != '' && $this.find(locationHash)) {
						$this.wpTabs('activate', locationHash);
						if(jQuery(locationHash).length) {
							// Avoid scrolling to hashes
							jQuery(window).on('load',function(){
								setTimeout(function(){
									jQuery('html, body').animate({
										scrollTop: 0
									}, 100);
								}, 1);
							});
						}
					} else {
						$this.wpTabs('activate', firstNavigation.attr('href'));
					}
				}
			});
		}
	,	activate: function(selector) {
			return this.each(function(){
				var $this = jQuery(this);
				if($this.find(selector).length) {
					var navigations = $this.find('.nav-tab-wrapper:first').find('a.nav-tab:not(.notTab)');
					if(!this._firstInit) {
						if(this._options.uniqId)
							$this.find('.umsTabContent').attr('data-tabs-for', this._options.uniqId);
						this._firstInit = 1;
					}
					var allTabsContent = this._options.uniqId
						? $this.find('.umsTabContent[data-tabs-for="'+ this._options.uniqId + '"]')
						: $this.find('.umsTabContent');
					allTabsContent.hide();
					$this.find(selector).show();
					navigations.removeClass('nav-tab-active');
					$this.find('[href="'+ selector+ '"]').addClass('nav-tab-active');
					if(this._options.change) {
						this._options.change(selector);
					}
				}
			});
		}
	};
	$.fn.wpTabs = function( method ) {
		if ( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'There are no method with name: '+ method);
		}
	};
})( jQuery );
<<<<<<< HEAD
=======
=======
(function( $ ){
	var methods = {
		init : function( options ) {
			return this.each(function(){
				var $this = jQuery(this);
				this._options = options || {};
				if (!$this.hasClass('umsWpTabs')) {
					$this.addClass('umsWpTabs');
					var navigations = $this.find('.nav-tab-wrapper:first').find('a.nav-tab:not(.notTab)')
					,	firstNavigation = null;
					navigations.each(function(){
						if(!firstNavigation)
							firstNavigation = jQuery(this);
						jQuery(this).click(function(){
							$this.wpTabs('activate', jQuery(this).attr('href'));
							return false;
						});
					});
					var locationHash = document.location.hash;
					if(locationHash && locationHash != '' && $this.find(locationHash)) {
						$this.wpTabs('activate', locationHash);
						if(jQuery(locationHash).length) {
							// Avoid scrolling to hashes
							jQuery(window).on('load',function(){
								setTimeout(function(){
									jQuery('html, body').animate({
										scrollTop: 0
									}, 100);
								}, 1);
							});
						}
					} else {
						$this.wpTabs('activate', firstNavigation.attr('href'));
					}
				}
			});
		}
	,	activate: function(selector) {
			return this.each(function(){
				var $this = jQuery(this);
				if($this.find(selector).length) {
					var navigations = $this.find('.nav-tab-wrapper:first').find('a.nav-tab:not(.notTab)');
					if(!this._firstInit) {
						if(this._options.uniqId)
							$this.find('.umsTabContent').attr('data-tabs-for', this._options.uniqId);
						this._firstInit = 1;
					}
					var allTabsContent = this._options.uniqId
						? $this.find('.umsTabContent[data-tabs-for="'+ this._options.uniqId + '"]')
						: $this.find('.umsTabContent');
					allTabsContent.hide();
					$this.find(selector).show();
					navigations.removeClass('nav-tab-active');
					$this.find('[href="'+ selector+ '"]').addClass('nav-tab-active');
					if(this._options.change) {
						this._options.change(selector);
					}
				}
			});
		}
	};
	$.fn.wpTabs = function( method ) {
		if ( methods[method] ) {
			return methods[method].apply( this, Array.prototype.slice.call( arguments, 1 ));
		} else if ( typeof method === 'object' || ! method ) {
			return methods.init.apply( this, arguments );
		} else {
			$.error( 'There are no method with name: '+ method);
		}
	};
})( jQuery );
>>>>>>> 29212546cc82e935cef17fd492e0a61a9640f45d
>>>>>>> a6cf1e26e2468804614611967dbf6149f97e7d96

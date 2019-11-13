(function ($) {
    var Ride = function (element, options) {
        this.$element    = $(element);
        this.$indicators = this.$element.find('.rise-indicators');
        this.options     = options;
        this.paused      = null;
        this.appearing   = null;
        this.interval    = null;

        this.options.pause == 'hover' && !('ontouchstart' in document.documentElement) && this.$element
            .on('mouseenter.bs.rise', $.proxy(this.pause, this))
            .on('mouseleave.bs.rise', $.proxy(this.cycle, this));
    };

    Ride.prototype.cycle = function (e) {
        e || (this.paused = false);

        this.interval && clearInterval(this.interval);

        this.options.interval
        && !this.paused
        && (this.interval = setInterval($.proxy(this.appear, this), this.options.interval));

        return this;
    };

    Ride.prototype.pause = function (e) {
        e || (this.paused = true);

        if (this.$element.find('.next, .prev').length && $.support.transition) {
            this.$element.trigger($.support.transition.end);
            this.cycle(true);
        }

        this.interval = clearInterval(this.interval);

        return this;
    };

    Ride.prototype.appear = function (next) {
        if (this.appearing) return;

        var $active   = this.$element.find('.item.active');
        var $next     = next || this.getItemForDirection($active);
        var isCycling = this.interval;
        var that      = this;

        if ($next.hasClass('active')) return (this.appearing = false);

        this.appearing = true;

        isCycling && this.pause();

        if (this.$indicators.length) {
            this.$indicators.find('.active').removeClass('active');
            var $nextIndicator = $(this.$indicators.children()[this.getItemIndex($next)]);
            $nextIndicator && $nextIndicator.addClass('active');
        }

        if ($.support.transition) {
            $next.addClass('active');
            $active.removeClass('active');
            that.appearing = false;
        } else {
            $active.removeClass('active');
            $next.addClass('active');
            this.appearing = false;
        }

        isCycling && this.cycle();

        return this;
    };

    Ride.prototype.getItemForDirection = function (active) {
        var activeIndex = this.getItemIndex(active);
        var itemIndex = (activeIndex + 1) % this.$items.length;
        return this.$items.eq(itemIndex);
    };

    Ride.prototype.getItemIndex = function (item) {
        this.$items = item.parent().children('.item');
        return this.$items.index(item || this.$active);
    };

    Ride.prototype.to = function (pos) {
        var activeIndex = this.getItemIndex(this.$active = this.$element.find('.item.active'));

        if (pos > (this.$items.length - 1) || pos < 0) return;

        if (this.appearing) return;

        if (activeIndex == pos) return this.pause().cycle();

        return this.appear(this.$items.eq(pos));
    };

    Ride.DEFAULTS = {
        interval: 5000,
        pause: 'hover'
    };

    var clickHandler = function (e) {
        var href;
        var $this   = $(this);
        var $target = $($this.attr('data-target') || (href = $this.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '')); // strip for ie7
        if (!$target.hasClass('rise')) return;
        var options = $.extend({}, $target.data(), $this.data());
        var appearIndex = $this.attr('data-appear-to');
        if (appearIndex) options.interval = false;

        if (appearIndex) {
            $target.data('bs.rise').to(appearIndex);
        }

        e.preventDefault();
    };

    $(document).on('click.bs.rise.data-api', '[data-appear-to]', clickHandler);

    $(window).on('load', function () {
        $('[data-ride=rise]').each(function () {
            var $this = $(this);
            var options = $.extend({}, Ride.DEFAULTS, $this.data());
            var data = $this.data('bs.rise');
            if (!data) $this.data('bs.rise', data = new Ride(this, options));
            data.cycle();
        });
    });
})(jQuery);

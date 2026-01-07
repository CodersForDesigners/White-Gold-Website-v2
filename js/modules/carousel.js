( function () {

    var autoScrollInterval = 5000;  // 5 seconds
    var autoScrollTimer;

    /*
     * This function scrolls the carousel automatically
     */
    function autoScrollCarousel() {
        $(".js_carousel_container").each(function () {
            var domCarouselContent = $(this).find(".js_carousel_content").get(0);
            var $carouselItem = $(domCarouselContent).find(".js_carousel_item");
            var scrollOffset = domCarouselContent.scrollLeft;
            var newScrollOffset = scrollOffset + $carouselItem.width();
            var maxScroll = domCarouselContent.scrollWidth - domCarouselContent.clientWidth;

            // Reset scroll to beginning if reached the end
            if (newScrollOffset >= maxScroll) {
                newScrollOffset = 0;
            }

            try {
                domCarouselContent.scrollTo({ left: newScrollOffset, behavior: "smooth" });
            } catch (e) {
                domCarouselContent.scrollTo(newScrollOffset, 0);
            }

            hideOrShowCarouselButtons(domCarouselContent, newScrollOffset);
        });
    }

    // Start auto-scrolling
    autoScrollTimer = setInterval(autoScrollCarousel, autoScrollInterval);

    /*
     * This handles the interaction of the arrow buttons on either side of the carousel.
     */
    $(document).on("click", ".js_carousel_container .js_pager", function (event) {
        clearInterval(autoScrollTimer);  // Stop auto-scrolling when user interacts
        autoScrollTimer = setInterval(autoScrollCarousel, autoScrollInterval);  // Restart auto-scrolling after interaction

        var $carouselArrowButton = $(event.currentTarget);
        var domCarouselContent = $carouselArrowButton.closest(".js_carousel_container").find(".js_carousel_content").get(0);
        var scrollDirection = $carouselArrowButton.data("dir");
        var scrollOffset = domCarouselContent.scrollLeft;
        var newScrollOffset;
        var $carouselItem = $(domCarouselContent).find(".js_carousel_item");

        if (scrollDirection == "left")
            newScrollOffset = scrollOffset - $carouselItem.width();
        else
            newScrollOffset = scrollOffset + $carouselItem.width();

        try {
            domCarouselContent.scrollTo({ left: newScrollOffset, behavior: "smooth" });
        } catch (e) {
            domCarouselContent.scrollTo(newScrollOffset, 0);
        }

        hideOrShowCarouselButtons(domCarouselContent, newScrollOffset);
    });

    // Existing scroll event logic
    $(".js_carousel_content").on("scroll", function (event) {
        hideOrShowCarouselButtons(event.target);
    });

    var hideOrShowCarouselButtons = window.__BFS.utils.throttle(function hideOrShowCarouselButtons(domCarouselContent, newScrollOffset) {
        var $carouselContent = $(domCarouselContent);
        var $carouselContainer = $carouselContent.closest(".js_carousel_container");
        $carouselContainer.data("leftPager", $carouselContainer.find(".js_pager[data-dir='left']"));
        $carouselContainer.data("rightPager", $carouselContainer.find(".js_pager[data-dir='right']"));

        var carouselContentStyles = $carouselContent.data("computedStyles");
        if (!carouselContentStyles) {
            carouselContentStyles = getComputedStyle(domCarouselContent);
            $carouselContent.data("computedStyles", carouselContentStyles);
        }
        var carouselContentPaddingLeft = parseInt(carouselContentStyles.paddingLeft);
        var carouselContentPaddingRight = parseInt(carouselContentStyles.paddingRight);
        var scrollWidth = domCarouselContent.scrollWidth;
        var scrollLeft = newScrollOffset || domCarouselContent.scrollLeft;
        var newCarouselEndOffset = scrollLeft + domCarouselContent.offsetWidth;

        if (inWithin(scrollLeft, 0, carouselContentPaddingLeft + 100)) {
            $carouselContainer.data("leftPager").addClass("fade-out");
            $carouselContainer.data("rightPager").removeClass("fade-out");
        } else if (inWithin(newCarouselEndOffset, scrollWidth - carouselContentPaddingRight - 100, scrollWidth)) {
            $carouselContainer.data("leftPager").removeClass("fade-out");
            $carouselContainer.data("rightPager").addClass("fade-out");
        }
    }, 0.5);

    function inWithin(number, startRange, endRange) {
        if (startRange > endRange) {
            var tmp = startRange;
            startRange = endRange;
            endRange = tmp;
        }
        return number >= startRange && number <= endRange;
    }

})();

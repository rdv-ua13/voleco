import vars from './_vars';
import {createPopper} from "@popperjs/core";
/*import './_functions';*/

/* from main.js */
document.addEventListener("DOMContentLoaded", () => {
    const app = new application();
    app.init();
});

function application() {
    //variable
    //this.myMap;
}
application.prototype.init = function () {
    this.initTabs();
    this.initRegStepper();
    this.initValidationNumCode();
    this.initNavTabs();
    this.initTooltips();
    this.initProgressBar();
};

// Init tabs
application.prototype.initTabs = function () {
    if ($(".tabs").length) {
        let currentSelected = 1;
        $(".tabs__nav-item").on("click", function () {
            $(".tabs__nav-item").not(this).find(".tabs__nav-btn").removeClass("selected");
            $(this).find(".tabs__nav-btn").addClass("selected");

            currentSelected = $(this).find(".tabs__nav-btn").data("target");
            $(this).closest(".tabs").find(".tabs__panel").removeClass("active");
            $(this).closest(".tabs").find(".tabs__panel[data-id='" + currentSelected + "']").addClass("active");
        });
    }
};
// Initialization registration stepper
application.prototype.initRegStepper = function () {
    if($(".bs-stepper").length) {
        let stepper = new Stepper($('.bs-stepper')[0]);

        $(".js-stepper-trigger").on("click", function () {
            let nextStep = $(this).data("index-next");

            switch(nextStep) {
                case 2:
                    stepper.to(2);
                    break;
                case 3:
                    stepper.to(3);
                    break;
                default:
                    stepper.to(1);
            }
        });
    }
};
// Initialization validation num code
application.prototype.initValidationNumCode = function () {
    if($(".authreg--recovery").length) {
        let in1 = document.getElementById('recoveryFormValidationCode1'),
            ins = document.querySelectorAll('.js-forminput-recovery-num'),
            splitNumber = function (e) {
                let data = e.data || e.target.value; // Chrome doesn't get the e.data, it's always empty, fallback to value then.
                if (!data) return; // Shouldn't happen, just in case.
                if (data.length === 1) return; // Here is a normal behavior, not a paste action.

                popupNext(e.target, data);
            },
            popupNext = function (el, data) {
                el.value = data[0]; // Apply first item to first input
                data = data.substring(1); // remove the first char.
                if (el.nextElementSibling && data.length) {
                    // Do the same with the next element and next data
                    popupNext(el.nextElementSibling, data);
                }
            };

        ins.forEach(function (input) {
            /**
             * Control on keyup to catch what the user intent to do.
             * I could have check for numeric key only here, but I didn't.
             */
            input.addEventListener('keyup', function (e) {
                // Break if Shift, Tab, CMD, Option, Control.
                if (e.keyCode === 16 || e.keyCode == 9 || e.keyCode == 224 || e.keyCode == 18 || e.keyCode == 17) {
                    return;
                }

                // On Backspace or left arrow, go to the previous field.
                if ((e.keyCode === 8 || e.keyCode === 37) && this.previousElementSibling && this.previousElementSibling.tagName === "INPUT") {
                    this.previousElementSibling.select();
                } else if (e.keyCode !== 8 && this.nextElementSibling) {
                    this.nextElementSibling.select();
                }

                // If the target is populated to quickly, value length can be > 1
                if (e.target.value.length > 1) {
                    splitNumber(e);
                }
            });

            /**
             * Better control on Focus
             * - don't allow focus on other field if the first one is empty
             * - don't allow focus on field if the previous one if empty (debatable)
             * - get the focus on the first empty field
             */
            input.addEventListener('focus', function (e) {
                // If the focus element is the first one, do nothing
                if (this === in1) return;

                // If value of input 1 is empty, focus it.
                if (in1.value == '') {
                    in1.focus();
                }

                // If value of a previous input is empty, focus it.
                // To remove if you don't wanna force user respecting the fields order.
                if (this.previousElementSibling.value == '') {
                    this.previousElementSibling.focus();
                }
            });
        });

        /**
         * Handle copy/paste of a big number.
         * It catches the value pasted on the first field and spread it into the inputs.
         */
        in1.addEventListener('input', splitNumber);
    }
};
// Initialization navigation pages tabs
application.prototype.initNavTabs = function () {
    if ($(".js-main-section-tabs").length) {
        const swiperNavTabs = new Swiper(".js-main-section-tabs", {
          slidesPerView: "auto",
          spaceBetween: 0,
          /*navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          }*/
        });
    }
};
// Initialization navigation pages tabs
application.prototype.initTooltips = function () {
    if ($(".tooltip").length) {
        const button = $(".tooltip__btn");
        const tooltip = $(".tooltip__txt");

        const popperInstance = new Popper.createPopper(button, tooltip, {
            placement: 'top'
        });
    }
};
// Initialization cards progress bar
application.prototype.initProgressBar = function () {
    if ($(".js-progress").length) {
        $(".js-progress").each(function (i, el) {
            let curValue = $(el).find(".progress-bar-data__value").data("value");
            let curMaxValue = $(el).find(".progress-bar-data__max").data("max");
            let curIndicator = $(el).find(".progress-bar__indicator");
            let curProgressLine = $(el).find(".progress-bar__line");

            function result(curValue, curMaxValue) {
                let res = ((curValue / curMaxValue) * 100).toFixed(2);
                return res;
            }

            curIndicator.val(result(curValue, curMaxValue));
            let curProgressLineValue = curIndicator.val() * 1 + "%";
            curProgressLine.css({
                "width" : curProgressLineValue
            });
        });
    }
};


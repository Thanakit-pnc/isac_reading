var ColorPicker = (function () {
    'use strict';

    var COLORS = [
        '#FFFF7B',
        '#F44336',
        '#8BC34A',
        '#29B6F6'
    ];
    var CLASS_SELECTED = 'selected';

    function ColorPicker(el) {
        var self = this;
        this.color = COLORS[0];
        this.selected = null;

        COLORS.forEach(function (color, index) {
            var div = el.querySelectorAll('div');
            div[index].style.backgroundColor = color;
 
            if (self.color === color) {
                div[index].className = CLASS_SELECTED;
                self.selected = div[index];
            }

            div[index].addEventListener('click', function () {
                if (color !== self.color) {
                    self.color = color;

                    if (self.selected) {
                        self.selected.className = '';
                    }
                    self.selected = div[index];
                    self.selected.className = CLASS_SELECTED;

                    if (typeof self.callback === 'function') {
                        self.callback.call(self, color);
                    }
                }
            }, false);

        });

    }


    ColorPicker.prototype.onColorChange = function (callback) {
        this.callback = callback;
    };

    return ColorPicker;
})();
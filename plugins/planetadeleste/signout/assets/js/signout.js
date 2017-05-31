/*
 *  SignOut plugin
 *
 *  Javascript API:
 *  $.signOut({timeout: 15, notify: true, notify_close: 20, notify_message:'Session will close in {timeout} seconds'})
 *
 *  Options:
 *  - timeout: (number)
 *      Number in minutes to close session
 *  - notify: (boolean)
 *      Show notification about session close
 *  - notify_timeout: (number)
 *      Number in seconds after notify and session close
 *  - message: (string)
 *      Text to display in notify alert
 */

+function ($) {
    "use strict";

    var SignOut = function (options) {
        this.options = options;

        this.init();
    };

    SignOut.DEFAULTS = {
        timeout       : 15,
        notify        : true,
        notify_timeout: 20,
        message       : 'Session will close in {timeout} seconds',
        close_button  : 'Close',
        ok_button     : 'Continue'
    };

    SignOut.prototype.init = function () {
        if (this.options.timeout > 0) {
            var delay = this.options.timeout * 60 * 1000;
            console.log(delay);
            $.timeout(delay, $('body'), this.options.message).done($.proxy(this.logout, this));
        }
    };

    SignOut.prototype.logout = function ($el, msg) {
        if (this.options.notify) {
            this.alert();
        } else {
            this.close();
        }
    };

    SignOut.prototype.alert = function () {
        var message    = this.options.message.replace('{timeout}', '<span data-signout-timeleft></span>'),
            text       = '',
            msg        = message.split('|'),
            self       = this,
            closeOn    = this.options.notify_timeout,
            // timeout    = $.timeout(this.options.notify_timeout * 1000),
            $countdown = null,
            timer      = null
        ;

        message = msg[0];
        if (msg.length > 1) {
            text = msg[1];
        }

        swal({
                title            : message,
                text             : text,
                html             : true,
                showCancelButton : true,
                confirmButtonText: this.options.ok_button,
                cancelButtonText : this.options.close_button,
                closeOnConfirm   : false,
                closeOnCancel    : false
            },
            function (confirmed) {
                if (confirmed) {
                    // timeout.clear();
                    self.init();
                    sweetAlert.close();
                } else {
                    self.close();
                }
            });

        $countdown = $("span[data-signout-timeleft]");
        timer      = $.timer(function () {

            // Output timer position
            $countdown.text(closeOn);

            // If timer is complete, trigger alert
            if (closeOn === 0) {
                timer.stop();
                self.close();
                return;
            }

            // Increment timer position
            closeOn -= 1;
            if (closeOn < 0) { closeOn = 0;}

        }, 1000, true);

        // timeout.done($.proxy(this.close, this));
    };

    SignOut.prototype.close = function () {
        $.request('onLogout');
    };

    // SIGNOUT PLUGIN DEFINITION
    // ============================

    var old = $.signOut;

    $.signOut = function (option) {
        var options = $.extend({}, SignOut.DEFAULTS, typeof option === 'object' && option);
        return new SignOut(options);
    };

    $.signOut.Constructor = SignOut;

    // SIGNOUT NO CONFLICT
    // =================

    $.signOut.noConflict = function () {
        $.signOut = old;
        return this;
    };

}(window.jQuery);


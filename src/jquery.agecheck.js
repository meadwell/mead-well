/*
 * Plugin: ageCheck.js
 * Description: A simple plugin to verify user's age.
 * Uses sessionStorage/localStorage API to store if user is verified.
 * Options can be passed for easy customization.
 * Author: Michael Soriano
 * Author's website: http://michaelsoriano.com
 *
 */

(function ($) {
  $.ageCheck = function (options) {
    const settings = $.extend({
      redirectTo: 'index.html',
      redirectOnFail: 'index.html',
      title: 'Are you of legal drinking age?',
      copy: '',
      success: null,
      successMsg: {
        header: "Proceed...",
        body: ''
      },
      underAgeMsg: "Nice try, shortie.",
      underAge: null,
      storage: 'sessionStorage',
      storageExpires: null,
    }, options);

    var storage = window[settings.storage];

    const _this = {

      errors: [],

      validate() {
        _this.clearErrors();
        _this.displayErrors();
        return _this.errors.length < 1;
      },

      clearErrors() {
        $('.errors').html('');
      },

      displayErrors() {
        let html = '<ul>';
        for (let i = 0; i < _this.errors.length; i++) {
          html += `<li><span>x</span>${_this.errors[i]}</li>`;
        }
        html += '</ul>';
        setTimeout(() => {
          $('.ac-container .errors').html(html);
        }, 200);
      },

      reCenter(b) {
        b.css('top', `${Math.max(0, (($(window).height() - (b.outerHeight() + 150)) / 2))}px`);
        b.css('left', `${Math.max(0, (($(window).width() - b.outerWidth()) / 2))}px`);
      },

      buildHtml() {
        const copy = settings.copy;
        let html = '';
        html += '<div class="ac-overlay"></div>';
        html += '<div class="ac-container">';
        html += '<div class="ac-wrapper">';
        html += `<h2>${settings.title}</h2>`;
        html += `<p>${copy.replace('[21]', `<strong>${settings.minAge}</strong>`)}` + '</p>';
        html += '<div class="errors"></div>';
        html += '<input id="yes" type="submit" name="yes" value="Yes" ;"/>';
        html += '<input id="no" type="submit" name="no" value="No"/>';
        html += '</div></div>';

        $('body').append(html);

        $('.ac-overlay').animate({
          opacity: 0.8,
        }, 500, () => {
          _this.reCenter($('.ac-container'));
          $('.ac-container').css({
            opacity: 1,
          });
        });

        $('.ac-container .day, .ac-container .year').focus(function () {
          $(this).removeAttr('placeholder');
        });
      },

      getStorage() {
        if(settings.storage === 'cookie') {
          return document.cookie.split(';').filter((item) => item.trim().startsWith('ageVerified=')).length;
        } else {
          return storage.getItem('ageVerified') === 'true';
        }
      },

      setStorage(key, val, expires) {
        try {
          if(settings.storage === 'cookie') {
            if(expires) {
              let date = new Date();
              date.setTime(date.getTime() + (expires * 24 * 60 * 60 * 1000));
              expires = date.toGMTString();
            }
            document.cookie = "ageVerified=true; expires=" + expires + ";";
          } else {
            storage.setItem(key, val);
          }
          return true;
        } catch (e) {
          return false;
        }
      },

      handleSuccess() {
        const successMsg = `<div class="ac-wrapper"><h3>${settings.successMsg.header}</h3><p>${settings.successMsg.body}</p></div>`;
        $('.ac-container').html(successMsg);
        setTimeout(() => {
          $('.ac-container').animate({
            top: '-450px',
          }, 200, () => {
            $('.ac-overlay').animate({
              opacity: '0',
            }, 500, () => {
              if (settings.redirectTo !== '') {
                window.location.replace(settings.redirectTo);
              } else {
                $('.ac-overlay, .ac-container').remove();
                if (settings.success) {
                  settings.success();
                }
              }
            });
          });
        }, 2000);
      },

      handleUnderAge() {
        const underAgeMsg = `<div class="ac-wrapper"><h3 style="color:black;">${settings.underAgeMsg}</h3></div>`;
        $('.ac-container').html(underAgeMsg);
        if (settings.redirectOnFail !== '') {
          setTimeout(() => {
            window.location.replace(settings.redirectOnFail);
          }, 2000);
        }
        if (settings.underAge) {
          settings.underAge();
        }
      },
    }; // end _this

    if (_this.getStorage()) {
      return false;
    }

    _this.buildHtml();

    document.getElementById("yes").onclick = function() {
      console.log("yes clicked")
      if (!_this.setStorage('ageVerified', 'true', settings.storageExpires)) {
        console.log(settings.storage + ' not supported by your browser');
      }
      _this.handleSuccess();
    }

    document.getElementById("no").onclick = function() {
      console.log("no clicked")
      _this.handleUnderAge();
    }

    $(window).resize(() => {
      _this.reCenter($('.ac-container'));
      setTimeout(() => {
        _this.reCenter($('.ac-container'));
      }, 500);
    });
  };
}(jQuery));

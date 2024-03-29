    <div id="xenid" class="t-input-block">
      <input type="tel" data-phonemask-id="id" data-phonemask-maskcountry="tr" class="t-input js-phonemask-input" value="">
      <script type="text/javascript">
        if (!document.getElementById('t-phonemask-script')) {
          (function(d, w, o) {
            var n = d.getElementsByTagName(o)[0],
              s = d.createElement(o),
              f = function() {
                n.parentNode.insertBefore(s, n);
              };
            s.type = "text/javascript";
            s.async = true;
            s.id = 't-phonemask-script';
            s.src = "/phone-mask.min.js";
            if (w.opera == "[object Opera]") {
              d.addEventListener("DOMContentLoaded", f, false);
            } else {
              f();
            }
          })(document, window, 'script');
        } else {
          t_onReady(function() {
            t_onFuncLoad('t_form_phonemask_load', function() {
              var phoneMasks = document.querySelectorAll('#xenid');
              t_form_phonemask_load(phoneMasks);
            });
          });
        }
      </script>
    </div>

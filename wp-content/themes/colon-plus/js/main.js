!(function () {
    "use strict";
    document.addEventListener("DOMContentLoaded", function (e) {
        var hdw = document.querySelectorAll('.hd-bar-wrapper')[0];
        var hdb = hdw.getElementsByTagName("button")[0];
        hdb.setAttribute('id', 'qb-close-button');
        
        var hdn = hdw.querySelectorAll('ul.navigation .menu-item');      
        if(hdn.length!=0) {
           var ln= hdn[hdn.length - 1].getElementsByTagName('a')[0];
            ln.addEventListener("focusout", function () {
                document.getElementById('qb-close-button').focus();
            });
        }

        // place this line in the dialog show function - to only add the listener when the dialog is shown
        window.addEventListener('keydown', handleKey);

        function handleKey(e) {
            if (e.keyCode === 9) {
                let focusable = document.querySelector('#hd-left-bar').querySelectorAll('button,li > a');
                if (focusable.length) {
                    //let first = focusable[0];
                    let first = document.getElementById('qb-close-button');
                    let last = focusable[focusable.length-1];
                    let shift = e.shiftKey;
                    if (shift) {                       
                        if (e.target === first) { // shift-tab pressed on first input in dialog
                            last.focus();  
                            e.preventDefault();
                        }
                        if (e.target === last) { // tab pressed on last input in dialog
                            first.focus();                           
                            e.preventDefault();
                        }
                    }
                }
            }
        }
    });
})();


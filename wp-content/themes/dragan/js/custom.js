var menuRight = document.getElementById('cbp-spmenu-s2'),

    showRight = document.getElementById('showRight'),

    showRightPush = document.getElementById('showRightPush'),

    body = document.body;

showRight.onclick = function () {

    classie.toggle(this, 'active');

    classie.toggle(menuRight, 'cbp-spmenu-open');

    disableOther('showRight');

};

function disableOther(button) {

    if (button !== 'showRight') {

        classie.toggle(showRight, 'disabled');

    }

} 
document.addEventListener("DOMContentLoaded", function (event) {

    $(document).ready(function () {
        // min width 768 : click sidebar -> expand/collapse
        $('.expand-collapse-sidebar').click(function (e) {
            e.preventDefault();
            $('.show').toggleClass('expanded');

            const sidebarIcon = $('.expand-collapse-sidebar i');
            const sidebarText = $('.expand-collapse-sidebar span');

            if ($('.show').hasClass('expanded')) {
                $('.expand-collapse-sidebar').css('padding-left', '150px');
                sidebarIcon.removeClass('fa-bars').addClass('fa-xmark');
                sidebarText.text('Collapse Sidebar');
            } else {
                $('.expand-collapse-sidebar').css('padding-left', '0px');
                sidebarIcon.removeClass('fa-xmark').addClass('fa-bars');
                sidebarText.text('Expand Sidebar');
            }
        });


    });

    // old code
    /*===== LINK ACTIVE =====*/
    const linkColor = document.querySelectorAll('.nav_link')

    function colorLink() {
        if (linkColor) {
            linkColor.forEach(l => l.classList.remove('active'))
            this.classList.add('active')
        }
    }
    linkColor.forEach(l => l.addEventListener('click', colorLink))

    // Your code to run since DOM is loaded and ready
});
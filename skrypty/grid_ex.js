 $(function() {
        $(document).on('click', '.grid-test [class^=col-] strong', function(e) {
            e.stopPropagation();
            var i = 0;
            var $parent = $(this).parent();
            while (!$parent.hasClass('grid-test-node')) {
                $parent = $parent.parent();
                i++;
            }
            if (i>=7) {
                alert('Dobra dobra, nie przesadzajmy :)');
                return false;
            }
            $(this).parent().append(
                    '<div class="grid-test">' +
                            '<div class="col-1-2"><strong></strong></div>' +
                            '<div class="col-1-2"><strong></strong></div>' +
                    '</div>');
        });
    });    
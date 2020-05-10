document.addEventListener('DOMContentLoaded', function() {
    var options = {
        data:
        {
            "Naruto Shippuden": 'http://project-animes.herokuapp.com/covers/naruto-shippuden/naruto-cover.jpg',
        },
        minLength: 2,
        onAutocomplete: function (res) {
            switch (res)
            {
                case 'Naruto Shippuden':
                    window.location.href = window.location.protocol + '/naruto-shippuden/episodes/1';
                break;
            }
        }
    };
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);

    //dropdown mobile
    var elems = document.querySelectorAll('.dropdown-trigger');
    var options =
        {
            constrainWidth: false,
            closeOnClick: false
        };
    var instances = M.Dropdown.init(elems, options);

});

document.addEventListener('DOMContentLoaded', function() {
    var options = {
        data:
        {
            "Naruto Shippuden": window.location.hostname + 'covers/naruto-shippuden/naruto-cover.jpg',
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
});

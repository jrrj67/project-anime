document.addEventListener('DOMContentLoaded', function() {
    var options = {
        data:
        {
            "Naruto Shippuden": 'http://127.0.0.1:8000/covers/naruto-cover.jpg',
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

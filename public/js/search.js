document.addEventListener('DOMContentLoaded', function() {
    var options = {
        data:
        {
            "Naruto Shippuden": null,
        },
        minLength: 2
    };
    var elems = document.querySelectorAll('.autocomplete');
    var instances = M.Autocomplete.init(elems, options);
});

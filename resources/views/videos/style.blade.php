<style>
    .playBtn
    {
        opacity: 0;
    }

    .playBtn:hover
    {
        opacity: 100;
    }

    <?php
    function setCover($episode, $img)
    {
        $path = asset("covers/$img.png");

        echo '.' . $episode .
            '{
                background-image: url('.$path.');
                background-size: cover;
    }';
    }

    setCover('ep1', 1);
    setCover('ep2', 2);
    setCover('ep3', 3);
    setCover('ep4', 4);
    setCover('ep5', 5);
    setCover('ep6', 6);
    setCover('ep7', 7);
    setCover('ep8', 8);
    setCover('ep9', 9);
    setCover('ep10', 10);
    setCover('ep11', 11);
    setCover('ep12', 12);
    ?>

</style>

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
        $path = asset("https://animesorion.vip/wsx/ep/naruto-shippuuden-episodio-$img-animes-orion.jpg");

        echo '.' . $episode .
            '{
                background-image: url('.$path.');
                background-size: cover;
    }';
    }

    for ($i = 0; $i <= 500; $i++)
    {
        setCover('ep' . $i, $i);
    }

    ?>

</style>

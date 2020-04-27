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
?>

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
    setCover('ep1', 1);
    setCover('ep2', 2);
    setCover('ep3', 3);
    setCover('ep4', 4);
    ?>

</style>

<?php
$monday='{
         "1":"maths","2":"science","3":"social","4":"english","5":"tamil",
         "6":"social","7":"maths","8":"english"
}';
$tuesday='{
    "1":"maths","2":"science","3":"maths","4":"social","5":"tamil",
    "6":"social","7":"maths","8":"english"
}';
$wednesday='{
    "1":"english","2":"english","3":"social","4":"science","5":"tamil",
    "6":"social","7":"maths","8":"tamil"
}';
$thursday='{
    "1":"maths","2":"science","3":"social","4":"english","5":"tamil",
    "6":"social","7":"maths","8":"drill"
}';
$friday='{
    "1":"maths","2":"science","3":"english","4":"english","5":"tamil",
    "6":"tamil","7":"drill","8":"english"
}';
$saturday='{
    "1":"social","2":"science","3":"maths","4":"english","5":"tamil",
    "6":"social","7":"maths","8":"drill"
}';
$mdata=json_decode($monday,true);
$tdata=json_decode($tuesday,true);
$wdata=json_decode($wednesday,true);
$thdata=json_decode($thursday,true);
$fdata=json_decode($friday,true);
$sdata=json_decode($saturday,true);
?>
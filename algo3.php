<?php













function getCost($volume)
{
    $prix = 0;

    if ($volume <=100) {
        $prix = $volume*1;
        return $prix;
    }

    if ($volume <=150) {
        $prix = (1*100) + (0.98*($volume-100));
        return $prix;
    }
    if ($volume <=175) {
        $prix = (1*100) + (0.98*50) + (0.95*($volume-150));
        return $prix;
    }
    if ($volume <=200) {
        $prix = (1*100) + (0.98*50) + (0.95*25) + (0.90*($volume-175));
        return $prix;
    }
    if ($volume >=500) {

    }
}

var_dump(getCost(125));
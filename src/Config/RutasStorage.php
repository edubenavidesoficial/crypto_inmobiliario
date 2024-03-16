<?php

namespace Src\Config;



enum RutasStorage: string
{

    case FOTOS_IDENTIFICACION_FRONTAL = 'public/fotos_identificacion_frontal';
    case FOTOS_IDENTIFICACION_POSTERIOR = 'public/fotos_identificacion_posterior';
    case FOTOS_CATEGORY = 'public/fotos_categoria';

}

<?php

namespace Elva\Common\Lib\Enums\Vendor\Integration;

use Elva\Common\Lib\Enums\Traits\Arrayable;

enum IntegrationType: string
{
    use Arrayable;

    case BOSCH_HOMECOM_PRO_API = 'BOSCH_HOMECOM_PRO_API';
    case BOSCH_PARTNER_API = 'BOSCH_PARTNER_API';
    case NIBE_MYUPLINK_API = 'NIBE_MYUPLINK_API';
    case VIESSMANN_VIGUIDE_API_CSRF = 'VIESSMANN_VIGUIDE_API_CSRF';
    case VIESSMANN_VIGUIDE_API_OAUTH = 'VIESSMANN_VIGUIDE_API_OAUTH';
}

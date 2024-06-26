<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule1;
use Fisharebest\Localization\Territory\TerritoryIt;

/**
 * Class LanguageEn - Representation of the English language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageSc extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'sc';
    }

    public function defaultTerritory()
    {
        return new TerritoryIt();
    }

    public function pluralRule()
    {
        return new PluralRule1();
    }
}

<?php

namespace Fisharebest\Localization\Language;

use Fisharebest\Localization\PluralRule\PluralRule2;
use Fisharebest\Localization\Territory\TerritorySn;

/**
 * Class LanguageFf - Representation of the Fulah language.
 *
 * @author    Greg Roach <greg@subaqua.co.uk>
 * @copyright (c) 2022 Greg Roach
 * @license   GPL-3.0-or-later
 */
class LanguageFf extends AbstractLanguage implements LanguageInterface
{
    public function code()
    {
        return 'ff';
    }

    public function defaultTerritory()
    {
        return new TerritorySn();
    }

    public function pluralRule()
    {
        return new PluralRule2();
    }
}

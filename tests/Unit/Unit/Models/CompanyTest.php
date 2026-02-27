<?php

namespace Tests\Unit\Unit\Models;

use App\Modules\Company\Models\Company;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class CompanyTest extends TestCase
{
    /**
     * Test that getLogoPathAttribute returns the default logo URL when logo_path is null.
     * @return void
     */
     #[Test]
    function it_returns_default_logo_url_when_logo_path_is_null(): void
    {
        //Arrange - Arranque}
        $company = new Company([
            'logo_path' => null,
        ]);
        //Act - Acción
        $logoUrl = $company->getLogoPathAttribute();
        //Assert - Afirmación
        $this->assertEquals(   'images/default-logo.png', $logoUrl);
    }
}

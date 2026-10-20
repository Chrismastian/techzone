<?php

namespace Tests\Feature;

use Tests\TestCase;

/**
 * The three footer information pages are static content, so the only thing that
 * can break them is a missing route or a moved view. One check per page.
 */
class InfoPagesTest extends TestCase
{
    public static function pages(): array
    {
        return [
            'about'        => ['/about'],
            'how to order' => ['/how-to-order'],
            'privacy'      => ['/privacy'],
        ];
    }

    /**
     * @dataProvider pages
     */
    public function test_information_page_renders(string $url): void
    {
        $this->get($url)
            ->assertOk()
            ->assertSee('TechZone');
    }

    public function test_footer_links_to_information_pages(): void
    {
        $this->get('/cart')->assertSee('/about')->assertSee('/how-to-order')->assertSee('/privacy');
    }
}

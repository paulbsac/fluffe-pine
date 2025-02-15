<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasSkp22Endpoint
{
    public function getSkp22Id(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp22/id/{idRiwayatSkp}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postSkp22Save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp22/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}

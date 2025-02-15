<?php

namespace Kanekescom\Siasn\Api\Simpeg\Traits;

use Illuminate\Http\Client\Response;
use Kanekescom\Siasn\Api\Simpeg\Helpers\UrlParser;

trait HasSkpEndpoint
{
    public function getSkpId(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp/id/{idRiwayatSkp}';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postSkp2021Save(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp/2021/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->get($urlParsed, $query);
    }

    public function postSkpSave(array $paths = [], array $query = []): Response
    {
        $urlFormat = '/skp/save';
        $urlParsed = (new UrlParser($urlFormat))->parse($paths);

        return $this->post($urlParsed, $query);
    }
}

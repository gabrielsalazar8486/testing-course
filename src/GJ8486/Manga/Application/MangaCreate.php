<?php

namespace Medine\GJ8486\Manga\Application;

use Medine\GJ8486\Manga\Domain\Manga;
use Medine\GJ8486\Manga\Domain\MangaPersistence;

class MangaCreate
{
    private $mangaPresistence;

    public function __construct(MangaPersistence $mangaPresistence)
    {
        $this->mangaPresistence = $mangaPresistence;
    }

    public function __invoke(array $request)
    {
        $manga = Manga::create($request['id'], $request['nombre'], $request['autor'], $request['estado']);
        return $this->mangaPresistence->save($manga);
    }
}

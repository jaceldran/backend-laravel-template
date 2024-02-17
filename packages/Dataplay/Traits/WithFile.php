<?php

namespace Packages\Dataplay\Traits;

trait WithFile
{
    private string $path;

    public function setPath(string $path): static
    {
        $this->path = $path;

        return $this;
    }

    public function getPath(): string
    {
        return $this->path;
    }
}

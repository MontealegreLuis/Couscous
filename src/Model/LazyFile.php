<?php

namespace Couscous\Model;

/**
 * Generic implementation that reads a file lazily.
 *
 * @author Matthieu Napoli <matthieu@mnapoli.fr>
 */
class LazyFile extends File
{
    private $fullFilename;

    public function __construct($fullFilename, $relativeFilename)
    {
        $this->fullFilename     = $fullFilename;
        $this->relativeFilename = $relativeFilename;
    }

    public function getContent()
    {
        return file_get_contents($this->fullFilename);
    }

    public function getMetadata()
    {
        return new Metadata();
    }
}

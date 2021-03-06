<?php

namespace Devmachine\MongoImport\Exception;

class ImportException extends \RuntimeException
{
    /**
     * @param string $err
     *
     * @return static
     */
    public static function fromServerError($err)
    {
        return new static(sprintf('Unable to import data: %s', $err));
    }
}

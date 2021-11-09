<?php
/**
 * Copyright © Thomas Klein, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);
 /**fkgfjgfkjgfkgj */  

namespace Zoho\Desk\Model;

use function json_encode;

abstract class AbstractDataObject implements DataObjectInterface
{
    protected string $entityIdFieldName;

    protected array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    final public function toArray(): array
    {
        return $this->data;
    }

    final public function toJson(): string
    {
        return json_encode($this->data);
    }

    final public function getEntityId(): ?int
    {
        return isset($this->data[$this->entityIdFieldName]) ? (int) $this->data[$this->entityIdFieldName] : null;
    }
}

<?php
declare(strict_types=1);

namespace Swagger\V30\Schema;

class Example
{
    /**
     * @var string
     */
    protected $summary;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @var string
     */
    protected $externalValue;

    /**
     * @return string
     */
    public function getSummary(): string
    {
        return $this->summary;
    }

    /**
     * @param string $summary
     *
     * @return self
     */
    public function setSummary(string $summary): self
    {
        $this->summary = $summary;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     *
     * @return self
     */
    public function setValue($value): self
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @return string
     */
    public function getExternalValue(): string
    {
        return $this->externalValue;
    }

    /**
     * @param string $externalValue
     *
     * @return self
     */
    public function setExternalValue(string $externalValue): self
    {
        $this->externalValue = $externalValue;
        return $this;
    }
}

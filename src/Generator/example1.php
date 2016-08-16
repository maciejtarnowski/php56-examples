<?php

// https://secure.php.net/manual/en/language.generators.overview.php
function xrange($start, $limit, $step = 1)
{
    if ($start < $limit) {
        if ($step <= 0) {
            throw new LogicException('Step must be +ve');
        }

        for ($i = $start; $i <= $limit; $i += $step) {
            yield $i;
        }
    } else {
        if ($step >= 0) {
            throw new LogicException('Step must be -ve');
        }

        for ($i = $start; $i >= $limit; $i += $step) {
            yield $i;
        }
    }
}

class XrangeIterator implements Iterator
{
    /**
     * @var int
     */
    private $start;

    /**
     * @var int
     */
    private $limit;

    /**
     * @var int
     */
    private $step;

    /**
     * @var int
     */
    private $currentElementIndex = 0;

    /**
     * @param int $start
     * @param int $limit
     * @param int $step
     */
    public function __construct($start, $limit, $step = 1)
    {
        if ($start < $limit) {
            if ($step <= 0) {
                throw new LogicException('Step must be +ve');
            }
        } else {
            if ($step >= 0) {
                throw new LogicException('Step must be -ve');
            }
        }

        $this->start = $start;
        $this->limit = $limit;
        $this->step = $step;
    }

    /**
     * Return the current element
     * @link http://php.net/manual/en/iterator.current.php
     * @return mixed Can return any type.
     * @since 5.0.0
     */
    public function current()
    {
        return $this->start + ($this->currentElementIndex * $this->step);
    }

    /**
     * Move forward to next element
     * @link http://php.net/manual/en/iterator.next.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function next()
    {
        $this->currentElementIndex++;
    }

    /**
     * Return the key of the current element
     * @link http://php.net/manual/en/iterator.key.php
     * @return mixed scalar on success, or null on failure.
     * @since 5.0.0
     */
    public function key()
    {
        return $this->currentElementIndex;
    }

    /**
     * Checks if current position is valid
     * @link http://php.net/manual/en/iterator.valid.php
     * @return boolean The return value will be casted to boolean and then evaluated.
     * Returns true on success or false on failure.
     * @since 5.0.0
     */
    public function valid()
    {
        return $this->current() <= $this->limit;
    }

    /**
     * Rewind the Iterator to the first element
     * @link http://php.net/manual/en/iterator.rewind.php
     * @return void Any returned value is ignored.
     * @since 5.0.0
     */
    public function rewind()
    {
        $this->currentElementIndex = 0;
    }
}

foreach (range(1, 10, 1) as $key => $item) {
    echo $key . ' => ' . $item . PHP_EOL;
}

echo str_repeat('- ', 10) . PHP_EOL;

foreach (xrange(1, 10, 1) as $key => $item) {
    echo $key . ' => ' . $item . PHP_EOL;
}

echo str_repeat('- ', 10) . PHP_EOL;

$xrangeIterator = new XrangeIterator(1, 10, 1);

foreach ($xrangeIterator as $key => $item) {
    echo $key . ' => ' . $item . PHP_EOL;
}

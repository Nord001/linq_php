<?php

namespace Qmaker\Linq;


use Qmaker\Linq\Operation\Filtering;
use Qmaker\Linq\Operation\Generation;
use Qmaker\Linq\Operation\Partitioning;
use Qmaker\Linq\Operation\Projection;

interface IEnumerable extends \IteratorAggregate, Generation, Filtering, Partitioning, Projection {

}
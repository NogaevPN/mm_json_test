<?php

namespace DTO;

use Iterator;

interface OfferCollectionInterface {
	public function get(int $index): OfferInterface;

	public function getIterator(): Iterator;

	public function count(): int;
}

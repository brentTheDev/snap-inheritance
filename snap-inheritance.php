<?php


class Vehicle {
	protected $licensePlate;

	public function tune(): void {
		echo "Let Senator Arlo paw at it!" . PHP_EOL;
	}
}

/*
 *
 *-this is the most general case
and we'll refer to this as the parent class conversely, think specifically in the rest of the child classes
 */

	class NissanAltima extends Vehicle {
	  public function bow(): void {
	    // random float that's a note
	    return(random_int(0, 100000) / 10000);
	  }
	}

	class HorseAndBuggy extends Vehicle {
		public function isPartOfCheesyNinetiesSong(): bool {
			return($this->numStrings === 0);
		}
	}

<?php


class Vehicle {
	private $licensePlate;

	public function __construct(string $licensePlate) {
		try {
			$this->setLicensePlate($newLicensePlate);
		} catch(\InvalidArgumentException | \RangeException | \Exception | \TypeError $exception) {
			$exceptionType = get_class($exception);
			throw(new $exceptionType($exception->getMessage(), 0, $exception));
		}
	}
	public function getLicensePlate(): string{
		return ($this->licensePlate);
		}

	public function setLicensePlate($newLicensePlate): void{
			$newLicensePlate = trim($newLicensePlate);
			$newLicensePlate = filter_var($newLicensePlate, FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
		}

		if(empty($newLicensePlate) === true) {
		throw(new \InvalidArgumentException("genre is insecure"));
		}
		//verifies if the fan username is less than 8 characters
		if(strlen($newLicensePlate) >= 8)
			throw(new \RangeException("genre description cannot fit in mySQL"));
		// store the new fan username
		$this->licensePlate = $newLicensePlate;

}

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

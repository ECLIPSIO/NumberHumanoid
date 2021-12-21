<?php
namespace Classes;
/**
 * Conver A number to Human readable symbole
 * Like 1.2K, 2M, 3.2B etc
 * @author ECLIPSIO
 * @version 1.0.0
 */
class NumberHumanoid
{
	private $num = 0;
	private $precision = 2;

    /**
     * Output for Number
     * @return mixed Number Formatted
     */
	public $amt = '';

    /**
     * Range Identifier for Number Like K,M,B..
     * @return string Range Indentifier
     */
    public $exp = '';

    /**
     * String output for Number
     * @return string Number Formatted with Identifier
     */
    public $out = '';

	/**
	 * @param mixed $num Number for convert to symbole
	 * @param int $precision Float Points for Number Format
	 * @return void
	 */
	public function __construct($num, $precision = 2)
	{
		$this->divisor = [
			pow(1000, 0) => '', // 1000^0 == 1
            pow(1000, 1) => 'K', // Thousand
            pow(1000, 2) => 'M', // Million
            pow(1000, 3) => 'B', // Billion
            pow(1000, 4) => 'T', // Trillion
            pow(1000, 5) => 'Qa', // Quadrillion
            pow(1000, 6) => 'Qi', // Quintillion
		];
		$this->advance = [
			[
				'start'	=> 0,
				'end'		=> pow(1000,1) - 1,
				'expr'		=> ''
			],
			[
				'start'	=> pow(1000,1),
				'end'		=> pow(1000,2) - 1,
				'expr'		=> 'K'
			],
			[
				'start'	=> pow(1000,2),
				'end'		=> pow(1000,3) - 1,
				'expr'		=> 'M'
			],
			[
				'start'	=> pow(1000,3),
				'end'		=> pow(1000,4) - 1,
				'expr'		=> 'B'
			],
			[
				'start'	=> pow(1000,4),
				'end'		=> pow(1000,5) - 1,
				'expr'		=> 'T'
			],
			[
				'start'	=> pow(1000,5),
				'end'		=> pow(1000,6) - 1,
				'expr'		=> 'Qa'
			],
			[
				'start'	=> pow(1000,6),
				'end'		=> pow(1000,7) - 1,
				'expr'		=> 'Qi'
			],
		];
		$this->num = $num;
		$this->precision = $precision;
		$this->advanceExpr();
	}

	/**
	 * Calculate Advance Number Notation
	 * @return void
	 */
	private function advanceExpr(){
		foreach($this->advance as $expr){
			$divisor = $expr['start'];
			$short = $expr['expr'];
			if(abs($this->num) >= $expr['start'] AND abs($this->num) <= $expr['end']){
				break;
			}
		}

		if(($this->num % $divisor) === 0){
			$this->amt = (int)$this->num / $divisor;
		} else {
			$this->amt = number_format($this->num / $divisor, $this->precision);
		}
		$this->exp = $short;
		$this->out = $this->amt . $short;

	}

	
}

?>
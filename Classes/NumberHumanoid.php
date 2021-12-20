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
		$this->num = $num;
		$this->precision = $precision;
		$this->converToExpr();
		// return $this->expr;
	}

	private function converToExpr(){

		foreach($this->divisor as $devisor => $short){
			if( abs($this->num) < ($devisor * 100)){
				break;
			}
		}

		if(($this->num % $devisor) === 0){
			$this->amt = (int)$this->num / $devisor;
		} else {
			$this->amt = number_format($this->num / $devisor, $this->precision);
		}
		$this->exp = $short;
		$this->out = $this->amt . $short;

	}
}

?>
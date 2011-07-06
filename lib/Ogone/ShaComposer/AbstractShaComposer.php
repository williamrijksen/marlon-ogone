<?php
namespace Ogone\ShaComposer;

/**
 * Base class for SHA Composers
 */
abstract class AbstractShaComposer
{
	/**
	 * @var string
	 */
	protected $passphrase;
	
	/**
	 * @param string $passphrase
	 */
	public function __construct($passphrase)
	{
		$this->passphrase = (string) $passphrase;
	}

	/**
	 * Compose SHA string based on Ogone request parameters
	 * @param array $requestParameters
	 */
	public abstract function compose($requestParameters);
}
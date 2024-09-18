<?php

namespace Webapix\GLS\Requests;

use Webapix\GLS\Contracts\Response;
use Webapix\GLS\Responses\GetClientReturnAddress as GetClientReturnAddressResponse;

class GetClientReturnAddress extends Request
{
    /**
     * @var string
     */
    protected $endpoint = 'GetClientReturnAddress';

    /**
	 * @var string
	 */
	protected $clientNumber;

	/**
	 * @var string
	 */
	protected $name;

    /**
	 * @var int
	 */
	protected $linkTypeId;

    /**
	 * @var string
	 */
	protected $languageIsoCode;

	public function __construct(string $clientNumber, string $name, int $linkTypeId, string $languageIsoCode)
	{
		$this->clientNumber = $clientNumber;
		$this->name = $name;
		$this->linkTypeId = $linkTypeId;
		$this->languageIsoCode = $languageIsoCode;
	}

	public function makeResponse(?array $data): Response
	{
		return new GetClientReturnAddressResponse($data);
	}

	public function toArray(): array
	{
		return [
			'ClientNumber' => $this->clientNumber,
			'LinkTypeId' => $this->linkTypeId,
			'LanguageIsoCode' => $this->languageIsoCode,
			'Name' => $this->name,
		];
	}
}

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
	 * @var array
	 */
	protected $clientNumberList;

	public function __construct(string $clientNumber, array $clientNumberList = [])
	{
		$this->clientNumber = $clientNumber;
		$this->clientNumberList = $clientNumberList;
	}

    public function makeResponse(?array $data): Response
    {
        return new GetClientReturnAddressResponse($data);
    }
	
	public function toArray(): array
	{
		return [
			'ClientNumber' => $this->clientNumber,
			'ClientNumberList' => $this->clientNumberList,
		];
	}
}

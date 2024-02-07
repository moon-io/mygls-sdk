<?php

namespace Webapix\GLS\Responses;

use Webapix\GLS\Models\ReturnAddress;

class GetClientReturnAddress extends Response
{
    protected $errorKey = 'GetClientReturnAddressErrors';

	protected $returnAddress;
	
	public function returnAddress(): ReturnAddress
	{
		if (! $this->returnAddress) {
			$this->buildReturnAddress();
		}

		return $this->returnAddress;
	}

	protected function buildReturnAddress(): void
	{
		if (empty($this->data['ReturnAddress'])) {
			return;
		}

		$this->returnAddress = ReturnAddress::fromArray($this->data['ReturnAddress']);
	}
}

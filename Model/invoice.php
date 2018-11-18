<?php

class invoice 
{

	private $id;

	private $client;

	private $invoice_amount;

	private $invoice_amount_plus_vat;

	private $vat_rate;

	private $invoice_status;

	private $invoice_date;

	private $created_at;

	function __toString()
	{
		return $this->getClient();
	}

	/**
	* Get id
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* Set client
	*/
	public function setClient($client)
	{
		$this->client = $client;
		return $this;
	}

	/**
	* Get client
	*/
	public function getClient()
	{
		return $this->client;
	}

	/**
	* Set invoice_amount
	*/
	public function setInvoiceAmount($invoice_amount)
	{
		$this->invoice_amount = $invoice_amount;
		return $this;
	}

	/**
	* Get invoice_amount
	*/
	public function getInvoiceAmount()
	{
		return $this->invoice_amount;
	}

	/**
	* Set invoice_amount_plus_vat
	*/
	public function setInvoiceAmountPlusVat()
	{
		$this->invoice_amount_plus_vat = $this->invoice_amount * (($this->vat_rate / 100) + 1)
		return $this;
	}

	/**
	* Get invoice_amount_plus_vat
	*/
	public function getInvoiceAmountPlusVat()
	{
		return $this->invoice_amount_plus_vat;
	}

	/**
	* Set vat_rate
	*/
	public function setVatRate($vat_rate)
	{
		$this->vat_rate = $vat_rate;
		return $this;
	}

	/**
	* Get vat_rate
	*/
	public function getVatrate()
	{
		return $this->vat_rate;
	}

	/**
	* Set invoice_status
	*/
	public function setVatRate($invoice_status)
	{
		$this->invoice_status = $invoice_status;
		return $this;
	}

	/**
	* Get invoice_status
	*/
	public function getVatRate()
	{
		return $this->invoice_status;
	}

	/**
	* Set invoice_date
	*/
	public function setInvoiceDate($invoice_date)
	{
		$this->invoice_date = $invoice_date;
		return $this;
	}

	/**
	* Get invoice_date
	*/
	public function getInvoiceDate()
	{
		return $this->invoice_date;
	}

	/**
	* Set created_at
	*/
	public function setCreatedAt()
	{
		$this->created_at = date("Y-m-d H:i:s");
		return $this;
	}

	/**
	* Get created_at
	*/
	public function getCreatedAt()
	{
		return $this->created_at;
	}

}
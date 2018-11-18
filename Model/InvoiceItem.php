<?php

class invoice_item
{

	private $id;

	private $invoice_id;

	private $name;

	private $amount;

	private $created_at;

	public function __toString()
	{
		return $this->getName();
	}

	/**
	* Get id
	*/
	public function getId()
	{
		return $this->id;
	}

	/**
	* Set invoice_id
	*/
	public function setInvoiceId($invoice_id)
	{
		$this->invoice_id = $invoice_id;
		return $this;
	}

	/**
	* Get invoice_id
	*/
	public function getInvoiceId()
	{
		return $this->invoice_id;
	}

	/**
	* Set name
	*/
	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	/**
	* Get name
	*/
	public function getName()
	{
		return $this->name;
	}

	/**
	* Set amount
	*/
	public function setAmount($amount)
	{
		$this->amount = $amount;
		return $this;
	}

	/**
	* Get amount
	*/
	public function getAmount()
	{
		return $this->amount;
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
<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single product delivery associated to an order.
	*/
	class ESDRecordOrderProductDelivery   
	{
		/**
		* @var double Quantity of product units delivered
		*/
		public $quantity = 0;

		/**
		* @var int Date that the products were delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $deliveryDate = 0;

		/**
		* @var string Code of the invoice that the product delivery is associated with.
		*/
		public $invoiceCode = "";

		/**
		* @var string Code of the line in the invoice that the product delivery is associated with.
		*/
		public $invoiceLineCode = "";

		/**
		* @var string Code of the delivery. May or may not be a unique identifier
		*/
		public $deliveryCode = "";

		/**
		* @var string Code of the line in the delivery. May or may not be a unique identifier
		*/
		public $deliveryLineCode = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or  it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($this->invoiceCode == null)
			{
				$this->invoiceCode = "";
			}
			
			if ($this->invoiceLineCode == null)
			{
				$this->invoiceLineCode = "";
			}
			
			if ($this->deliveryCode == null)
			{
				$this->deliveryCode = "";
			}
			
			if ($this->deliveryLineCode== null)
			{
				$this->deliveryLineCode = "";
			}
			
			if ($this->internalID == null)
			{
				$this->internalID = "";
			}
		}
	}
?>
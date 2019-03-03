<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single line in a delivery notice record. The line indicates the quantity of a product that is being delivered, or in the process thereof.
	*/
	class ESDRecordDeliveryNoticeLine
	{
		/**
		* @var string Unique identifier of the delivery notice line.
		*/
		public $keyDeliveryNoticeLineID = "";

		/**
		* @var string Code of the line in the delivery. May or may not be a unique identifier. Contains a human known identifier of the delivery notice
		*/
		public $deliveryLineCode = "";

		/**
		* @var string Code of the invoice that the delivery is associated with. The code is the human known identifier of the invoice that the delivery line is associated to
		*/
		public $invoiceCode = "";

		/**
		* @var string Code of the line in the invoice that the product delivery is associated with. THe code is the human known identifier of the invoice line associated to this delivery notice line
		*/
		public $invoiceLineCode = "";
		
		/**
		* @var string Code of the line in the original purchase order associated to this delivery notice line
		*/
		public $purchaseOrderLineCode = "";

		/**
		* @var string number of the line in original purchase order associated to this delivery notice line
		*/
		public $purchaseOrderLineNumber = "";
		
		/**
		* @var string Key of the sell unit that indicates the kind of unit that the quantity being delivered is
		*/
		public $keySellUnitID = "";
		
		/**
		* @var string Key of the product record associated to the line. Specifies the product that is linked to the line being delivered
		*/
		public $keyProductID = "";

		/**
		* @var string Code the product in the line.
		*/
		public $productCode = "";

		/**
		* @var string name of the product in the line
		*/
		public $productName = "";
		
		/**
		* @var string Code of the customer's product that the line is associated to
		*/
		public $customerProductCode = "";
		
		/**
		* @var string Code of the supplier's product that the line is associated to
		*/
		public $supplierProductCode = "";
		
		/**
		* @var double quantity of the product's units being delivered
		*/
		public $quantityOnDelivery = 0.0;

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
		* constructor
		*/
		public function __construct()
		{
		}

		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($keyDeliveryNoticeLineID == null)
			{
				$this->keyDeliveryNoticeLineID = "";
			}
			
			if ($invoiceCode == null)
			{
				$this->invoiceCode = "";
			}
			
			if ($invoiceLineCode == null)
			{
				$this->invoiceLineCode = "";
			}
			
			if ($deliveryLineCode== null)
			{
				$this->deliveryLineCode = "";
			}
			
			if ($purchaseOrderLineCode== null)
			{
				$this->purchaseOrderLineCode = "";
			}
			
			if ($purchaseOrderLineNumber== null)
			{
				$this->purchaseOrderLineNumber = "";
			}
			
			if ($keySellUnitID== null)
			{
				$this->keySellUnitID = "";
			}
			
			if ($keyProductID== null)
			{
				$this->keyProductID = "";
			}
			
			if ($productCode== null)
			{
				$this->productCode = "";
			}
			
			if ($productName== null)
			{
				$this->productName = "";
			}
			
			if ($customerProductCode== null)
			{
				$this->customerProductCode = "";
			}
			
			if ($internalID == null)
			{
				$this->internalID = "";
			}
			
			if ($supplierProductCode == null)
			{
				$this->supplierProductCode = "";
			}
		}
	}
?>
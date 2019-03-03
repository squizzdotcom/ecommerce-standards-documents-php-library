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
	* Ecommerce Standard Record holding line data for a customer account credit enquiry
	*/
	class ESDRecordCustomerAccountEnquiryCreditLine   
	{
		/**
		* @var string Key that allows the customer account credit line record to be uniquely identified and linked to.
		*/
		public $keyCreditLineID = "";
		
		/**
		* @var string ID that allows the line to be identified with. May or may not be unique.
		*/
		public $lineItemID = "";
		
		/**
		* @var string Code that allows the line to be identified with. May or may not be unique.
		*/
		public $lineItemCode = "";
		
		/**
		* @var string Defines the type of data that the line represents. Set it to one of the constants prefixed with RECORD_LINE_TYPE_ in the ESDocumentCustomerAccountEnquiry class
		*/
		public $lineType = "";
		
		/**
		* @var string text to describe any details of the line.
		*/
		public $description = "";
		
		/**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
		public $language = "";
		
		/**
		* @var string label of the unit that any quantities set to the line represent.
		*/
		public $unit = "";
		
		/**
		* @var string Key of an entity that is linked to the credit as a reference. A Reference could be a record such as a sales order or invoice
		*/
		public $referenceKeyID = "";
		
		/**
		* @var string Type of entity that is linked to the credit as a reference.  A Reference could be a record such as a sales order or invoice
		*/
		public $referenceType = "";
		
		/**
		* @var string Number that provides a reference to the credit.
		*/
		public $referenceNumber = "";
		
		/**
		* @var double Quantity of the line.
		*/
		public $quantity = 0.0;
		
		/**
		* @var double monetary price for a single unit excluding tax amount.
		*/
		public $priceExTax = 0.0;
		
		/**
		* @var double monetary price for a single unit including tax amount.
		*/
		public $priceIncTax = 0.0;
		
		/**
		* @var double monetary price for the amount of tax applied to a single unit.
		*/
		public $priceTax = 0.0;
		
		/**
		* @var double monetary price for the total quantity of units excluding tax amount.
		*/
		public $totalPriceExTax = 0.0;
		
		/**
		* @var double monetary price for the total quantity of units including tax amount.
		*/
		public $totalPriceIncTax = 0.0;
		
		/**
		* @var double monetary price for the amount of tax applied to the total quantity of units.
		*/
		public $totalPriceTax = 0.0;
		
		/**
		* @var string tax code set for the line
		*/
		public $taxCode = "";
		
		/**
		* @var double pecentage amount associated with the taxcode that has been used to calculate the line tax.
		*/
		public $taxCodeRatePercent = 0.0;
		
		/**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored as in the line
		*/
		public $currencyCode = "";
		
		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;
		
		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
	}
?>
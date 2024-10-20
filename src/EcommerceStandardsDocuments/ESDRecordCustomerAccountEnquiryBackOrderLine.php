<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standard Record holding data for a customer account back order line
	*/
	class ESDRecordCustomerAccountEnquiryBackOrderLine   
	{
        /**
		* @var string Key that allows the customer account back order line record to be uniquely identified and linked to.
		*/
        public $keyBackOrderLineID = "";
        
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
		* @var string United Nations Standard Products and Service Code. Stores a standard code defined by the United Nations classifying objects.
		*/
        public $UNSPSC = "";
        
        /**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
        public $language = "";
        
        /**
		* @var string label of the unit that any quantities set to the line represent.
		*/
        public $unit = "";
        
        /**
		* @var double Quantity ordered for the line.
		*/
        public $quantityOrdered = 0.0;
        
        /**
		* @var double Quantity delivered for the line.
		*/
        public $quantityDelivered = 0.0;
        
        /**
		* @var double Quantity back ordered for the line.
		*/
        public $quantityBackordered = 0.0;

		/**
		* @var double Quantity available to fulfill on the quantity ordered line. This may be used to calculate a percentage of the line ordered in the line that is now available since the back order was first raised.
		*/
        public $quantityAvailable = 0.0;
        
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
		* @var string Key of the location record associated to the line.
		*/
        public $keyLocationID = "";
        
        /**
		* @var string Code of the location associated to the line.
		*/
        public $locationCode = "";
        
        /**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored as in the line
		*/
        public $currencyCode = "";
        
        /**
		* @var string Item code of a line that it may reference from another record
		*/
        public $referenceLineItemCode = "";
        
        /**
		* @var string Code of the line that it may reference from another record
		*/
        public $referenceLineCode = "";
		
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

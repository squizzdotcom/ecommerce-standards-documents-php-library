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
	* Details of a tax assigned to a invoice line within a Ecommerce Standards Document
	*/
	class ESDRecordInvoiceLineTax   
	{
		/**
		* @var string Key of the taxcode record that the invoice line tax record is linked to.
		*/
		public $keyTaxcodeID = "";

		/**
		* @var string Taxcode. May or may not be a unique identifier
		*/
		public $taxcode = "";

		/**
		* @var string Label of the taxcode
		*/
		public $taxcodeLabel = "";

		/**
		* @var double Numeric amount as a percentage rate that the taxcode applies to. Eg. if  to 10, then a 10% tax will be applied on top of the invoice line price.
		*/
		public $taxRate = 0.0;

		/**
		* @var string Language that the descriptive text of the line is set in. Set it to a constant prefixed with LANG_ in the ESDocumentConstants class
		*/
		public $language = "";

		/**
		* @var double Number of units that the tax applies to
		*/
		public $quantity = 0.0;

		/**
		* @var double Monetary amount of tax priced for each unit
		*/
		public $priceTax = 0.0;

		/**
		* @var double Monetary amount of tax priced for the total quantity of units
		*/
		public $priceTotalTax = 0.0;

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
		* Constructor
		*/
		public function __construct()
		{
		}

		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($taxcodeLabel == null)
			{
				$this->taxcodeLabel = "";
			}
			
			if ($keyTaxcodeID == null)
			{
				$this->keyTaxcodeID = "";
			}
			
			if ($taxcode == null)
			{
				$this->taxcode = "";
			}
			
			if ($language == null)
			{
				$this->language = "";
			}
			
			if ($internalID == null)
			{
				$this->internalID = "";
			}
		}
	}
?>
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
	* Details of a surcharge assigned to a payment record within a Ecommerce Standards Document
	*/
	class ESDRecordPaymentSurcharge
	{
		/**
		* @var ESDRecordPaymentTax[] List of tax records applied to the surcharge.
		*/
		public $taxes = array();

		/**
		* @var string Key of the surcharge record that the customer account payment surcharge record is linked to.
		*/
		public $keySurchargeID = "";

		/**
		* @var string Code of the surcharge. May or may not be a unique identifier
		*/
		public $surchargeCode = "";

		/**
		* @var string Label of the surcharge
		*/
		public $surchargeLabel = "";

		/**
		* @var string Text description of the surcharge
		*/
		public $surchargeDescription = "";

		/**
		* @var string Language that the descriptive text of the surcharge is in. Set it to a constant prefixed with LANG_ in the ESDocumentConstants class
		*/
		public $language = "";

		/**
		* @var double Monetary price of the surcharge, excluding tax.
		*/
		public $priceExTax = 0.0;

		/**
		* @var double Monetary price of the surcharge, including tax.
		*/
		public $priceIncTax = 0.0;

		/**
		* @var double Monetary price of the tax applied to the surcharge
		*/
		public $priceTax = 0.0;

		/**
		* @var double Monetary price of the surcharge before any discounting was applied, exclusive of tax.
		*/
		public $priceUndiscountedExTax = 0.0;

		/**
		* @var double Monetary price of the surcharge before any discounting was applied, inclusive of tax.
		*/
		public $priceUndiscountedIncTax = 0.0;

		/**
		* @var double Monetary price of tax applied the surcharge before any discounting was applied.
		*/
		public $priceUndiscountedTax = 0.0;

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($this->taxes == null)
			{
				$this->taxes = array();
			}
			else
			{
				foreach($this->taxes as $tax)
				{
					$tax->setDefaultValuesForNullMembers();
				}
			} 
			if ($this->keySurchargeID == null)
			{
				$this->keySurchargeID = "";
			}
			
			if ($this->surchargeCode == null)
			{
				$this->surchargeCode = "";
			}
			
			if ($this->surchargeLabel == null)
			{
				$this->surchargeLabel = "";
			}
			
			if ($this->surchargeDescription == null)
			{
				$this->surchargeDescription = "";
			}
			
			if ($this->language == null)
			{
				$this->language = "";
			}
			
			if ($this->internalID == null)
			{
				$this->internalID = "";
			}
		}
	}
?>
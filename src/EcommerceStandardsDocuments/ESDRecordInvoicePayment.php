<?php
	/**
	* Copyright (C) 2019 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single payment associated to an invoice.
	*/
	class ESDRecordInvoicePayment   
	{
		/**
		* @var string Method on how the payment was made. The field must be set to one of the class's constants prefixed by PAYMENT_METHOD_ within the ESDocument CONSTANTS
		*/
		public $paymentMethod = "";
		/**
		* @var double Monetary amount the payment applies to
		*/
		public $paymentAmount = 0.0;
		/**
		* @var string Receipt number associated to the payment.
		*/
		public $paymentReceipt = "";
		/**
		* @var string Code the proprietary system that is used as the payment method.
		*/
		public $paymentProprietaryCode = "";

		/**
		* @var string Key of the payment type record that is assigned to the payment. The payment type record indicates how the payment was made.
		*/
		public $keyPaymentTypeID = "";
		
		/**
		* @var int Date that the payment was made. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $paidDate = 0;

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
			if ($paymentMethod == null)
			{
				$this->paymentMethod = "";
			}
			
			if ($paymentReceipt == null)
			{
				$this->paymentReceipt = "";
			}
			
			if ($paymentProprietaryCode== null)
			{
				$this->paymentProprietaryCode = "";
			}
			
			if ($keyPaymentTypeID== null)
			{
				$this->keyPaymentTypeID = "";
			}
			
			if ($internalID== null)
			{
				$this->internalID = "";
			}
		}
	}
?>
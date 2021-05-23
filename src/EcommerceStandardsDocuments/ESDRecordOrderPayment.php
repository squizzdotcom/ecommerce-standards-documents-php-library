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
	* Ecommerce Standards Record that holds data for a single payment associated to an order.
	*/
	class ESDRecordOrderPayment   
	{
		/**
		* @var string Method on how the payment was made. The field must be  to one of the class's constants prefixed by PAYMENT_METHOD_
		*/
		public $paymentMethod = "";
		
		/**
		* @var double Monetary amount the payment applies to
		*/
		public $paymentAmount = 0;
		
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
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or  it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* s default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($this->paymentMethod == null)
			{
				$this->paymentMethod = "";
			}
			
			if ($this->paymentReceipt == null)
			{
				$this->paymentReceipt = "";
			}
			
			if ($this->paymentProprietaryCode== null)
			{
				$this->paymentProprietaryCode = "";
			}
			
			if ($this->keyPaymentTypeID== null)
			{
				$this->keyPaymentTypeID = "";
			}
			
			if ($this->internalID== null)
			{
				$this->internalID = "";
			}
		}
	}
?>
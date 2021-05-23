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
	* Ecommerce Standards record that contains the data of a single Payment that can be queried for a customer account. A payment record contains information about a positive monetary amount paid to the customer account's balance. The account enquiry aspect denotes that the record may be queried in real time and contain additional information associated with the record.
	*/
	class ESDRecordCustomerAccountEnquiryPayment   
	{
		/**
		* @var string Key that allows the customer account payment record to be uniquely identified and linked to.
		*/
		public $keyPaymentID = "";
		/**
		* @var string ID that allows the payment to be identified with. May or may not be unique.
		*/
		public $paymentID = "";
		/**
		* @var string Number that is associated to the payment. This number can be used for referencing purposes.
		*/
		public $paymentNumber = "";
		/**
		* @var string Key of the customer account record assigned to the payment.
		*/
		public $keyCustomerAccountID = "";
		/**
		* @var string Code of the customer account assigned to the payment.
		*/
		public $customerAccountCode = "";
		/**
		* @var int Date that the payment record was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $creationDate = 0;
		/**
		* @var int Date set to the payment. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $paymentDate = 0;
		/**
		* @var string Key of an entity that is linked to the payment as a reference. A Reference could be an ID of a record such as a sales order or invoice
		*/
		public $referenceKeyID = "";
		/**
		* @var string Type of entity that is linked to the payment as a reference.  A Reference could be a record such as a sales order or invoice
		*/
		public $referenceType = "";
		/**
		* @var string Number that provides a reference to the payment.
		*/
		public $referenceNumber = "";
		/**
		* @var string Text, number or code that the customer uses to identify the payment record. This could be the customer's purchase order order, supplier invoice code, or an other identifier.
		*/
		public $customerReference = "";
		/**
		* @var double total monetary amount the payment applies
		*/
		public $totalAmount = 0.0;
		/**
		* @var int Total number of surcharges applied to the payment
		*/
		public $totalSurchargeItems = 0;
		/**
		* @var double Total monetary amount of surcharges applied to the payment exclusive of taxes
		*/
		public $totalSurchargeExTax = 0.0;
		/**
		* @var double Total monetary amount of surcharges applied to the payment inclusive of taxes
		*/
		public $totalSurchargeIncTax = 0.0;
		/**
		* @var double Total monetary amount of taxes applied to surcharges in the payment
		*/
		public $totalSurchargeTax = 0.0;
		/**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored in the payment with
		*/
		public $currencyCode = "";
		/**
		* @var string Text that describes any information associated with the payment
		*/
		public $description = "";
		/**
		* @var string Text that contains additional comments that have been made for the payment
		*/
		public $comment = "";
		/**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
		public $language = "";
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
		* @var ESDRecordCustomerAccountEnquiryPaymentLine[] List of lines in the payment
		*/
		public $lines = array();
	}
?>

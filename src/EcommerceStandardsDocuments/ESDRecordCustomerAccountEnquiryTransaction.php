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
	* Ecommerce Standards record that contains the data of a single transaction that can be queried for a customer account. A transaction record contains information about a positive or negative amount applied against the customer account's balance, as well the balance after the amount was applied. The account enquiry aspect denotes that the record may be queried in real time and contain additional information associated with the record.
	*/
	class ESDRecordCustomerAccountEnquiryTransaction   
	{
		/**
		* @var string Key that allows the customer account back order record to be uniquely identified and linked to.
		*/
		public $keyBackOrderID = "";
		
		/**
		* @var string Key that allows the customer account transaction record to be uniquely identified and linked to.
		*/
        public $keyTransactionID = "";
        /**
		* @var string ID that allows the transaction to be identified with. May or may not be unique.
		*/
        public $transactionID = "";
        /**
		* @var string Number that is associated to the transaction. This number can be used for referencing purposes.
		*/
        public $transactionNumber = "";
        /**
		* @var string Key of the customer account record assigned to the transaction.
		*/
        public $keyCustomerAccountID = "";
        /**
		* @var string Code of the customer account assigned to the transaction.
		*/
        public $customerAccountCode = "";
        /**
		* @var string Text that describes any information associated with the transaction
		*/
        public $description = "";
        /**
		* @var int Date that the transaction record was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
        public $creationDate = 0;
        /**
		* @var int Date set to the transaction. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
        public $transactionDate = 0;
        /**
		* @var string Key of an entity that is linked to the transaction as a reference. A Reference could be an ID of a record such as a sales order or invoice
		*/
        public $referenceKeyID = "";
        /**
		* @var string Type of entity that is linked to the transaction as a reference.  A Reference could be a record such as a sales order or invoice
		*/
        public $referenceType = "";
        /**
		* @var string Number that provides a reference to the transaction.
		*/
        public $referenceNumber = "";
        /**
		* @var double Monetary amount that denotes the balance of the customer account's after the transaction was applied.
		*/
        public $balance = 0.0;
        /**
		* @var double Monetary amount negated from the customer account's balance. If set then the creditAmount property should not contain a value.
		*/
        public $debitAmount = 0.0;
        /**
		* @var double Monetary amount added to the customer account's balance. If set then the debitAmount property should not contain a value.
		*/
        public $creditAmount = 0.0;
        /**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
        public $language = "";
        /**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored in the transaction with
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

<?php
	/**
	* Copyright (C) 2018 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;
	
	/**
	* Ecommerce Standard Document that holds details of a record associated to a payment made by a customer account
	*/
	class ESDRecordCustomerAccountPaymentRecord   
	{
		/**
		* @var string Key that allows the record of the customer account payment to be uniquely identified and linked to.
		*/
		public $keyCustomerAccountPaymentRecordID = "";
		
		/**
		* @var string Key of the record linked to the payment. This would typically be the key of an invoice or order record.
		*/
		public $keyRecordID = "";
		
		/**
		* @var string ID the the record. This would typically be the ID of an invoice or order record.
		*/
        public $recordID = "";
        
        /**
		* @var double Monetary amount applied against the record
		*/
        public $amount = 0.0;
        
        /**
		* @var string The type of record that the payment is applied to. The field must be set to one of the ESDRecordCustomerAccountPayment class's constants prefixed by PAYMENT_METHOD_
		*/
        public $recordType = "";
        
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
			
		
			if ($this->keyRecordID == null)
			{
				$this->keyRecordID = "";
			}
			
			if ($this->recordID == null)
			{
				$this->recordID = "";
			}
			
			if ($this->recordType == null)
			{
				$this->recordType = "";
			}
		}
	}
?>
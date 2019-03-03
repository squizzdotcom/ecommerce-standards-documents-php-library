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
	* Ecommerce Standards Record that holds data for a single payment type. Each payment type defines a way to purchase goods and services, or the way that goods and servies were paid for.
	*/
	class ESDRecordPaymentType   
	{
		/**
		* @var string Key of the payment type record to be uniquely identified and linked to.
		*/
		public $keyPaymentTypeID = "";

		/**
		* @var string Code of the payment type.  May or may not be a unique identifier
		*/
		public $paymentTypeCode = "";

		/**
		* @var string Label of the payment type
		*/
		public $paymentTypeLabel = "";

		/**
		* @var string Text to describe the payment type
		*/
		public $description = "";

		/**
		* @var string Method that the payment type relates to. Set null, or set it to ine of the PAYMENT_METHOD constants in the ESDocumentConstants class.
		*/
		public $paymentMethod = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
	}
?>
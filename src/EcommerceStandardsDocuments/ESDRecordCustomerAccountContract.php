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
	* Ecommerce Standards record that contains the data of a single customer account contract. A contract record may be applied to a number of customer accounts and products for a given amount of time.
	*/
	class ESDRecordCustomerAccountContract   
	{
		/**
		* @var string Key that allows the customer account contract record to be uniquely identified and linked to.
		*/
		public $keyContractID = "";
		/**
		* @var string Code that allows the contract to be identified with. May or may not be unique.
		*/
		public $contractCode = "";

		/**
		* @var string Text that describes the contract.
		*/
		public $description = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that any pricing associated to the contract will be applied to the customer accounts, even if other pricing exists that may be cheaper.
		*/
		public $forceContractPrice = "";

		/**
		* @var string Text that describes the type of contract
		*/
		public $type = "";

		/**
		* @var int Date that the contract expires. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $expireDate = 0;

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var string[] List of Key Account IDs that link any number of customer accounts to the contract.
		*/
		public $keyAccountIDs = array();

		/**
		* @var string[] List of Key Product IDs that link any number of products to the contract. Product pricing is not linked to the contract, this can be done with the use of ESD Product Price Records and the ESDocumentProductPrice document.
		*/
		public $keyProductIDs = array();
	}
?>
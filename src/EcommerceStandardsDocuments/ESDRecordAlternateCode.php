<?php

	/**
	* Copyright (C) 2017 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single alternate code for a product, download, or labour. An alternate code is a different code that could be used to identify a product, download, or labour.
	*/
	class ESDRecordAlternateCode   
	{
		/**
		* @var string Key of the product record that the alternate code is assigned to.
		*/
		public $keyProductID = "";

		/**
		* @var string Key of the download record that the alternate code is assigned to.
		*/
		public $keyDownloadID = "";

		/**
		* @var string Key of the labour record that the alternate code is assigned to.
		*/
		public $keyLabourID = "";

		/**
		* @var string Alternate code. May or may not be a unique identifier
		*/
		public $alternateCode = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the alternate code may be used to directly link to the product, download, or labour.
		*/
		public $isUseCode = ""; 

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the alternate code has been defined by another entity who supplies the product, download, or labour.
		*/
		public $isSupplierCode = "";

		/**
		* @var string Key of the supplier account record that the code is linked to.
		*/
		public $keySupplierAccountID = "";

		/**
		* @var string Key of the customer account record that the code is linked to.
		*/
		public $keyCustomerAccountID = "";

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed. Set null, or set it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;
	}
?>
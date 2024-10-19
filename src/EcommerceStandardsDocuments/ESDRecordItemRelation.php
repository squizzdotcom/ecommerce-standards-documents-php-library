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
	* Ecommerce Standards Record that holds data for a single relation between items. Each record links one product, labour, or download record to another product, labour, or download record
	*/
	class ESDRecordItemRelation
	{
		/**
		* @var string Key of the product record
		*/
		public $keyProductID = "";

		/**
		* @deprecated use keyAssetID instead
		* @var string Key of the download record
		*/
		public $keyDownloadID = "";
		
		/**
		* @var string Key of the asset record
		*/
		public $keyAssetID = "";

		/**
		* @var string Key of the labour record
		*/
		public $keyLabourID = "";

		/**
		* @var string Key of the product record that is related
		*/
		public $keyRelatedProductID = "";

		/**
		* @deprecated use keyRelatedAssetID instead
		* @var string Key of the download record that is related
		*/
		public $keyRelatedDownloadID = "";
			
		/**
		* @var string Key of the asset record that is related
		*/
		public $keyRelatedAssetID = "";

		/**
		* @var string Key of the labour record that is related
		*/
		public $keyRelatedLabourID = "";
		
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
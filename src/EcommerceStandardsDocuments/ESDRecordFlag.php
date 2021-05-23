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
	* Ecommerce Standards Record that holds data for a single type of flag. A flag can allow different entities (such as products) to be marked, allowing them to be highlighted, given additional meaning, or extra importance.
	*/
	class ESDRecordFlag
	{
		/**
		* @var string Key of the general ledger account record to be uniquely identified and linked to.
		*/
		public $keyGLAccountID = "";

		/**
		* @var string Key that allows the flag record to be uniquely identified and linked to.
		*/
        public $keyFlagID = "";

        /**
		* @var string Code of the flag.  May or may not be a unqiue identifier.
		*/
        public $flagCode = "";

        /**
		* @var string Name of the flag.
		*/
        public $flagName = "";

        /**
		* @var string Description of the flag. May contain any text used to describe the flag.
		*/
		public $description = "";
		
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
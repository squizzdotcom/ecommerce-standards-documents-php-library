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
	* Ecommerce Standards Record that holds data for a single sales representative. A sales representative represents an entity (person or organisation) that may sell products, manage customer accounts, and place sales orders on behalf of customers among other things.
	*/
	class ESDRecordSalesRep   
	{
		/**
		* @var string Key of the sales representative record to be uniquely identified and linked to.
		*/
		public $keySalesRepID = "";

		/**
		* @var string Code of the sales representative. May or may not be a unique identifier
		*/
		public $salesRepCode = "";

		/**
		* @var string Name of sales representative
		*/
		public $name = "";

		/**
		* @var string Name of contact person
		*/
		public $contact = "";

		/**
		* @var bool Either false-No or true-Yes. If true then indicates that the sales representative is an individual person.
		*/
		public $isIndividual = false;

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
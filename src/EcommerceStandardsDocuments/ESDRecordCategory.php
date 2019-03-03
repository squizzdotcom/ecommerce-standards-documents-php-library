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
	* Ecommerce Standards record that contains data for a single category. A category is a representation of a collection of objects, and can be linked in a hierarchical data structure.
	*/
	class ESDRecordCategory   
	{
		/**
		* @var string Key that allows the category record to be uniquely identified and linked to.
		*/
		public $keyCategoryID = "";

		/**
		* @var string Code of the category. May or may not be a unqiue identifier.
		*/
		public $categoryCode = "";

		/**
		* @var string Key of the category record that it is assigned to in a hierarchical data structure.
		*/
		public $keyCategoryParentID = "";
		
		/**
		* @var string Key of the category tree that the category record may reside within. The category tree defines a collection of categories that can be navigated within.
		*/
		public $keyCategoryTreeID = "";

		/**
		* @var string Name of the category.
		*/
		public $name = "";

		/**
		* @var string First description field of the category. It may contain any text used to describe the category.
		*/
		public $description1 = "";

		/**
		* @var string Second description field of the category. It may contain any text used to describe the category.
		*/
		public $description2 = "";

		/**
		* @var string Third description field of the category. It may contain any text used to describe the category.
		*/
		public $description3 = "";

		/**
		* @var string Fourth description field of the category. It may contain any text used to describe the category.
		*/
		public $description4 = "";

		/**
		* @var string Meta title of the category. This would typically be used in the meta data of a web page.
		*/
		public $metaTitle = "";

		/**
		* @var string A list of words that describe the category. This would typically be used in the meta data of a web page.
		*/
		public $metaKeywords = "";

		/**
		* @var string Meta description the category. This would typically be used in the meta data of a web page.
		*/
		public $metaDescription = "";

		/**
		* @var int Number to order the category by. This may be used to order a number of categories in a hierarchical tree that are all assigned to the same parent category.
		*/
		public $ordering = 0;

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
		* @var string[] List of Key Product IDs, that link any number of Product records to the category.
		*/
		public $keyProductIDs = array();

		/**
		* @var string[] List of Key Download IDs, that link any number of Download records to the category.
		*/
		public $keyDownloadIDs = array();

		/**
		* @var string[] List of Key Labour IDs, that link any number of Labour records to the category.
		*/
		public $keyLabourIDs = array();
	}
?>
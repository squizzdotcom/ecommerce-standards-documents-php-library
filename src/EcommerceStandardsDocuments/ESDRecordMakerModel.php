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
	* Ecommerce Standards Record that holds data for a single model created or assembled by a maker/manufacturer. Each model is made up of a collection of products or raw materials.
	*/
	class ESDRecordMakerModel   
	{
		/**
		* @var string Key that allows the maker's model record to be uniquely identified and linked to.
		*/
		public $keyMakerModelID = "";
		
		/**
		* @var string Key of the maker/manufacturer that creates or assembles the model.
		*/
		public $keyMakerID = "";
		
		/**
		* @var string Code of the model. May or may not be a unqiue identifier.
		*/
		public $modelCode = "";
		
		/**
		* @var string Secondary code of the model which may be used further identify it.
		*/
		public $modelSubCode = "";
		
		/**
		* @var string Name of the model.
		*/
		public $name = "";
		
		/**
		* @var string Code that allows the model to searched on. This search code may or may not be unique, and would typically contain key words that allows the model to be found.
		*/
		public $modelSearchCode = "";
		
		/**
		* @var string Class that allows the model to be grouped with other models of the same type.
		*/
		public $groupClass = "";
		
		/**
		* @var int Date that the model was released by the maker/manufacturer. This date may be designated by the maker as the official date that the model was first made available and known by. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $releasedDate = 0;
		
		/**
		* @var int Date that the model was created. This date may be considered an internal date only relevant to the maker completing production of the first model. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $createdDate = 0;
		
		/**
		* @var ESDRecordAttributeValue[] array list of attributes and values associated to the model. This allows almost any kind of data to be set against the model in the from of attribute key value pairs
		*/
		public $attributes = array();
		
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
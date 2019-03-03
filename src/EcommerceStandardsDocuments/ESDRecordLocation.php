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
	* Ecommerce Standards Record that holds data for a single location. Location could be a physical geographical location or a virtual place.
	*/
	class ESDRecordLocation
	{
		/**
		* @var string Key that allows the location record to be uniquely identified and linked to.
		*/
		public $keyLocationID = "";
		
		/**
		* @var string Code of the location. May or may not be a unqiue identifier.
		*/
		public $locationCode = "";
		
		/**
		* @var string Name of the location.
		*/
		public $locationName = "";
		
		/**
		* @var string First address field. Typically this could be a unit number or street number.
		*/
		public $address1 = "";
		
		/**
		* @var string Second address field. Typically this could be the street name.
		*/
		public $address2 = "";
		
		/**
		* @var string Third address field. Typically this could be the suburb, city or town.
		*/
		public $address3 = "";
		
		/**
		* @var string Name of the region/province/state where the location exists
		*/
		public $region = "";
		
		/**
		* @var string Name of the country where the location exists.
		*/
		public $country = "";
		
		/**
		* @var string Postcode or zip code of the location's address.
		*/
		public $postcode = "";
		
		/**
		* @var string Name of the contact at the location
		*/
		public $contact = "";
		
		/**
		* @var string Phone number of the location
		*/
		public $phone = "";
		
		/**
		* @var string Fax number of the location
		*/
		public $fax = "";
		
		/**
		* @var string URL of the website that is associated to the location
		*/
		public $website = "";
		
		/**
		* @var string address of the email that is handles communications for the location
		*/
		public $email = "";
		
		/**
		* @var string Either 'N'-No, 'Y'-Yes. If 'Y' then indicates that the location is being used actively.
		*/
		public $isActive = "";
		
		/**
		* @var string Either 'N'-No, 'Y'Yes. If 'Y' then indicates that the location physically exists at a geographic location in the world.
		*/
		public $isGeographic = "";
		
		/**
		* @var double Latitude co-ordinate of the geographic location. The number must be between 90 and -90
		*/
		public $latitude = 0.0;
		
		/**
		* @var double longitude co-ordinate of the geographic location. The number must be between 180 and -180
		*/
		public $longitude = 0.0;
		
		/**
		* @var string Specifies the kind of the location that it represents
		*
		* Specifies the kind of the location that it represents
		* HEAD_OFFICE - Location is the main head office of an organisational entity
		* WAREHOUSE - Location is a warehouse that may store an amount of stock
		* STORE - Location is a store that may sell goods and services
		* OFFICE - Location is an office where work is performed
		* SITE - Location is a site that has a defined area managed or used for business purposes.
		* THIRD_PARTY - Location is external to an organisation and may be owned or run by a separate entity
		* OTHER - The location type is not specified
		* 
		* The location type defaults to OTHER if no value is set.
        */
        public $locationType = ESDocumentConstants::LOCATION_TYPE_OTHER;
		
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
		* @var ESDRecordStockQuantity[] list of products stock level records that denote the products assigned to the location, and the quantity of product stock available for each
		*/
		public $productStock = array();
	}
?>
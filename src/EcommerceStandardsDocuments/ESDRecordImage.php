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
	* Ecommerce Standards Record that holds data associated for an image, that may be associated with a product, download, labour, category, category tree, maker, or maker model record
	*/
	class ESDRecordImage
	{
		/**
		* @var string Key that allows the image record to be uniquely identified and linked to.
		*/
		public $keyImageID = "";

		/**
		* @var string Key of the product record that the image is set for.
		*/
		public $keyProductID = "";

		/**
		* @deprecated use keyAssetID instead
		* @var string Key of the download record that the image is set for.
		*/
		public $keyDownloadID = "";

		/**
		* @var string Key of the asset record
		*/
		public $keyAssetID = "";

		/**
		* @var string Key of the labour record that the image is set for.
		*/
		public $keyLabourID = "";
		
		/**
		 * @var string Key of the category record that the image is set for.
		 */
		public $keyCategoryID = "";
		
		/**
		 * @var string Key of the category tree record that the image is set for.
		 */
		public $keyCategoryTreeID = "";
		
		/**
		 * @var string Key of the maker/manufacturer model record that the image is set for.
		 */
		public $keyMakerModelID = "";

		/**
		 * @var string Key of the maker/manufacturer that creates or assembles models and products that the image is set for.
		 */
		public $keyMakerID = "";

		/**
		* @var string Full file path to locate the image, including the image file name and extension. The file path may be a URL, or could be a path to the file in a local machine, or network file store.
		*/
		public $imageFullFilePath = "";

		/**
		* @var string Name of the image file excluding its extension. The name should match the name in the imageFullFilePath property if set.
		*/
		public $imageFileName = "";
		/**
		* @var string Extension of the image file. The extension should match the extension in the imageFullFilePath property if set.
		*/
		public $imageFileExtension = "";

		/**
		* @var string Title to label the image.
		*/
		public $title = "";

		/**
		* @var string Text to decribe details about the image
		*/
		public $description = "";
		
		/**
		* @var string Either N - No or Y - yes. If 'Y' then indicates that the image is the primary image of the entity (such as product, category, model etc...) that the image is associated to.
		*/
		public $isPrimary = "";
		
		/**
		* @var int Number to order the image by. This may be used to order a number of images that appear is a list against the same entity.
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
	}
?>
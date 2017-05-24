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
	* Ecommerce Standards Record that holds data for a single line in a purchase order.
	*/
	class ESDRecordOrderPurchaseLine  implements \JsonSerializable
	{
		/**
		* @var ESDRecordOrderProductDelivery[] list of product delivery records for the order
		*/
		public $productDeliveries = array();

		/**
		* @var ESDRecordOrderLineAttributeProfile[] list of attributes associated with the line
		*/
		public $attributes = array();

		/**
		* @var ESDRecordOrderLineTax[] list of taxes applied to the line
		*/
		public $taxes = array();

		/**
		* @var string Type of line  in the order. Set it to a constant prefixed with ORDER_LINE_TYPE_ in the ESDocumentConstants class
		*/
		public $lineType = "";

		/**
		* @var string Code of the line in the sales order associated to the purchase order.
		*/
		public $salesOrderLineCode = "";

		/**
		* @var string number of the line in the sales order associated to the purchase order.
		*/
		public $salesOrderLineNumber = "";

		/**
		* @var string Code of the location that order line is assigned to.
		*/
		public $locationCode = "";

		/**
		* @var string Name of the location that the order line is assigned to.
		*/
		public $locationName = "";

		/**
		* @var string Key of the location record that the order line is assigned to.
		*/
		public $keyLocationID = "";

		/**
		* @var string United Nations Standard Products and Service Code. Stores a standard code defined by the United Nations classifying objects.
		*/
		public $UNSPSC = "";

		/**
		* @var string Language that the descriptive text of the line is  in. Set it to a constant prefixed with LANG_ in the ESDocumentConstants class
		*/
		public $language = "";

		/**
		* @var double Quantity of units ordered.
		*/
		public $quantity = 0;

		/**
		* @var double Monetary price of the line's unit, excluding tax.
		*/
		public $priceExTax = 0;

		/**
		* @var double Monetary price of the line's unit, including tax.
		*/
		public $priceIncTax = 0;

		/**
		* @var double Monetary price of the tax applied to the line's unit.
		*/
		public $priceTax = 0;

		/**
		* @var double Monetary price of the line's unit before any discounting was applied, exclusive of tax.
		*/
		public $priceUndiscountedExTax = 0;

		/**
		* @var double Monetary price of the line's unit before any discounting was applied, inclusive of tax.
		*/
		public $priceUndiscountedIncTax = 0;

		/**
		* @var double Monetary price of tax applied the line's unit before any discounting was applied.
		*/
		public $priceUndiscountedTax = 0;

		/**
		* @var double Total monetary price of the quantity of unit's ordered, excluding tax.
		*/
		public $priceTotalExTax = 0;

		/**
		* @var double Total monetary price of the quantity of unit's ordered, including tax.
		*/
		public $priceTotalIncTax = 0;

		/**
		* @var double Total monetary price of the tax applied over the total quantity of unit's ordered.
		*/
		public $priceTotalTax = 0;

		/**
		* @var double Total monetary price of the quantity of unit's ordered before discounting, excluding tax.
		*/
		public $priceTotalUndiscountedExTax = 0;

		/**
		* @var double Total monetary price of the quantity of unit's ordered before discounting, including tax.
		*/
		public $priceTotalUndiscountedIncTax = 0;

		/**
		* @var double Total monetary price of the tax applied over the total quantity of unit's ordered before discounting.
		*/
		public $priceTotalUndiscountedTax = 0;

		/**
		* @var string Either N-No, Y-Yes. If 'Y' then indicates that the price of the line was explicitly priced at 0.
		*/
		public $isPriceFree = "";

		/**
		* @var string Sets which system or person  the pricing of the line. Set it to a constant prefixed with ENTITY_SET_PRICE_ in the ESDocumentConstants class
		*/
		public $entitySetPrice = "";

		/**
		* @var string Name of the unit  for the line.
		*/
		public $unitName = "";

		/**
		* @var string Key of the sell unit that the line is assigned to.
		*/
		public $keySellUnitID = "";

		/**
		* @var double Sets the unit quantity of the ordered line that makes up the base quantity. Eg. if the line was bought as a pack, this would indicate that a pack sell unit type consists of "6" individual units.
		*/
		public $sellUnitBaseQuantity = 0;

		/**
		* @var string Code that the pricing references.
		*/
		public $priceReferenceCode = "";

		/**
		* @var string Type of entity that the price is referenced to. Typically use one of the PRICE constants in th ESDRecordProductPrice class to  this field, or leave it empty.
		*/
		public $priceReferenceType = "";

		/**
		* @var string EitherN-No, Y-Yes. If 'Y' then indicates that the line is associated to a product that is the parent of a kit.
		*/
		public $isKitted = "";

		/**
		* @var string Either N-No, Y-Yes. If 'Y' then indicates that the line has been priced based on the component product of a product kit.
		*/
		public $kittedProductSetPrice = "";

		/**
		* @var string Either N-No, Y-Yes. If 'Y' then indicates quantity in the line should be reserved.
		*/
		public $isReserved = "";

		/**
		* @var string Key of the product record associated to the line. Only relevent when the lineType has been  to product
		*/
		public $keyProductID = "";

		/**
		* @var string Code the product in the line.
		*/
		public $productCode = "";

		/**
		* @var string name of the product in the line
		*/
		public $productName = "";

		/**
		* @var string text to describe details of the product in the line
		*/
		public $productDescription = "";

		/**
		* @var string code of the product in the purchase order associated to the sales order
		*/
		public $salesOrderProductCode = "";

		/**
		* @var double Width measurement of the product.
		*/
		public $width = 0;

		/**
		* @var double Height measurement of the product.
		*/
		public $height = 0;

		/**
		* @var double Depth measurement of the product.
		*/
		public $depth = 0;

		/**
		* @var double Volume measurement of the product.
		*/
		public $volume = 0;

		/**
		* @var double Weight measurement of the product.
		*/
		public $weight = 0;

		/**
		* @var string Code of the product's width measurement to define the unit of measurement.
		*/
		public $widthUnitMeasureCode = "";

		/**
		* @var string Code of the product's height measurement to define the unit of measurement.
		*/
		public $heightUnitMeasureCode = "";

		/**
		* @var string Code of the product's depth measurement to define the unit of measurement.
		*/
		public $depthUnitMeasureCode = "";

		/**
		* @var string Code of the product's volume measurement to define the unit of measurement.
		*/
		public $volumeUnitMeasureCode = "";

		/**
		* @var string Code of the product's weight measurement to define the unit of measurement.
		*/
		public $weightUnitMeasureCode = "";
		
		/**
		* @var string Key of the download record associated to the line. Only relevent when the lineType has been  to download
		*/
		public $keyDownloadID = "";

		/**
		* @var string Code the download in the line.
		*/
		public $downloadCode = "";

		/**
		* @var string name the download in the line.
		*/
		public $downloadName = "";

		/**
		* @var string description the download in the line.
		*/
		public $downloadDescription = "";

		/**
		* @var string code of the download in the purchase order associated to the sales order
		*/
		public $salesOrderDownloadCode = "";
		
		/**
		* @var string Key of the labour record associated to the line. Only relevent when the lineType has been  to labour
		*/
		public $keyLabourID = "";

		/**
		* @var string Code the labour in the line.
		*/
		public $labourCode = "";

		/**
		* @var string name the labour in the line.
		*/
		public $labourName = "";

		/**
		* @var string text to describe details of the labour in the line
		*/
		public $labourDescription = "";

		/**
		* @var string code of the labour in the purchase order associated to the sales order
		*/
		public $salesOrderLabourCode = "";

		/**
		* @var int Data Record OPeration. Denotes an operation that may need to be performed on the record when it is being processed.
		* Set null, or  it to one of the ESD_RECORD_OPERATION constants in the ESDocumentConstants class to allow the record to be inserted, updated, deleted, or ignored.
		*/
		public $drop = ESDocumentConstants::ESD_RECORD_OPERATION_NA;

		/**
		* @var string Stores an identifier that is relevant only to the system referencing and storing the record for its own needs.
		*/
		public $internalID = "";
		
		/**
		* serializes the class's properties into JSON, and filters properties with default values from being returned.
		*/
		public function jsonSerialize() 
		{
			return array_filter([
				'lineType' => $this->lineType,
				'salesOrderLineCode' => $this->salesOrderLineCode,
				'salesOrderLineNumber' => $this->salesOrderLineNumber,
				'locationCode' => $this->locationCode,
				'locationName' => $this->locationName,
				'keyLocationID' => $this->keyLocationID,
				'UNSPSC' => $this->UNSPSC,
				'language' => $this->language,
				'quantity' => $this->quantity,
				'priceExTax' => $this->priceExTax,
				'priceIncTax' => $this->priceIncTax,
				'priceTax' => $this->priceTax,
				'priceUndiscountedExTax' => $this->priceUndiscountedExTax,
				'priceUndiscountedIncTax' => $this->priceUndiscountedIncTax,
				'priceUndiscountedTax' => $this->priceUndiscountedTax,
				'priceTotalExTax' => $this->priceTotalExTax,
				'priceTotalIncTax' => $this->priceTotalIncTax,
				'priceTotalTax' => $this->priceTotalTax,
				'priceTotalUndiscountedExTax' => $this->priceTotalUndiscountedExTax,
				'priceTotalUndiscountedIncTax' => $this->priceTotalUndiscountedIncTax,
				'priceTotalUndiscountedTax' => $this->priceTotalUndiscountedTax,
				'isPriceFree' => $this->isPriceFree,
				'entitySetPrice' => $this->entitySetPrice,
				'unitName' => $this->unitName,
				'keySellUnitID' => $this->keySellUnitID,
				'sellUnitBaseQuantity' => $this->sellUnitBaseQuantity,
				'priceReferenceCode' => $this->priceReferenceCode,
				'priceReferenceType' => $this->priceReferenceType,
				'isKitted' => $this->isKitted,
				'kittedProductSetPrice' => $this->kittedProductSetPrice,
				'isReserved' => $this->isReserved,
				'keyProductID' => $this->keyProductID,
				'productCode' => $this->productCode,
				'productName' => $this->productName,
				'productDescription' => $this->productDescription,
				'salesOrderProductCode' => $this->salesOrderProductCode,
				'width' => $this->width,
				'height' => $this->height,
				'depth' => $this->depth,
				'volume' => $this->volume,
				'weight' => $this->weight,
				'widthUnitMeasureCode' => $this->widthUnitMeasureCode,
				'heightUnitMeasureCode' => $this->heightUnitMeasureCode,
				'depthUnitMeasureCode' => $this->depthUnitMeasureCode,
				'volumeUnitMeasureCode' => $this->volumeUnitMeasureCode,
				'weightUnitMeasureCode' => $this->weightUnitMeasureCode,
				'keyDownloadID' => $this->keyDownloadID,
				'downloadCode' => $this->downloadCode,
				'downloadName' => $this->downloadName,
				'downloadDescription' => $this->downloadDescription,
				'salesOrderDownloadCode' => $this->salesOrderDownloadCode,
				'keyLabourID' => $this->keyLabourID,
				'labourCode' => $this->labourCode,
				'labourName' => $this->labourName,
				'labourDescription' => $this->labourDescription,
				'salesOrderLabourCode' => $this->salesOrderLabourCode,
				'drop' => $this->drop,
				'productDeliveries' => $this->productDeliveries,
				'attributes' => $this->attributes,
				'taxes' => $this->taxes
			]);
		}

		/**
		* set default values for members that have no values 
		*/
		public function defaultValuesForNullMembers()
		{
			if ($this->attributes == null)
			{
				$this->attributes = array();
			}
			else
			{
				
				foreach($this->attributes as &$lineAttributeProfile)
				{
					$lineAttributeProfile->setDefaultValuesForNullMembers();
				}
			} 
			if ($this->taxes == null)
			{
				$this->taxes = array();
			}
			else
			{
				foreach($this->taxes as &$lineTax)
				{
					$lineTax->setDefaultValuesForNullMembers();
				}
			} 
			if ($this->productDeliveries == null)
			{
				$this->productDeliveries = array();
			}
			else
			{
				foreach($this->productDeliveries as &$delivery)
				{
					$delivery->setDefaultValuesForNullMembers();
				}
			} 
			if ($this->lineType == null)
			{
				$this->lineType = "";
			}
			
			if ($this->locationCode == null)
			{
				$this->locationCode = "";
			}
			
			if ($this->locationName == null)
			{
				$this->locationName = "";
			}
			
			if ($this->keyLocationID == null)
			{
				$this->keyLocationID = "";
			}
			
			if ($this->UNSPSC == null)
			{
				$this->UNSPSC = "";
			}
			
			if ($this->language == null)
			{
				$this->language = "";
			}
			
			if ($this->salesOrderLineCode == null)
			{
				$this->salesOrderLineCode = "";
			}
			
			if ($this->salesOrderLineNumber == null)
			{
				$this->salesOrderLineNumber = "";
			}
			
			if ($this->isPriceFree == null)
			{
				$this->isPriceFree  = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($this->entitySetPrice == null)
			{
				$this->entitySetPrice = ESDocumentConstants::ENTITY_SET_PRICE_SYSTEM;
			}
			
			if ($this->unitName == null)
			{
				$this->unitName = "";
			}
			
			if ($this->priceReferenceCode == null)
			{
				$this->priceReferenceCode = "";
			}
			
			if ($this->priceReferenceType == null)
			{
				$this->priceReferenceType = "";
			}
			
			if ($this->keySellUnitID == null)
			{
				$this->keySellUnitID = "";
			}
			
			if ($this->productCode == null)
			{
				$this->productCode = "";
			}
			
			if ($this->productName == null)
			{
				$this->productName = "";
			}
			
			if ($this->keyProductID == null)
			{
				$this->keyProductID = "";
			}
			
			if ($this->productDescription == null)
			{
				$this->productDescription = "";
			}
			
			if ($this->salesOrderProductCode == null)
			{
				$this->salesOrderProductCode = "";
			}
			
			if ($this->widthUnitMeasureCode == null)
			{
				$this->widthUnitMeasureCode = "";
			}
			
			if ($this->heightUnitMeasureCode == null)
			{
				$this->heightUnitMeasureCode = "";
			}
			
			if ($this->depthUnitMeasureCode == null)
			{
				$this->depthUnitMeasureCode = "";
			}
			
			if ($this->volumeUnitMeasureCode == null)
			{
				$this->volumeUnitMeasureCode = "";
			}
			
			if ($this->weightUnitMeasureCode == null)
			{
				$this->weightUnitMeasureCode = "";
			}
			
			if ($this->downloadCode == null)
			{
				$this->downloadCode = "";
			}
			
			if ($this->keyDownloadID == null)
			{
				$this->keyDownloadID = "";
			}
			
			if ($this->downloadName == null)
			{
				$this->downloadName = "";
			}
			
			if ($this->downloadDescription == null)
			{
				$this->downloadDescription = "";
			}
			
			if ($this->salesOrderDownloadCode == null)
			{
				$this->salesOrderDownloadCode = "";
			}
			
			if ($this->labourCode == null)
			{
				$this->labourCode = "";
			}
			
			if ($this->keyLabourID == null)
			{
				$this->keyLabourID = "";
			}
			
			if ($this->labourName == null)
			{
				$this->labourName = "";
			}
			
			if ($this->labourDescription == null)
			{
				$this->labourDescription = "";
			}
			
			if ($this->salesOrderLabourCode == null)
			{
				$this->salesOrderLabourCode = "";
			}
			
			if ($this->isKitted == null)
			{
				$this->isKitted = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($this->kittedProductSetPrice == null)
			{
				$this->kittedProductSetPrice = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($this->isReserved == null)
			{
				$this->isReserved = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($this->internalID == null)
			{
				$this->internalID = "";
			}         
		}
	}
?>
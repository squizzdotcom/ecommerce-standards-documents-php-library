<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;

	/**
	* Ecommerce Standards Record that holds data for a single line in a supplier's invoice.
	*/
	class ESDRecordSupplierInvoiceLine
	{
		/**
		* @var ESDRecordInvoiceLineAttributeProfile[] list of attributes associated with the line
		*/
		public $attributes = array();

		/**
		* @var ESDRecordInvoiceLineTax[] list of taxes applied to the line
		*/
		public $taxes = array();

		/**
		* @var string Type of line in the invoice. Set it to a constant prefixed with INVOICE_LINE_TYPE_ in the ESDocumentConstants class
		*/
		public $lineType = "";

		/**
		* @var string Code of the line in the original purchase order associated to the supplier's invoice line
		*/
		public $purchaseOrderLineCode = "";

		/**
		* @var string number of the line in original purchase order associated to the supplier's invoice line
		*/
		public $purchaseOrderLineNumber = "";
		
		/**
		* @var string Code of the line in the supplier's customer invoice associated to the line
		*/
		public $customerInvoiceLineCode = "";

		/**
		* @var string number of the line in the supplier's customer invoice associated to the invoice line
		*/
		public $customerInvoiceLineNumber = "";
		
		/**
		* @var string Code of the line in the supplier's sales order associated to the invoice line
		*/
		public $salesOrderLineCode = "";

		/**
		* @var string number of the line in the supplier's sales order associated to the invoice line
		*/
		public $salesOrderLineNumber = "";

		/**
		* @var string Code of the location that invoice line is assigned to.
		*/
		public $locationCode = "";

		/**
		* @var string Name of the location that the invoice line is assigned to.
		*/
		public $locationName = "";

		/**
		* @var string Key of the location record that the invoice line is assigned to. Indicates the location that the invoiced goods are being delivered to
		*/
		public $keyLocationID = "";
		
		/**
		* @var string key of the external location where the products for the invoice can be found. This external location may be the location where goods are being delivered to or held at.
		*/
		public $externalKeyLocationID = "";
		
		/**
		* @var string Code of the external location. This external location may be the location where goods are being delivered to or held at.
		*/
		public $externalLocationCode = "";
		
		/**
		* @var string Name of the external location. This external location may be the location where goods are being delivered to or held at.
		*/
		public $externalLocationName = "";

		/**
		* @var string United Nations Standard Products and Service Code. Stores a standard code defined by the United Nations classifying objects.
		*/
		public $UNSPSC = "";

		/**
		* @var string Language that the descriptive text of the line is  in. Set it to a constant prefixed with LANG_ in the ESDocumentConstants class
		*/
		public $language = "";
		
		/**
		* @var string Either
		* @var string N-No, Y-Yes
		* @var string If 'Y' then indicates that the product purchased should be stored in inventory and kept track of.
		*/
		public $isInventoried = ESDocumentConstants::ESD_VALUE_NO;

		/**
		* @var double Quantity of units invoiced.
		*/
		public $quantityInvoiced = 0.0;
		
		/**
		* @var double Quantity of units delivered.
		*/
		public $quantityDelivered = 0.0;
		
		/**
		* @var double Quantity of units back ordered.
		*/
		public $quantityBackordered = 0.0;
		
		/**
		* @var double Quantity of units that were ordered.
		*/
		public $quantityOrdered = 0.0;

		/**
		* @var double Monetary price of the line's unit, excluding tax.
		*/
		public $priceExTax = 0.0;

		/**
		* @var double Monetary price of the line's unit, including tax.
		*/
		public $priceIncTax = 0.0;

		/**
		* @var double Monetary price of the tax applied to the line's unit.
		*/
		public $priceTax = 0.0;

		/**
		* @var double Monetary price of the line's unit before any discounting was applied, exclusive of tax.
		*/
		public $priceUndiscountedExTax = 0.0;

		/**
		* @var double Monetary price of the line's unit before any discounting was applied, inclusive of tax.
		*/
		public $priceUndiscountedIncTax = 0.0;

		/**
		* @var double Monetary price of tax applied the line's unit before any discounting was applied.
		*/
		public $priceUndiscountedTax = 0.0;

		/**
		* @var double Total monetary price of the quantity of unit's invoiced, excluding tax.
		*/
		public $priceTotalExTax = 0.0;

		/**
		* @var double Total monetary price of the quantity of unit's invoiced, including tax.
		*/
		public $priceTotalIncTax = 0.0;

		/**
		* @var double Total monetary price of the tax applied over the total quantity of unit's invoiced.
		*/
		public $priceTotalTax = 0.0;

		/**
		* @var double Total monetary price of the quantity of unit's invoiced before discounting, excluding tax.
		*/
		public $priceTotalUndiscountedExTax = 0.0;

		/**
		* @var double Total monetary price of the quantity of unit's invoiced before discounting, including tax.
		*/
		public $priceTotalUndiscountedIncTax = 0.0;

		/**
		* @var double Total monetary price of the tax applied over the total quantity of unit's invoiced before discounting.
		*/
		public $priceTotalUndiscountedTax = 0.0;

		/**
		* @var string Either N-No, Y-Yes If 'Y' then indicates that the price of the line was explicitly priced at 0.
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
		* @var double Sets the unit quantity of the invoiced line that makes up the base quantity. Eg. if the line was bought as a pack, this would indicate that a pack sell unit type consists of "6" individual units.
		*/
		public $sellUnitBaseQuantity = 0.0;

		/**
		* @var string Code that the pricing references.
		*/
		public $priceReferenceCode = "";

		/**
		* @var string Type of entity that the price is referenced to. Typically use one of the PRICE constants in th ESDRecordProductPrice class to  this field, or leave it empty.
		*/
		public $priceReferenceType = "";

		/**
		* @var string Either string N-No Y-Yes If 'Y' then indicates that the line is associated to a product that is the parent of a kit.
		*/
		public $isKitted = "";

		/**
		* @var string Either N-No Y-Yes If 'Y' then indicates that the line has been priced based on the component product of a product kit.
		*/
		public $kittedProductSetPrice = "";

		/**
		* @var string Either N-No Y-Yes If 'Y' then indicates quantity in the line should be reserved.
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
		* @var string code of the product in the supplier's customer invoice, that stores the code of the customer's product
		*/
		public $customerInvoiceProductCode = "";
		
		/**
		* @var string code of the product in the supplier's sales order, that stores the code of the supplier's product originally ordered
		*/
		public $salesOrderProductCode = "";
		
		/**
		* @var string code of the product in the customer's purchase order, that stores the code of the customer's product originally ordered
		*/
		public $purchaseOrderProductCode = "";

		/**
		* @var double Width measurement of the product.
		*/
		public $width = 0.0;

		/**
		* @var double Height measurement of the product.
		*/
		public $height = 0.0;

		/**
		* @var double Depth measurement of the product.
		*/
		public $depth = 0.0;

		/**
		* @var double Volume measurement of the product.
		*/
		public $volume = 0.0;

		/**
		* @var double Weight measurement of the product.
		*/
		public $weight = 0.0;

		/**
		* @var string Code of the product's width measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $widthUnitMeasureCode = "";

		/**
		* @var string Code of the product's height measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $heightUnitMeasureCode = "";

		/**
		* @var string Code of the product's depth measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_LENGTH_ in the ESDocumentConstants class
		*/
		public $depthUnitMeasureCode = "";

		/**
		* @var string Code of the product's volume measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_VOLUME_ in the ESDocumentConstants class
		*/
		public $volumeUnitMeasureCode = "";

		/**
		* @var string Code of the product's weight measurement to define the unit of measurement. Set it to a constant prefixed with UNIT_MEASURE_MASS_ in the ESDocumentConstants class
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
		* @var string code of the download in the supplier's customer invoice, that stores the code of the customer's download
		*/
		public $customerInvoiceDownloadCode = "";
		
		/**
		* @var string code of the download in the supplier's sales order, that stores the code of the supplier's download originally ordered
		*/
		public $salesOrderDownloadCode = "";
		
		/**
		* @var string code of the download in the customer's purchase order, that stores the code of the customer's download originally ordered
		*/
		public $purchaseOrderDownloadCode = "";

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
		* @var string code of the labour in the supplier's customer invoice, that stores the code of the labour's download
		*/
		public $customerInvoiceLabourCode = "";
		
		/**
		* @var string code of the labour in the supplier's sales order, that stores the code of the supplier's labour originally ordered
		*/
		public $salesOrderLabourCode = "";
		
		/**
		* @var string code of the labour in the customer's purchase order, that stores the code of the customer's labour originally ordered
		*/
		public $purchaseOrderLabourCode = "";
		
		/**
		* @var string text to describe details or comment of a text line
		*/
		public $textDescription = "";
		
		/**
		* @var string Code of the supplier's product/labour/download that the line is associated to
		*/
		public $supplierItemCode = "";
		
		/**
		* @var string Key of the general ledger account that the line is assigned to. This links the invoice line to the general ledger account that the purchase may be reported against for accounting purposes.
		*/
		public $keyGLAccountID = "";

		/**
		* @var string Code of the general ledger account that the line is assigned to. The code can be used to identify the general ledger account that the purchase may be reported against for accounting purposes
		*/
		public $glAccountCode = "";

		/**
		* @var string Name of the general ledger account that the line is assigned to. The name can be used to identify the general ledger account that the purchase may be reported against for accounting purposes.
		*/
		public $glAccountName = "";

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
		* constructor
		*/
		public function __construct()
		{
		}

		/**
		* sets default values for members that have no values 
		*/
		public function setDefaultValuesForNullMembers()
		{
			if ($attributes == null)
			{
				$this->attributes = array();
			}
			
			if ($taxes == null)
			{
				$this->taxes = array();
			}
			
			if ($lineType == null)
			{
				$this->lineType = "";
			}
			
			if ($locationCode == null)
			{
				$this->locationCode = "";
			}
			
			if ($locationName == null)
			{
				$this->locationName = "";
			}
			
			if ($keyLocationID == null)
			{
				$this->keyLocationID = "";
			}
			
			if ($externalKeyLocationID == null)
			{
				$this->externalKeyLocationID = "";
			}

			if ($externalLocationCode == null)
			{
				$this->externalLocationCode = "";
			}

			if ($externalLocationName == null)
			{
				$this->externalLocationName = "";
			}
			
			if ($UNSPSC == null)
			{
				$this->UNSPSC = "";
			}
			
			if ($language == null)
			{
				$this->language = "";
			}
			
			if ($salesOrderLineCode == null)
			{
				$this->salesOrderLineCode = "";
			}
			
			if ($salesOrderLineNumber == null)
			{
				$this->salesOrderLineNumber = "";
			}
			
			if ($isPriceFree == null)
			{
				$this->isPriceFree  = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($entitySetPrice == null)
			{
				$this->entitySetPrice = ESDocumentConstants::ENTITY_SET_PRICE_SYSTEM;
			}
			
			if ($unitName == null)
			{
				$this->unitName = "";
			}
			
			if ($isInventoried == null)
			{
				$this->isInventoried = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($priceReferenceCode == null)
			{
				$this->priceReferenceCode = "";
			}
			
			if ($priceReferenceType == null)
			{
				$this->priceReferenceType = "";
			}
			
			if ($keySellUnitID == null)
			{
				$this->keySellUnitID = "";
			}
			
			if ($productCode == null)
			{
				$this->productCode = "";
			}
			
			if ($productName == null)
			{
				$this->productName = "";
			}
			
			if ($keyProductID == null)
			{
				$this->keyProductID = "";
			}
			
			if ($productDescription == null)
			{
				$this->productDescription = "";
			}
			
			if ($customerInvoiceProductCode == null)
			{
				$this->customerInvoiceProductCode = "";
			}
			
			if ($salesOrderProductCode == null)
			{
				$this->salesOrderProductCode = "";
			}
			
			if ($purchaseOrderProductCode == null)
			{
				$this->purchaseOrderProductCode = "";
			}
			
			if ($widthUnitMeasureCode == null)
			{
				$this->widthUnitMeasureCode = "";
			}
			
			if ($heightUnitMeasureCode == null)
			{
				$this->heightUnitMeasureCode = "";
			}
			
			if ($depthUnitMeasureCode == null)
			{
				$this->depthUnitMeasureCode = "";
			}
			
			if ($volumeUnitMeasureCode == null)
			{
				$this->volumeUnitMeasureCode = "";
			}
			
			if ($weightUnitMeasureCode == null)
			{
				$this->weightUnitMeasureCode = "";
			}
			
			if ($downloadCode == null)
			{
				$this->downloadCode = "";
			}
			
			if ($keyDownloadID == null)
			{
				$this->keyDownloadID = "";
			}
			
			if ($downloadName == null)
			{
				$this->downloadName = "";
			}
			
			if ($downloadDescription == null)
			{
				$this->downloadDescription = "";
			}
			
			if ($customerInvoiceDownloadCode == null)
			{
				$this->customerInvoiceDownloadCode = "";
			}
			
			if ($salesOrderDownloadCode == null)
			{
				$this->salesOrderDownloadCode = "";
			}
			
			if ($purchaseOrderDownloadCode == null)
			{
				$this->purchaseOrderDownloadCode = "";
			}
			
			if ($labourCode == null)
			{
				$this->labourCode = "";
			}
			
			if ($keyLabourID == null)
			{
				$this->keyLabourID = "";
			}
			
			if ($labourName == null)
			{
				$this->labourName = "";
			}
			
			if ($labourDescription == null)
			{
				$this->labourDescription = "";
			}
			
			if ($customerInvoiceLabourCode == null)
			{
				$this->customerInvoiceLabourCode = "";
			}
			
			if ($salesOrderLabourCode == null)
			{
				$this->salesOrderLabourCode = "";
			}
			
			if ($purchaseOrderLabourCode == null)
			{
				$this->purchaseOrderLabourCode = "";
			}
			
			if ($isKitted == null)
			{
				$this->isKitted = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($kittedProductSetPrice == null)
			{
				$this->kittedProductSetPrice = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($isReserved == null)
			{
				$this->isReserved = ESDocumentConstants::ESD_VALUE_NO;
			}
			
			if ($textDescription == null)
			{
				$this->textDescription = "";
			}
			
			if ($this->keyGLAccountID == null)
			{
				$this->keyGLAccountID = "";
			}
			
			if ($this->glAccountCode == null)
			{
				$this->glAccountCode = "";
			}
			
			if ($this->glAccountName == null)
			{
				$this->glAccountName = "";
			}
			
			if ($this->internalID == null)
			{
				$this->internalID = "";
			}
			
			if ($internalID == null)
			{
				$this->internalID = "";
			}     
			
			if ($supplierItemCode == null)
			{
				$this->supplierItemCode = "";
			}
		}
	}
?>
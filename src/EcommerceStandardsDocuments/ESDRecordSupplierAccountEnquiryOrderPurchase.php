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
	* Ecommerce Standards record that contains the data of a single Purchase Order that can be queried for a supplier account. A purchase order record contains information about items ordered by a supplier account. The account enquiry aspect denotes that the record may be queried in real time and contain additional information associated with the record.
	*/
	class ESDRecordSupplierAccountEnquiryOrderPurchase   
	{
		/**
		* @var string Key that allows the supplier account purchase order record to be uniquely identified and linked to.
		*/
		public $keyOrderPurchaseID = "";

		/**
		* @var string ID that allows the purchase order to be identified with. May or may not be unique.
		*/
		public $orderID = "";

		/**
		* @var string Number that is associated to the purchase order. This number can be used for referencing purposes.
		*/
		public $orderNumber = "";

		/**
		* @var string Key of the supplier account record assigned to the purchase order.
		*/
		public $keySupplierAccountID = "";

		/**
		* @var string Code of the suppier account assigned to the purchase order.
		*/
		public $supplierAccountCode = "";

		/**
		* @var int Date that the purchase order record was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $creationDate = 0;

		/**
		* @var int Date set to the purchase order. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $orderDate = 0;

		/**
		* @var int Date that the purchase order is due. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $dueDate = 0;

		/**
		* @var int Date that the ordered goods/services are expected to be delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $expectedDeliveryDate = 0;

		/**
		* @var int Date that the ordered goods/services were delivered. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $deliveredDate = 0;

		/**
		* @var string Key of the location record associated to the purchase order.
		*/
		public $keyLocationID = "";

		/**
		* @var string Code of the location associated to the purchase order.
		*/
		public $locationCode = "";

		/**
		* @var string Label of the location associated to the purchase order.
		*/
		public $locationLabel = "";

		/**
		* @var string The type of location associated to the purchase order. Set it to one of the LOCATION_TYPE constants in the ESDocumentConstants class
		*/
		public $locationType = "";

		/**
		* @var string Key of an entity that is linked to the purchase order as a reference. A Reference could be an ID of a record such as a purchase order or invoice
		*/
		public $referenceKeyID = "";

		/**
		* @var string Type of entity that is linked to the purchase order as a reference.  A Reference could be a record such as a purchase order or invoice
		*/
		public $referenceType = "";

		/**
		* @var string Number that provides a reference to the purchase order.
		*/
		public $referenceNumber = "";

		/**
		* @var string Code of the purchase representative associated to the purchase order.
		*/
		public $purchaserCode = "";

		/**
		* @var string Name of the purchase representative associated to the purchase order.
		*/
		public $purchaserName = "";

		/**
		* @var string Name of the contact person at the address that the ordered goods are being delivered to
		*/
		public $deliveryContact = "";

		/**
		* @var string Name of the organisation that the ordered goods are being delivered to
		*/
		public $deliveryOrgName = "";

		/**
		* @var string First address field that the purchase order is being delivered to.
		*/
		public $deliveryAddress1 = "";

		/**
		* @var string Second address field that the purchase order is being delivered to.
		*/
		public $deliveryAddress2 = "";

		/**
		* @var string Third address field that the purchase order is being delivered to.
		*/
		public $deliveryAddress3 = "";

		/**
		* @var string Name of the state/province/region that the purchase order is being delivered to.
		*/
		public $deliveryStateProvince = "";

		/**
		* @var string Name of the country that the purchase order is being delivered to.
		*/
		public $deliveryCountry = "";

		/**
		* @var string Code of the country at the address that the ordered goods are being delivered to as a 2 digit code set by ISO standards.
		*/
		public $deliveryCountryCodeISO2 = "";

		/**
		* @var string Code of the country at the address that the ordered goods are being delivered to as a 3 digit code set by ISO standards.
		*/
		public $deliveryCountryCodeISO3 = "";

		/**
		* @var string Post code of the address that the ordered goods are being delivered to
		*/
		public $deliveryPostcode = "";

		/**
		* @var string Name of the contact person at the address associated with the billing of the purchase order.
		*/
		public $billingContact = "";

		/**
		* @var string Name of the organisation that the orders goods are being billed to
		*/
		public $billingOrgName = "";

		/**
		* @var string First address field of the billing address set for the purchase order.
		*/
		public $billingAddress1 = "";

		/**
		* @var string Second address field of the billing address set for the purchase order.
		*/
		public $billingAddress2 = "";

		/**
		* @var string Third address field of the billing address set for the purchase order.
		*/
		public $billingAddress3 = "";

		/**
		* @var string Name of the region/state/province that the purchase order is being billed to.
		*/
		public $billingStateProvince = "";

		/**
		* @var string Name of the country that the purchase order is being billed to.
		*/
		public $billingCountry = "";

		/**
		* @var string Code of the country at the billing address as a 2 digit code set by ISO standards.
		*/
		public $billingCountryCodeISO2 = "";

		/**
		* @var string Code of the country at the billing address as a 3 digit code set by ISO standards.
		*/
		public $billingCountryCodeISO3 = "";

		/**
		* @var string Post code at the billing address
		*/
		public $billingPostcode = "";

		/**
		* @var string Tax number displayed on the purchase order
		*/
		public $taxNumber = "";
		/**
		* @var string Label of the taxes assigned to the purchase order's total
		*/
		public $taxLabel = "";

		/**
		* @var double Percentage amount of tax that the applied to the purchase order's total
		*/
		public $taxRate = 0.0;

		/**
		* @var double Total monetary amount of the purchase order excluding taxes
		*/
		public $totalExTax = 0.0;

		/**
		* @var double Total monetary amount of the purchase order including taxes
		*/
		public $totalIncTax = 0.0;

		/**
		* @var double Total monetary amount of tax applied to the purchase order's total
		*/
		public $totalTax = 0.0;

		/**
		* @var double Total monetary amount of freight inclusive of tax applied to the purchase order's total
		*/
		public $totalFreightIncTax = 0.0;

		/**
		* @var double Total monetary amount of freight excluding tax applied to the purchase order's total
		*/
		public $totalFreightExTax = 0.0;

		/**
		* @var double Total monetary amount of extra charges inclusive of tax applied to the purchase order's total
		*/
		public $totalExtraChargesIncTax = 0.0;

		/**
		* @var double Total monetary amount of extra charges exclusive of tax applied to the purchase order's total
		*/
		public $totalExtraChargesExTax = 0.0;

		/**
		* @var double Total monetary amount of discounts inclusive of tax discounted off the purchase order's total
		*/
		public $totalDiscountsIncTax = 0.0;

		/**
		* @var double Total monetary amount of discounts exclusive of tax discounted off the purchase order's total
		*/
		public $totalDiscountsExTax = 0.0;

		/**
		* @var double Total monetary amount of levies inclusive of tax applied to the purchase order's total
		*/
		public $totalLeviesIncTax = 0.0;

		/**
		* @var double Total monetary amount of levies exclusive of tax applied to the purchase order's total
		*/
		public $totalLeviesExTax = 0.0;

		/**
		* @var double Total monetary amount paid for the purchase order
		*/
		public $totalPaid = 0.0;

		/**
		* @var double Total monetary amount still to be paid for the purchase order
		*/
		public $balance = 0.0;

		/**
		* @var string ISO currency code that denotes the currency that all monetary amounts stored in the purchase order with
		*/
		public $currencyCode = "";

		/**
		* @var double Total quantity across all the purchase order lines
		*/
		public $totalQuantity = 0.0;

		/**
		* @var string Text that describes any information associated with the purchase order
		*/
		public $description = "";

		/**
		* @var string Language that all text is described in. Set it to one of the LANG constants in the ESDocumentConstants class
		*/
		public $language = "";

		/**
		* @var string Text that contains additional comments that have been made for the purchase order
		*/
		public $comment = "";

		/**
		* @var string Code of the freight carrier who delivered the ordered goods
		*/
		public $freightCarrierCode = "";

		/**
		* @var string Name of the freight carrier who delivered the orders goods
		*/
		public $freightCarrierName = "";

		/**
		* @var string Reference code to the system used to process the freight
		*/
		public $freightSystemRefCode = "";

		/**
		* @var string Consignment code issued by the freight carrier to delivery the ordered goods
		*/
		public $freightCarrierConsignCode = "";

		/**
		* @var string Code to track the freight carrier who delivered the ordered goods
		*/
		public $freightCarrierTrackingCode = "";

		/**
		* @var string Code of the service provided by the freight carrier to deliver the ordered goods
		*/
		public $freightCarrierServiceCode = "";

		/**
		* @var string Code of the account in the freight carrier's system
		*/
		public $freightCarrierAccountCode = "";

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
		* @var ESDRecordSupplierAccountEnquiryOrderPurchaseLine[] List of lines in the purchase order
		*/
		public $lines = array();
		
		/**
		* Converts the supplier account enquiry order purchase record into a purchase order record
		* @return ESDRecordSupplierAccountEnquiryOrderPurchase purchase order record and its lines
		*/
		public function convertToOrderPurchaseRecord()
		{
			$orderPurchaseRecord = array();
			$orderLines = array();
			$dateNotSet = 0;
			$totalProducts = 0;

			//iterate through each order line and add to the purchase order record
			foreach( $this->lines as $line)
			{
				$orderLine = new ESDRecordOrderPurchaseLine();
				$taxes = array();
				$orderLine->lineType = ESDocumentConstants::ORDER_LINE_TYPE_PRODUCT;
				$orderLine->salesOrderLineCode = "";
				$orderLine->salesOrderLineNumber = "";
				$orderLine->locationCode = $line->locationCode;
				$orderLine->locationName = "";
				$orderLine->keyLocationID = $line->keyLocationID;
				$orderLine->UNSPSC = $line->UNSPSC;
				$orderLine->language = $line->language;
				$orderLine->quantity = $line->quantityOrdered;
				$orderLine->priceExTax = $line->priceExTax;
				$orderLine->priceIncTax = $line->priceIncTax;
				$orderLine->priceTax = $line->priceTax;
				$orderLine->priceUndiscountedExTax = $line->priceExTax;
				$orderLine->priceUndiscountedIncTax = $line->priceIncTax;
				$orderLine->priceUndiscountedTax = $line->priceTax;
				$orderLine->priceTotalExTax = $line->totalPriceExTax;
				$orderLine->priceTotalIncTax = $line->totalPriceIncTax;
				$orderLine->priceTotalTax = $line->totalPriceTax;
				$orderLine->priceTotalUndiscountedExTax = $line->totalPriceExTax;
				$orderLine->priceTotalUndiscountedIncTax = $line->totalPriceIncTax;
				$orderLine->priceTotalUndiscountedTax = $line->totalPriceTax;
				$orderLine->isPriceFree = ESDocumentConstants::ESD_VALUE_NO;
				$orderLine->entitySetPrice = "";
				$orderLine->unitName = $line->unit;
				$orderLine->keySellUnitID = "";
				$orderLine->sellUnitBaseQuantity = $line->quantityOrdered;
				$orderLine->priceReferenceCode = "";
				$orderLine->priceReferenceType = "";
				$orderLine->isKitted = ESDocumentConstants::ESD_VALUE_NO;;
				$orderLine->kittedProductSetPrice = ESDocumentConstants::ESD_VALUE_NO;
				$orderLine->isReserved = ESDocumentConstants::ESD_VALUE_NO;

				//set product details if the line is for an item
				if(strcasecmp($line->lineType, ESDocumentConstants::RECORD_LINE_TYPE_ITEM) != 0)
				{ 
					$orderLine->keyProductID = $line->lineItemID;
					$orderLine->productCode = $line->lineItemCode;
					$orderLine->productName = "";
					$orderLine->productDescription = $line->description;
					$orderLine->salesOrderProductCode = "";
					$orderLine->width  = 0;
					$orderLine->height = 0;
					$orderLine->depth = 0;
					$orderLine->volume = 0;
					$orderLine->weight = 0;
					$orderLine->widthUnitMeasureCode = "";
					$orderLine->heightUnitMeasureCode = "";
					$orderLine->depthUnitMeasureCode = "";
					$orderLine->volumeUnitMeasureCode = "";
					$orderLine->weightUnitMeasureCode = "";
					$orderLine->drop = $line->drop;
					$orderLine->internalID = $line->internalID;

					//add tax record
					if($line->taxCode != null && strlen(trim($line->taxCode)) > 0)
					{
						$lineTax = new ESDRecordOrderLineTax();
						$lineTax->keyTaxcodeID = "";
						$lineTax->taxcode = $line->taxCode;
						$lineTax->taxcodeLabel = "";
						$lineTax->taxRate = $line->taxCodeRatePercent;
						$lineTax->language = $line->language;
						$lineTax->quantity = $line->quantityOrdered;
						$lineTax->priceTax = $line->priceTax;
						$lineTax->priceTotalTax = $line->totalPriceTax;
						$lineTax->drop = 0;
						$lineTax->internalID = "";
						array_push($taxes, $lineTax);
					}
				}
				else if(strcasecmp($line->lineType, ESDocumentConstants::RECORD_LINE_TYPE_TEXT) != 0)
				{
					$orderLine->lineType = ESDocumentConstants::ORDER_LINE_TYPE_TEXT;
					$orderLine->textDescription = $line->description;
				}
				$orderLine->productDeliveries = array();
				$orderLine->attributes = array();
				$orderLine->taxes = $taxes;
				array_push($orderLines, $orderLine);
			}

			//set details of the purchase order record
			$orderPurchaseRecord->lines = orderLines;
			$orderPurchaseRecord->payments = array();
			$orderPurchaseRecord->surcharges = array();
			$orderPurchaseRecord->purchaseOrderCode = $this->orderID;
			$orderPurchaseRecord->purchaseOrderNumber = $this->orderNumber;
			$orderPurchaseRecord->supplierAccountName = "";
			$orderPurchaseRecord->sentDate = $this->dateNotSet;
			$orderPurchaseRecord->processedDate = $this->dateNotSet;
			$orderPurchaseRecord->dispatchedDate = $this->dateNotSet;
			$orderPurchaseRecord->receivedDate = $this->deliveredDate;
			$orderPurchaseRecord->modifiedDate = $this->orderDate;
			$orderPurchaseRecord->createdDate = $this->creationDate;
			$orderPurchaseRecord->eCommerceUserID = "";
			$orderPurchaseRecord->eCommerceUserName = "";
			$orderPurchaseRecord->eCommerceSystemID = "";
			$orderPurchaseRecord->keyPurchaserID = "";
			$orderPurchaseRecord->purchaserCode = $this->purchaserCode;
			$orderPurchaseRecord->purchaserName = $this->purchaserName;
			$orderPurchaseRecord->purchaserIndividual = ESDocumentConstants::ESD_VALUE_NO;
			$orderPurchaseRecord->invoiceNumbers = array();
			$orderPurchaseRecord->supplierEntity = "";
			$orderPurchaseRecord->supplierPersonName = "";
			$orderPurchaseRecord->supplierOrgName = "";
			$orderPurchaseRecord->supplierAuthorityNumbers = array();
			$orderPurchaseRecord->supplierAuthorityNumberLabels = array();
			$orderPurchaseRecord->supplierAuthorityNumberTypes = array();
			$orderPurchaseRecord->currencyISOCode = $this->currencyCode;
			$orderPurchaseRecord->paymentStatus = "";
			$orderPurchaseRecord->paymentMethod = "";
			$orderPurchaseRecord->paymentProprietaryCode = "";
			$orderPurchaseRecord->paymentReceipt = "";
			$orderPurchaseRecord->paymentAmount = 0;
			$orderPurchaseRecord->keyPaymentTypeID = "";
			$orderPurchaseRecord->salesOrderNumber = "";

			if(strcasecmp($this->referenceType, ESDocumentConstants::RECORD_LINE_TYPE_ORDER_SALE) != 0)
			{
				$orderPurchaseRecord->salesOrderNumber = $this->referenceNumber;
			}
			$orderPurchaseRecord->purchaserSystemID = "";
			$orderPurchaseRecord->purchaserSystemName = "";
			$orderPurchaseRecord->purchaserSystemCode = "";
			$orderPurchaseRecord->sellerSystemID = "";
			$orderPurchaseRecord->sellerSystemName = "";
			$orderPurchaseRecord->sellerSystemCode = "";
			$orderPurchaseRecord->deliveryDescription = "";
			$orderPurchaseRecord->deliveryOrgName = $this->deliveryOrgName;
			$orderPurchaseRecord->deliveryContact = $this->deliveryContact;
			$orderPurchaseRecord->deliveryEmail = "";
			$orderPurchaseRecord->deliveryPhone = "";
			$orderPurchaseRecord->deliveryFax = "";
			$orderPurchaseRecord->deliveryAddress1 = $this->deliveryAddress1;
			$orderPurchaseRecord->deliveryAddress2 = $this->deliveryAddress2;
			$orderPurchaseRecord->deliveryAddress3 = $this->deliveryAddress3;
			$orderPurchaseRecord->deliveryPostcode = $this->deliveryPostcode;
			$orderPurchaseRecord->deliveryRegionName = $this->deliveryStateProvince;
			$orderPurchaseRecord->deliveryCountryName = $this->deliveryCountry;
			$orderPurchaseRecord->deliveryCountryCodeISO2 = $this->deliveryCountryCodeISO2;
			$orderPurchaseRecord->deliveryCountryCodeISO3 = $this->deliveryCountryCodeISO3;
			$orderPurchaseRecord->billingDescription = "";
			$orderPurchaseRecord->billingContact = $this->billingContact;
			$orderPurchaseRecord->billingOrgName = $this->billingOrgName;
			$orderPurchaseRecord->billingEmail = "";
			$orderPurchaseRecord->billingPhone = "";
			$orderPurchaseRecord->billingFax = "";
			$orderPurchaseRecord->billingAddress1 = $this->billingAddress1;
			$orderPurchaseRecord->billingAddress2 = $this->billingAddress2;
			$orderPurchaseRecord->billingAddress3 = $this->billingAddress3;
			$orderPurchaseRecord->billingPostcode = $this->billingPostcode;
			$orderPurchaseRecord->billingRegionName = $this->billingStateProvince;
			$orderPurchaseRecord->billingCountryName = $this->billingCountry;
			$orderPurchaseRecord->billingCountryCodeISO2 = $this->billingCountryCodeISO2;
			$orderPurchaseRecord->billingCountryCodeISO3 = $this->billingCountryCodeISO3;
			$orderPurchaseRecord->email = "";
			$orderPurchaseRecord->totalLines = count($this->lines);
			$orderPurchaseRecord->totalProducts = $this->totalProducts;
			$orderPurchaseRecord->totalLabour = 0;
			$orderPurchaseRecord->totalDownloads = 0;
			$orderPurchaseRecord->totalPriceExTax = $this->totalExTax;
			$orderPurchaseRecord->totalPriceIncTax = $this->totalIncTax;
			$orderPurchaseRecord->totalTax = $this->totalTax;
			$orderPurchaseRecord->totalVolume = 0;
			$orderPurchaseRecord->totalWeight = 0;
			$orderPurchaseRecord->totalSurchargeItems = 0;
			$orderPurchaseRecord->totalSurchargeExTax = 0;
			$orderPurchaseRecord->totalSurchargeIncTax = 0;
			$orderPurchaseRecord->totalSurchargeTax = 0;
			$orderPurchaseRecord->totalPriceUndiscountedExTax = $this->totalExTax;
			$orderPurchaseRecord->totalPriceUndiscountedIncTax = $this->totalIncTax;
			$orderPurchaseRecord->totalPriceUndiscountedTax = $this->totalTax;
			$orderPurchaseRecord->instructions = $this->comment;
			$orderPurchaseRecord->freightCarrierCode = $this->freightCarrierCode;
			$orderPurchaseRecord->freightCarrierName = $this->freightCarrierName;
			$orderPurchaseRecord->freightSystemRefCode = $this->freightSystemRefCode;
			$orderPurchaseRecord->freightCarrierConsignCode = $this->freightCarrierConsignCode;
			$orderPurchaseRecord->freightCarrierTrackingCode = $this->freightCarrierTrackingCode;
			$orderPurchaseRecord->freightCarrierServiceCode = $this->freightCarrierServiceCode;
			$orderPurchaseRecord->freightCarrierAccountCode = $this->freightCarrierAccountCode;
			$orderPurchaseRecord->isDropship = ESDocumentConstants::ESD_VALUE_NO;
			$orderPurchaseRecord->keyLocationID = $this->keyLocationID;
			$orderPurchaseRecord->locationCode = $this->locationCode;
			$orderPurchaseRecord->locationName = $this->locationLabel;
			$orderPurchaseRecord->isMultiLocation = ESDocumentConstants::ESD_VALUE_NO;
			$orderPurchaseRecord->shippingMethod = "";
			$orderPurchaseRecord->accountDiscountRate = 0;
			$orderPurchaseRecord->accountTerritory = "";
			$orderPurchaseRecord->isProductsDelivered = ESDocumentConstants::ESD_VALUE_NO;
			$orderPurchaseRecord->totalVolumeMeasureCode = "";
			$orderPurchaseRecord->totalWeightMeasureCode = "";
			$orderPurchaseRecord->drop = $this->drop;
			$orderPurchaseRecord->internalID = $this->internalID;

			return $orderPurchaseRecord;
		}
	}
?>
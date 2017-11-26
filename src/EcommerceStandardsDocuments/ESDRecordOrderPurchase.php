<?php

	/**
	* Copyright (C) 2017 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;
	use EcommerceStandardsDocuments\ESDocumentConstants;
	
	class ESDRecordOrderPurchase extends ESDocument implements \JsonSerializable
	{
		/**
		* UNPAID - No payment was received as yet
		*/
		const PAYMENT_METHOD_UNPAID = "UNPAID";
		
		/**
		* CREDIT - A payment was made with a credit card
		*/
		const PAYMENT_METHOD_CREDIT = "CREDITCARD";
		
		/**
		* COD - Payment will be made with cash when the goods are delivered to the delivery location
		*/
		const PAYMENT_METHOD_CASHONDELIVERY = "COD";
		
		/**
		* DIRECTDEPOSIT - Payment has been made with a direct bank transfer
		*/
		const PAYMENT_METHOD_DIRECTDEPOSIT = "DIRECTDEPOSIT";
		
		/**
		* QUOTE - No payment was made as a quote was only required
		*/
		const PAYMENT_METHOD_QUOTE = "QUOTE";
		
		/**
		* NONE - No payment was made or needed
		*/
		const PAYMENT_METHOD_NONE = "NONE";
		
		/**
		* PROPRIETARY - A payment was made using a proprietary payment system. PayPal could be one example of this.
		*/
		const PAYMENT_METHOD_PROPRIETARY = "PROPRIETARY";
		
		/**
		* ACCOUNT - A payment will be assigned to a customer account and paid based on the agreed payment terms
		*/
		const PAYMENT_METHOD_ACCOUNT = "ACCOUNT";
		
		/**
		* UNPAID - The order has not been paid for
		*/
		const PAYMENT_STATUS_UNPAID = "UNPAID";
		
		/**
		* PENDING - A payment is currently in the process of being paid for, or is waiting on a process to complete
		*/
		const PAYMENT_STATUS_PENDING = "PENDING";
		
		/**
		* PAID - The order has been paid
		*/
		const PAYMENT_STATUS_PAID = "PAID";
		
		/**
		* DECLINED - A payment failed when trying to be paid
		*/
		const PAYMENT_STATUS_DECLINED = "DECLINED";
		
		/**
		* NONREQUIRED - No payment is required to pay for the order
		*/
		const PAYMENT_STATUS_NONREQUIRED = "NONREQUIRED";
		
		/**
		* @var ESDRecordOrderPurchaseLine[] List of lines to the order
		*/
		public $lines = array();

		/**
		* @var ESDRecordOrderSurcharge[] List of surcharge lines  to the order
		*/
		public $surcharges = array();

		/**
		* @var ESDRecordOrderPayment[] List of payment lines  to the order
		*/
		public $payments = array();

		/**
		* @var string Key that allows the purchase order record to be uniquely identified and linked to.
		*/
		public $keyPurchaseOrderID = "";

		/**
		* @var string Code of the purchase order, may or may not be a unqiue indentifier
		*/
		public $purchaseOrderCode = "";

		/**
		* @var string Number of the purchase order, may or may not be a unique identifier
		*/
		public $purchaseOrderNumber = "";

		/**
		* @var string Key of the supplier account record that is assigned to the order. The supplier indicates the the entity supplying the order.
		*/
		public $keySupplierAccountID = "";

		/**
		* @var string Code of the supplier account, may or not be a unique identifier of the account.
		*/
		public $supplierAccountCode = "";

		/**
		* @var string Name of the supplier account
		*/
		public $supplierAccountName = "";

		/**
		* @var int Date that the order was sent
		*/
		public $sentDate = 0;

		/**
		* @var int Date that the order was processed. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $processedDate = 0;

		/**
		* @var int Date that the order's goods were sent out. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $dispatchedDate = 0;

		/**
		* @var int Date that the order's goods were received by the purchaser. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $receivedDate = 0;

		/**
		* @var int Date that the order was last modified. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $modifiedDate = 0;

		/**
		* @var int Date that the order was created. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $createdDate = 0;

		/**
		* @var string ID of the user in the associated Ecommerce system where the order was created.
		*/
		public $eCommerceUserID = "";

		/**
		* @var string Name of the user in the associated Ecommerce system where the order was created. Ideally this is  to a label of the user, and not the credentials used for a user to login (since that could be a security issue passing around such information).
		*/
		public $eCommerceUserName = "";

		/**
		* @var string ID of the associated Ecommerce system where the order was created. Ideally each system s its own unique identifier, formatted such as ORG_NAME.SYSTEM_NAME
		*/
		public $eCommerceSystemID = "";

		/**
		* @var string Key of the purchaser record linked to the order. Date is in the form of a number in milliseconds since the 01-01-1970 12:00am Epoch in UTC time-zone
		*/
		public $keyPurchaserID = "";

		/**
		* @var string Code of the purchaser.
		*/
		public $purchaserCode = "";

		/**
		* @var string Name of the purchaser.
		*/
		public $purchaserName = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the purchaser is an individual person.
		*/
		public $purchaserIndividual = "";

		/**
		* @var string[] List of the invoice numbers linked to this purchase order.
		*/
		public $invoiceNumbers = array();
		
		/**
		* @var string Supplier entity supplying the order. Set it to one of the constants in the ESDocumentConstants class prefixed with ENTITY_TYPE_
		*/
		public $supplierEntity = "";

		/**
		* @var string Name of the person who is the supplier of the order.
		*/
		public $supplierPersonName = "";

		/**
		* @var string Name of the organisation who is the supplier of the order.
		*/
		public $supplierOrgName = "";

		/**
		* @var string[] Authority numbers of the supplier of the order.
		*/
		public $supplierAuthorityNumbers = array();

		/**
		* @var string[] list of Labels  for the supplier authority numbers. Ensure that the array length is the same as the authorityNumbers property, or left empty
		*/
		public $supplierAuthorityNumberLabels = array();

		/**
		* @var int[] list of authority number types matching the supplier authority numbers. If , must use the ESDocumentConstants that are prefixed with "AUTHORITY_NUM_". Ensure that the array length is the same as the authorityNumbers property, or left empty.
		*/
		public $supplierAuthorityNumberTypes = array();

		/**
		* @var string Currency that all monetary amounts of the order are  with. This currency code must be the 3 digit ISO currency code.
		*/
		public $currencyISOCode = "";

		/**
		* @var string Status indicating how the order has been paid for. Set it to one of the constants in the class prefixed with PAYMENT_STATUS_
		*/
		public $paymentStatus = "";

		/**
		* @var string Method on how the order is being paid for. The field must be  to one of the class's constants prefixed by PAYMENT_METHOD_
		*/
		public $paymentMethod = "";

		/**
		* @var string Code the proprietary system that is used as the payment method for the order.
		*/
		public $paymentProprietaryCode = "";

		/**
		* @var string Number that contains a reference to the payment applied against the order
		*/
		public $paymentReceipt = "";

		/**
		* @var double Monetary amount already paid for the order.
		*/
		public $paymentAmount = 0.0;

		/**
		* @var string Key of the payment type record that is associated to the payment. The payment type record indicates how the payment was made for the order.
		*/
		public $keyPaymentTypeID = "";

		/**
		* @var string Number of the sales order that may be associated to the purchase order. This may be used for referencing purposes.
		*/
		public $salesOrderNumber = "";

		/**
		* @var string ID of the system that the purchasing entity stores its data within.
		*/
		public $purchaserSystemID = "";

		/**
		* @var string Name of the system that the purchasing entity stores its data within.
		*/
		public $purchaserSystemName = "";

		/**
		* @var string Code of the system that the purchasing entity stores its data within.
		*/
		public $purchaserSystemCode = "";

		/**
		* @var string ID of the system that the selling entity stores its data within.
		*/
		public $sellerSystemID = "";

		/**
		* @var string Name of the system that the selling entity stores its data within.
		*/
		public $sellerSystemName = "";

		/**
		* @var string Code of the system that the selling entity stores its data within.
		*/
		public $sellerSystemCode = "";

		/**
		* @var string Description of the address that the ordered goods are being delivered to
		*/
		public $deliveryDescription = "";

		/**
		* @var string Name of the organisation at the address that the ordered goods are being delivered to
		*/
		public $deliveryOrgName = "";

		/**
		* @var string Name of the contact person at the address that the ordered goods are being delivered to
		*/
		public $deliveryContact = "";

		/**
		* @var string Email of the contact person at the address that the ordered goods are being delivered to
		*/
		public $deliveryEmail = "";

		/**
		* @var string Phone number at the address that the ordered goods are being delivered to
		*/
		public $deliveryPhone = "";

		/**
		* @var string Fax number at the address that the ordered goods are being delivered to
		*/
		public $deliveryFax = "";

		/**
		* @var string First delivery address field that the ordered goods are being delivered to
		*/
		public $deliveryAddress1 = "";

		/**
		* @var string Second delivery address field that the ordered goods are being delivered to
		*/
		public $deliveryAddress2 = "";

		/**
		* @var string Third delivery address field that the ordered goods are being delivered to
		*/
		public $deliveryAddress3 = "";

		/**
		* @var string Post code of the address that the ordered goods are being delivered to
		*/
		public $deliveryPostcode = "";

		/**
		* @var string Name of the region/state/province at the address that the ordered goods are being delivered to
		*/
		public $deliveryRegionName = "";

		/**
		* @var string Name of the country at the address that the ordered goods are being delivered to
		*/
		public $deliveryCountryName = "";

		/**
		* @var string Code of the country at the address that the ordered goods are being delivered to as a 2 digit code  by ISO standards.
		*/
		public $deliveryCountryCodeISO2 = "";

		/**
		* @var string Code of the country at the address that the ordered goods are being delivered to as a 3 digit code  by ISO standards.
		*/
		public $deliveryCountryCodeISO3 = "";

		/**
		* @var string Description of the address associated with the billing of the order.
		*/
		public $billingDescription = "";

		/**
		* @var string Name of the contact person at the address associated with the billing of the order.
		*/
		public $billingContact = "";

		/**
		* @var string Name of the organisation that the orders goods are being billing to
		*/
		public $billingOrgName = "";

		/**
		* @var string Email address at the address associated with the billing of the order.
		*/
		public $billingEmail = "";

		/**
		* @var string Phone number at the address associated with the billing of the order.
		*/
		public $billingPhone = "";

		/**
		* @var string Fax number at the address associated with the billing of the order.
		*/
		public $billingFax = "";

		/**
		* @var string First address field associated with the billing of the order.
		*/
		public $billingAddress1 = "";

		/**
		* @var string Second address field associated with the billing of the order.
		*/
		public $billingAddress2 = "";

		/**
		* @var string Third address field associated with the billing of the order.
		*/
		public $billingAddress3 = "";

		/**
		* @var string Postcode of the address associated with the billing of the order.
		*/
		public $billingPostcode = "";

		/**
		* @var string Name of the region/state/province of the address associated with the billing of the order.
		*/
		public $billingRegionName = "";

		/**
		* @var string Name of the country of the address associated with the billing of the order.
		*/
		public $billingCountryName = "";

		/**
		* @var string Code of the country of the address associated with the billing of the order as a two digit code  by the ISO standards.
		*/
		public $billingCountryCodeISO2 = "";

		/**
		* @var string Code of the country of the address associated with the billing of the order as a three digit code  by the ISO standards.
		*/
		public $billingCountryCodeISO3 = "";

		/**
		* @var string Email address  for the order.
		*/
		public $email = "";

		/**
		* @var int Total number of lines in the order.
		*/
		public $totalLines = 0;

		/**
		* @var int Total number of product lines in the order
		*/
		public $totalProducts = 0;

		/**
		* @var int Total number of labour lines in the order
		*/
		public $totalLabour = 0;


		/**
		* @var int Total number of download lines in the order
		*/
		public $totalDownloads = 0;

		/**
		* @var double Total monetary price of the order exclusive of tax
		*/
		public $totalPriceExTax = 0.0;

		/**
		* @var double Total monetary price of the order inclusive of tax
		*/
		public $totalPriceIncTax = 0.0;

		/**
		* @var double Total monetary amount of taxes applied to the order
		*/
		public $totalTax = 0.0;

		/**
		* @var double Total volume of the ordered goods
		*/
		public $totalVolume = 0.0;

		/**
		* @var double Total weight of the ordered goods
		*/
		public $totalWeight = 0.0;

		/**
		* @var int Total number of surcharges applied to the order
		*/
		public $totalSurchargeItems = 0;

		/**
		* @var double Total monetary amount of surcharges applied to the order exclusive of taxes
		*/
		public $totalSurchargeExTax = 0.0;

		/**
		* @var double Total monetary amount of surcharges applied to the order inclusive of taxes
		*/
		public $totalSurchargeIncTax = 0.0;

		/**
		* @var double Total monetary amount of taxes applied to surcharges in the order
		*/
		public $totalSurchargeTax = 0.0;

		/**
		* @var double Total monetary amount of the order before discounts were applied, exclusive of taxes. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedExTax = 0.0;

		/**
		* @var double Total monetary amount of the order before discounts were applied, inclusive of taxes. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedIncTax = 0.0;

		/**
		* @var double Total monetary amount of taxes applied to the order before discounts were applied. This amount may be useful when showing discounts applied to an order.
		*/
		public $totalPriceUndiscountedTax = 0.0;

		/**
		* @var string Text describing instructions on how to handle the order.
		*/
		public $instructions = "";

		/**
		* @var string Code of the freight carrier delivering the ordered goods
		*/
		public $freightCarrierCode = "";

		/**
		* @var string Name of the freight carrier delivering the orders goods
		*/
		public $freightCarrierName = "";

		/**
		* @var string Reference code to the system used to process the freight order
		*/
		public $freightSystemRefCode = "";

		/**
		* @var string Consignment code issued by the freight carrier to delivery the ordered goods
		*/
		public $freightCarrierConsignCode = "";

		/**
		* @var string Code to track the freight carrier delivering the ordered goods
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
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that the is being supplied by a different entity from supplier assigned to the order.
		*/
		public $isDropship = "";

		/**
		* @var string key of the location where the products for the order can be found.
		*/
		public $keyLocationID = "";

		/**
		* @var string Code of the location
		*/
		public $locationCode = "";

		/**
		* @var string Name of the location
		*/
		public $locationName = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes If 'Y' then indicates that the ordered goods are to be obtained across multiple locations.
		*/
		public $isMultiLocation = "";
		
		/**
		* @var string key of the external location where the products for the order can be found. This external location may be the location where goods are being delivered to or held at.
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
		* @var string Method that the order is being shipped by
		*/
		public $shippingMethod = "";

		/**
		* @var double Percentage rate discounted off the order monetary total.
		*/
		public $accountDiscountRate = 0.0;

		/**
		* @var string Territory associated with the customer account
		*/
		public $accountTerritory = "";

		/**
		* @var string Either 'N'-No or 'Y'-Yes. If 'Y' then indicates that all products for the order have been delivered.
		*/
		public $isProductsDelivered = "";

		/**
		* @var string Code of the unit of measure for the volume
		*/
		public $totalVolumeMeasureCode = "";

		/**
		* @var string Code of the unit of measure for the weight
		*/
		public $totalWeightMeasureCode = "";

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
		* serializes the class's properties into JSON, orders properties and filters properties with default values from being returned.
		*/
		public function jsonSerialize() 
		{
			return array_filter([
				'keyPurchaseOrderID' => $this->keyPurchaseOrderID,
				'purchaseOrderCode' => $this->purchaseOrderCode,
				'purchaseOrderNumber' => $this->purchaseOrderNumber,
				'keySupplierAccountID' => $this->keySupplierAccountID,
				'supplierAccountCode' => $this->supplierAccountCode,
				'supplierAccountName' => $this->supplierAccountName,
				'sentDate' => $this->sentDate,
				'processedDate' => $this->processedDate,
				'dispatchedDate' => $this->dispatchedDate,
				'receivedDate' => $this->receivedDate,
				'modifiedDate' => $this->modifiedDate,
				'createdDate' => $this->createdDate,
				'eCommerceUserID' => $this->eCommerceUserID,
				'eCommerceUserName' => $this->eCommerceUserName,
				'eCommerceSystemID' => $this->eCommerceSystemID,
				'keyPurchaserID' => $this->keyPurchaserID,
				'purchaserCode' => $this->purchaserCode,
				'purchaserName' => $this->purchaserName,
				'purchaserIndividual' => $this->purchaserIndividual,
				'invoiceNumbers' => $this->invoiceNumbers,
				'supplierEntity' => $this->supplierEntity,
				'supplierPersonName' => $this->supplierPersonName,
				'supplierOrgName' => $this->supplierOrgName,
				'supplierAuthorityNumbers' => $this->supplierAuthorityNumbers,
				'supplierAuthorityNumberLabels' => $this->supplierAuthorityNumberLabels,
				'supplierAuthorityNumberTypes' => $this->supplierAuthorityNumberTypes,
				'currencyISOCode' => $this->currencyISOCode,
				'paymentStatus' => $this->paymentStatus,
				'paymentMethod' => $this->paymentMethod,
				'paymentProprietaryCode' => $this->paymentProprietaryCode,
				'paymentReceipt' => $this->paymentReceipt,
				'paymentAmount' => $this->paymentAmount,
				'keyPaymentTypeID' => $this->keyPaymentTypeID,
				'salesOrderNumber' => $this->salesOrderNumber,
				'purchaserSystemID' => $this->purchaserSystemID,
				'purchaserSystemName' => $this->purchaserSystemName,
				'purchaserSystemCode' => $this->purchaserSystemCode,
				'sellerSystemID' => $this->sellerSystemID,
				'sellerSystemName' => $this->sellerSystemName,
				'sellerSystemCode' => $this->sellerSystemCode,
				'deliveryDescription' => $this->deliveryDescription,
				'deliveryOrgName' => $this->deliveryOrgName,
				'deliveryContact' => $this->deliveryContact,
				'deliveryEmail' => $this->deliveryEmail,
				'deliveryPhone' => $this->deliveryPhone,
				'deliveryFax' => $this->deliveryFax,
				'deliveryAddress1' => $this->deliveryAddress1,
				'deliveryAddress2' => $this->deliveryAddress2,
				'deliveryAddress3' => $this->deliveryAddress3,
				'deliveryPostcode' => $this->deliveryPostcode,
				'deliveryRegionName' => $this->deliveryRegionName,
				'deliveryCountryName' => $this->deliveryCountryName,
				'deliveryCountryCodeISO2' => $this->deliveryCountryCodeISO2,
				'deliveryCountryCodeISO3' => $this->deliveryCountryCodeISO3,
				'billingDescription' => $this->billingDescription,
				'billingContact' => $this->billingContact,
				'billingOrgName' => $this->billingOrgName,
				'billingEmail' => $this->billingEmail,
				'billingPhone' => $this->billingPhone,
				'billingFax' => $this->billingFax,
				'billingAddress1' => $this->billingAddress1,
				'billingAddress2' => $this->billingAddress2,
				'billingAddress3' => $this->billingAddress3,
				'billingPostcode' => $this->billingPostcode,
				'billingRegionName' => $this->billingRegionName,
				'billingCountryName' => $this->billingCountryName,
				'billingCountryCodeISO2' => $this->billingCountryCodeISO2,
				'billingCountryCodeISO3' => $this->billingCountryCodeISO3,
				'email' => $this->email,
				'totalLines' => $this->totalLines,
				'totalProducts' => $this->totalProducts,
				'totalLabour' => $this->totalLabour,
				'totalDownloads' => $this->totalDownloads,
				'totalPriceExTax' => $this->totalPriceExTax,
				'totalPriceIncTax' => $this->totalPriceIncTax,
				'totalTax' => $this->totalTax,
				'totalVolume' => $this->totalVolume,
				'totalWeight' => $this->totalWeight,
				'totalSurchargeItems' => $this->totalSurchargeItems,
				'totalSurchargeExTax' => $this->totalSurchargeExTax,
				'totalSurchargeIncTax' => $this->totalSurchargeIncTax,
				'totalSurchargeTax' => $this->totalSurchargeTax,
				'totalPriceUndiscountedExTax' => $this->totalPriceUndiscountedExTax,
				'totalPriceUndiscountedIncTax' => $this->totalPriceUndiscountedIncTax,
				'totalPriceUndiscountedTax' => $this->totalPriceUndiscountedTax,
				'instructions' => $this->instructions,
				'freightCarrierCode' => $this->freightCarrierCode,
				'freightCarrierName' => $this->freightCarrierName,
				'freightSystemRefCode' => $this->freightSystemRefCode,
				'freightCarrierConsignCode' => $this->freightCarrierConsignCode,
				'freightCarrierTrackingCode' => $this->freightCarrierTrackingCode,
				'freightCarrierServiceCode' => $this->freightCarrierServiceCode,
				'freightCarrierAccountCode' => $this->freightCarrierAccountCode,
				'isDropship' => $this->isDropship,
				'keyLocationID' => $this->keyLocationID,
				'locationCode' => $this->locationCode,
				'locationName' => $this->locationName,
				'isMultiLocation' => $this->isMultiLocation,
				'externalKeyLocationID' => $this->externalKeyLocationID,
				'externalLocationCode' => $this->externalLocationCode,
				'externalLocationName' => $this->externalLocationName,
				'shippingMethod' => $this->shippingMethod,
				'accountDiscountRate' => $this->accountDiscountRate,
				'accountTerritory' => $this->accountTerritory,
				'isProductsDelivered' => $this->isProductsDelivered,
				'totalVolumeMeasureCode' => $this->totalVolumeMeasureCode,
				'totalWeightMeasureCode' => $this->totalWeightMeasureCode,
				'drop' => $this->drop,
				'internalID' => $this->internalID,
				'lines' => $this->lines,
				'surcharges' => $this->surcharges,
				'payments' => $this->payments
			]);
		}
	}
?>
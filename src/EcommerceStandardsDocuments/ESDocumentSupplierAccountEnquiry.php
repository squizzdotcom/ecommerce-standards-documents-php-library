<?php
	/**
	* Copyright (C) Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce standards document that holds lists of purchase orders for supplier accounts. This document can by used in many ways for enquiring about different data associated to a supplier account's finances.
	* An example of the Supplier Account Enqury Standards document in its JSON serialised form, displaying a list of purchase orders for a supplier account
	* @code 
	* {
	*     "version": 1.5,
	*     "resultStatus": 1,
	*     "message":"The supplier account enquiry purchase order data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 2,
	*     "configs":{},
	*     "orderSaleRecords":
	*      [
	*         {
	*             "keyOrderPurchaseID":"11",
	*             "orderID":"PURCHASEORDER-11",
	*             "keySupplierAccountID":"222",
	*             "supplierAccountCode":"SUPPLIER004",
	*             "totalExTax": 400.00,
	*             "totalIncTax": 440.00,
	*             "totalTax": 40.00,
	*             "totalPaid": 0,
	*             "balance": 440.00
	*         },
	*         {
	*             "keyOrderPurchaseID":"12",
	*             "orderID":"PURCHASEORDER-12",
	*             "keySupplierAccountID":"222",
	*             "supplierAccountCode":"SUPPLIER004",
	*             "orderNumber": "4324234",
	*             "creationDate": 1449132083084,
	*             "orderDate": 1449932083084,
	*             "dueDate": 1449932083084,
	*             "keyLocationID": "456",
	*             "locationCode": "LCT-456",
	*             "locationLabel": "Warehouse",
	*             "locationType": "WAREHOUSE",
	*             "referenceKeyID": "112",
	*             "referenceType": "INVOICE",
	*             "referenceNumber": "1234123",
	*             "supplierReference": "3434343",
	*             "purchaseRepCode": "JD",
	*             "purchaseRepName": "John Doe",
	*             "deliveryContact": "Lee",
	*             "deliveryOrgName": "Lee's Business Pty Ltd",
	*             "deliveryAddress1": "22",
	*             "deliveryAddress2": "Bourkie Street",
	*             "deliveryAddress3": "Melbourne",
	*             "deliveryStateProvince": "Victoria",
	*             "deliveryCountry": "Australia",
	*             "deliveryCountryCodeISO2": "AU",
	*             "deliveryCountryCodeISO3": "AUS",
	*             "deliveryPostcode": "3000",
	*             "billingContact": "Tom",
	*             "billingOrgName": "Lee's Business Pty Ltd",
	*             "billingAddress1": "15",
	*             "billingAddress2": "Bourkie Street",
	*             "billingAddress3": "Melbourne",
	*             "billingStateProvince": "Victoria",
	*             "billingCountry": "3000",
	*             "billingCountryCodeISO2": "AU",
	*             "billingCountryCodeISO3": "AUS",
	*             "billingPostcode": "3000",
	*             "taxNumber": "123 12332 123",
	*             "taxLabel": "GST",
	*             "taxRate": 10,
	*             "totalExTax": 100.00,
	*             "totalIncTax": 110.00,
	*             "totalTax": 10.00,
	*             "totalFreightIncTax": 11.00,
	*             "totalFreightExTax": 10.00,
	*             "totalExtraChargesIncTax": 1.10,
	*             "totalExtraChargesExTax": 1.00,
	*             "totalDiscountsIncTax": 220.00,
	*             "totalDiscountsExTax": 22.00,
	*             "totalLeviesIncTax": 22.00,
	*             "totalLeviesExTax": 20.00,
	*             "totalPaid": 50.00,
	*             "balance": 60.00,
	*             "currencyCode": "AUD",
	*             "totalQuantity": 3,
	*             "description": "",
	*             "language": "EN_AU",
	*             "comment": "Goods to be left by the back entrance"
	*         }
	*     ]
	* }
	*
	* An example of the Supplier Account Enqury Standards document in its JSON serialised form, containing the detail of a single purchase order for a supplier account	
	* {
	*     "version": 1.4,
	*     "resultStatus":"1",
	*     "message":"The supplier account enquiry purchase order detail data has been successfully obtained.",
	*     "configs":{},
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 1,
	*     "orderPurchaseRecords":
	*      [
	*         {
	*             "keyOrderPurchaseID":"112",
	*             "orderID":"PURCHASEORDER-112",
	*             "keySupplierAccountID":"222",
	*             "supplierAccountCode":"SUPPLIER004",
	*             "orderNumber": "4324234",
	*             "creationDate": 1449132083084,
	*             "orderDate": 1449932083084,
	*             "dueDate": 1449932083084,
	*             "expectedDeliveryDate": 1449982083084,
	*             "deliveredDate": 1449982083084,
	*             "keyLocationID": "456",
	*             "locationCode": "LCT-456",
	*             "locationLabel": "Warehouse",
	*             "locationType": "WAREHOUSE",
	*             "referenceKeyID": "112",
	*             "referenceType": "INVOICE",
	*             "referenceNumber": "1234123",
	*             "supplierReference": "3434343",
	*             "purchaseRepCode": "JD",
	*             "purchaseRepName": "John Doe",
	*             "deliveryContact": "Lee",
	*             "deliveryOrgName": "Lee's Business Pty Ltd",
	*             "deliveryAddress1": "22",
	*             "deliveryAddress2": "Bourkie Street",
	*             "deliveryAddress3": "Melbourne",
	*             "deliveryStateProvince": "Victoria",
	*             "deliveryCountry": "Australia",
	*             "deliveryCountryCodeISO2": "AU",
	*             "deliveryCountryCodeISO3": "AUS",
	*             "deliveryPostcode": "3000",
	*             "billingContact": "Tom",
	*             "billingOrgName": "Lee's Business Pty Ltd",
	*             "billingAddress1": "15",
	*             "billingAddress2": "Bourkie Street",
	*             "billingAddress3": "Melbourne",
	*             "billingStateProvince": "Victoria",
	*             "billingCountry": "3000",
	*             "billingCountryCodeISO2": "AU",
	*             "billingCountryCodeISO3": "AUS",
	*             "billingPostcode": "3000",
	*             "taxNumber": "123 12332 123",
	*             "taxLabel": "GST",
	*             "taxRate": 10,
	*             "totalExTax": 100.00,
	*             "totalIncTax": 110.00,
	*             "totalTax": 10.00,
	*             "totalFreightIncTax": 11.00,
	*             "totalFreightExTax": 10.00,
	*             "totalExtraChargesIncTax": 1.10,
	*             "totalExtraChargesExTax": 1.00,
	*             "totalDiscountsIncTax": 220.00,
	*             "totalDiscountsExTax": 22.00,
	*             "totalLeviesIncTax": 22.00,
	*             "totalLeviesExTax": 20.00,
	*             "totalPaid": 50.00,
	*             "balance": 60.00,
	*             "currencyCode": "AUD",
	*             "totalQuantity": 3,
	*             "description": "",
	*             "freightCarrierCode": "ACME-FREIGHT-001",
	*             "freightCarrierName": "ACME Freight Shippers",
	*             "freightSystemRefCode": "SHIP-SYS",
	*             "freightCarrierConsignCode": "CON-23124123",
	*             "freightCarrierTrackingCode": "34325-25243-24343",
	*             "freightCarrierServiceCode": "EXPRESS-24",
	*             "freightCarrierAccountCode": "ACME-001",
	*             "language": "EN_AU",
	*             "comment": "Goods to be left by the back entrance",
	*             "lines":
	*             [
	*                 {
	*                     "keyOrderPurchaseLineID":"4122"
	*                 },
	*                 {
	*                     "keyOrderPurchaseLineID":"4123",
	*                     "lineItemID":"PROD1234453",
	*                     "lineItemCode":"PROD-123",
	*                     "lineType":"ITEM",
	*                     "description":"Tea Towels",
	*                     "language":"EN_AU",
	*                     "unit":"EACH",
	*                     "quantityOrdered": 22,
	*                     "quantityDelivered": 22,
	*                     "quantityBackordered": 0,
	*                     "priceExTax": 300.00,
	*                     "priceIncTax": 330.00,
	*                     "priceTax": 30.00,
	*                     "totalPriceExTax":6600.00,
	*                     "totalPriceIncTax": 7260.00,
	*                     "totalPriceTax": 660,
	*                     "taxCode":"GST",
	*                     "keyLocationID":"456",
	*                     "locationCode":"LCT-456",
	*                     "currencyCode":"AUD",
	*                     "referenceLineItemCode":"",
	*                     "referenceLineCode":""
	*                 },
	*                 {
	*                     "keyInvoiceLineID":"11234124",
	*                     "lineType":"TEXT",
	*                     "description":"Tea towels are packed into cardboard boxes"
	*                 }
	*             ]
	*         }
	*     ]
	* }
	*/
	class ESDocumentSupplierAccountEnquiry extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordSupplierAccountEnquiryOrderPurchase[] list of Supplier Account Enquiry Order Purchase records.
		*/
		public $orderPurchaseRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 					int									status of obtaining the document's data
		*  @param message 						string								message to accompany the result status
		*  @param configs 						array								A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->configs = $configs;
		}
		
		/**
		* serializes the class's properties into JSON, orders properties and filters properties with default values from being returned.
		*/
		public function jsonSerialize()
		{
			return array_filter([
				'version' => $this->version,
				'resultStatus' => $this->resultStatus,
				'message' => $this->message,
				'dataTransferMode' => $this->dataTransferMode,
				'totalDataRecords' => $this->totalDataRecords,
				'configs' => $this->configs,
				'orderPurchaseRecords' => array_filter($this->orderPurchaseRecords)
			]);
		}
	}
?>
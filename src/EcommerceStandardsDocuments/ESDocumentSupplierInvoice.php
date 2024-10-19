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
	* Ecommerce standards document that contains a list of supplier invoice records
	* 
	* An example of the Supplier Invoice Ecommerce Standards document in its JSON serialised form
	* @code 
	* {
	* 	"version": 1.5,
	* 	"resultStatus": "1",
	* 	"message": "The supplier invoice data has been successfully obtained.",
	* 	"configs": {},
	* 	"dataTransferMode": "COMPLETE",
	* 	"totalDataRecords": 2,
	* 	"dataRecords": [{
	* 		"keySupplierInvoiceID": "123"
	* 	},
	* 	{
	* 		"keySupplierInvoiceID": "2231321",
	* 		"supplierInvoiceCode": "SINV-123",
	* 		"supplierInvoiceNumber": "123",
	* 		"purchaseOrderCode": "PO-00000122",
	* 		"purchaseOrderNumber": "00000122",
	* 		"keyPurchaseOrderID": 122, 
	* 		"supplierCustomerInvoiceCode": "SUPPLIER-INV-0001322",
	* 		"supplierCustomerInvoiceNumber": "0001322",
	* 		"keySupplierAccountID": "222",
	* 		"supplierAccountCode": "SUP004",
	* 		"supplierAccountName": "John Smith Industrials",
	* 		"supplierEntity": "ORG",
	* 		"supplierPersonName": "",
	* 		"supplierOrgName": "John Smith Industrials Pty Ltd",
	* 		"supplierAuthorityNumbers": ["ABN-1234-5678"],
	* 		"supplierAuthorityNumberLabels": ["Australian Business Number"],
	* 		"supplierAuthorityNumberTypes": [1],
	* 		"accountDiscountRate": 0,
	* 		"accountTerritory": "VICTORIA-METRO",
	* 		"sentDate": 1448132083084,
	* 		"processedDate": 1449132083084,
	* 		"dispatchedDate": 1450132083084,
	* 		"receivedDate": 1451132083084,
	* 		"modifiedDate": 1452132083084,
	* 		"createdDate": 1447132083084,
	* 		"paymentDueDate": 1451566800000,
	* 		"fullyPaidDate": 1451739600000,
	* 		"keyPurchaserID": "PURCHASER-5",
	* 		"purchaserCode": "SS",
	* 		"purchaserName": "Sarah Smith",
	* 		"purchaserIndividual": "Y",
	* 		"keySalesRepID": "REP-2",
	* 		"salesRepCode": "JD",
	* 		"salesRepName": "John Doe",
	* 		"salesRepIndividual": "Y",
	* 		"currencyISOCode": "AUD",
	* 		"keyPaymentTypeID": "CC-12",
	* 		"paymentStatus": "PAID",
	* 		"paymentMethod": "CREDITCARD",
	* 		"paymentProprietaryCode": "",
	* 		"paymentReceipt": "32423RES3432",
	* 		"paymentAmount": 110.00,
	* 		"salesOrderNumber": "23123",
	* 		"salesOrderCode": "SALE-23123",
	* 		"purchaserSystemID": "ACME-123",
	* 		"purchaserSystemName": "ACME ACCOUNTING SYSTEM",
	* 		"purchaserSystemCode": "AAS",
	* 		"sellerSystemID": "ERP-1",
	* 		"sellerSystemName": "ENTERPRISE RESOURCE PLANNING SYS",
	* 		"sellerSystemCode": "ERPS",
	* 		"eCommerceUserID": "1001",
	* 		"eCommerceUserName": "JohnD",
	* 		"eCommerceSystemID": "MY_ORG.PLATFORM",
	* 		"deliveryDescription": "Primary Delivery Address",
	* 		"deliveryContact": "John Smith",
	* 		"deliveryOrgName": "",
	* 		"deliveryEmail": "js@someemailaddress.comm",
	* 		"deliveryPhone": "+6144433332222",
	* 		"deliveryFax": "+6144433332221",
	* 		"deliveryAddress1": "Unit 5",
	* 		"deliveryAddress2": "22 Bourkie Street",
	* 		"deliveryAddress3": "Melbourne",
	* 		"deliveryPostcode": "3000",
	* 		"deliveryRegionName": "Victoria",
	* 		"deliveryCountryName": "Australia",
	* 		"deliveryCountryCodeISO2": "AU",
	* 		"deliveryCountryCodeISO3": "AUS",
	* 		"billingDescription": "Head Office",
	* 		"billingContact": "Mary Smith",
	* 		"billingOrgName": "Imports Organisation",
	* 		"billingEmail": "ms@someemailaddress.comm",
	* 		"billingPhone": "+61445242323423",
	* 		"billingFax": "+61445242323421",
	* 		"billingAddress1": "15",
	* 		"billingAddress2": "Bourkie Street",
	* 		"billingAddress3": "Melbourne",
	* 		"billingPostcode": "3000",
	* 		"billingRegionName": "Victoria",
	* 		"billingCountryName": "Australia",
	* 		"billingCountryCodeISO2": "AU",
	* 		"billingCountryCodeISO3": "AUS",
	* 		"email": "hs@someemailaddress.comm",
	* 		"totalLines": 4,
	* 		"totalProducts": 2,
	* 		"totalLabour": 1,
	* 		"totalDownloads": 1,
	* 		"totalPriceExTax": 100.00,
	* 		"totalPriceIncTax": 110.00,
	* 		"totalTax": 10.00,
	* 		"totalWeight": 35,
	* 		"totalVolume": 10,
	* 		"totalVolumeMeasureCode": "KG",
	* 		"totalWeightMeasureCode": "METRES-CUBED",
	* 		"totalSurchargeItems": 1,
	* 		"totalSurchargeExTax": 20.00,
	* 		"totalSurchargeIncTax": 22.00,
	* 		"totalSurchargeTax": 2.00,
	* 		"totalPriceUndiscountedExTax": 140.00,
	* 		"totalPriceUndiscountedIncTax": 154.00,
	* 		"totalPriceUndiscountedTax": 14.00,
	* 		"instructions": "Please leave the goods at the back door",
	* 		"freightCarrierCode": "ACME-F",
	* 		"freightCarrierName": "Acme Freight Carrier",
	* 		"freightSystemRefCode": "334234-23423-234-343242",
	* 		"freightCarrierConsignCode": "34423423424",
	* 		"freightCarrierTrackingCode": "767567-56765-5676567",
	* 		"freightCarrierServiceCode": "ROUTING-FREIGHT",
	* 		"freightCarrierAccountCode": "FREI-1234",
	* 		"isDropship": "N",
	* 		"keyLocationID": "456",
	* 		"locationCode": "LCT-456",
	* 		"locationName": "Warehouse",
	* 		"isMultiLocation": "N",
	* 		"externalKeyLocationID": "EXT-123",
	* 		"externalLocationCode": " RESELLER-123",
	* 		"externalLocationName": " Paper Reseller's Warehouse 123",
	* 		"shippingMethod": "N",
	* 		"isProductsDelivered": "N",
	* 		"lines": [{
	* 			"lineType": "PRODUCT"
	* 		},
	* 		{
	* 			"lineType": "PRODUCT",
	* 			"purchaseOrderLineCode": "SWISH-002",
	* 			"purchaseOrderLineNumber": "2",
	* 			"customerInvoiceLineCode": "SWISH-002",
	* 			"customerInvoiceLineNumber": "2",
	* 			"salesOrderLineCode": "SUPSWISH-003",
	* 			"salesOrderLineNumber": "3",
	* 			"locationCode": "LCT-456",
	* 			"locationName": "Warehouse",
	* 			"keyLocationID": "456",
	* 			"externalKeyLocationID": "EXT-123",
	* 			"externalLocationCode": " RESELLER-123",
	* 			"externalLocationName": " Paper Reseller's Warehouse 123",
	* 			"language": "EN_AU",
	* 			"isInventoried": "Y",
	* 			"quantityInvoiced": 2,
	* 			"quantityDelivered": 2,
	* 			"quantityBackordered": 0,
	* 			"quantityOrdered": 2,
	* 			"sellUnitBaseQuantity": 2,
	* 			"priceExTax": 10.00,
	* 			"priceIncTax": 11.00,
	* 			"priceTax": 1.00,
	* 			"priceUndiscountedExTax": 40.00,
	* 			"priceUndiscountedIncTax": 44.00,
	* 			"priceUndiscountedTax": 4.00,
	* 			"priceTotalExTax": 20.00,
	* 			"priceTotalIncTax": 22.00,
	* 			"priceTotalTax": 2.00,
	* 			"priceTotalUndiscountedExTax": 80.00,
	* 			"priceTotalUndiscountedIncTax": 88.00,
	* 			"priceTotalUndiscountedTax": 8.00,
	* 			"isPriceFree": "N",
	* 			"entitySetPrice": "SYSTEM",
	* 			"keySellUnitID": "EA",
	* 			"unitName": "REAM",
	* 			"UNSPSC": "141115",
	* 			"priceReferenceCode": "SALE-34",
	* 			"priceReferenceType": "C",
	* 			"isKitted": "N",
	* 			"kittedProductSetPrice": "N",
	* 			"isReserved": "N",
	* 			"keyProductID": "1234",
	* 			"productCode": "PROD-001",
	* 			"productName": "Swisho Green Paper",
	* 			"productDescription": "Swisho green coloured paper is the ultimate green paper.",
	* 			"customerInvoiceProductCode": "SUP-PAPER-SWISH",
	* 			"purchaseOrderProductCode": "SWISH-001",
	* 			"salesOrderProductCode": "SUP-PAPER-SWISH",
	* 			"supplierItemCode": "SUP-PAPER-SWISH",
	* 			"width": 20.1,
	* 			"height": 21,
	* 			"depth": 29.7,
	* 			"volume": 10,
	* 			"weight": 10.00,
	* 			"widthUnitMeasureCode": "METRES",
	* 			"heightUnitMeasureCode": "METRES",
	* 			"depthUnitMeasureCode": "METRES",
	* 			"volumeUnitMeasureCode": "METRES-CUBED",
	* 			"weightUnitMeasureCode": "KG",
	* 			"keyGLAccountID": "GLA2",
	* 			"glAccountCode": "570",
	* 			"glAccountName": "Office Expense",
	* 			"taxes": [{
	* 				"keyTaxcodeID": "456",
	* 				"taxcode": "GST",
	* 				"taxcodeLabel": "Goods And Services Tax",
	* 				"taxRate": 10.00,
	* 				"language": "EN_AU",
	* 				"quantity": 2,
	* 				"priceTax": 1.00,
	* 				"priceTotalTax": 2.00
	* 			}],
	* 			"attributes": [{
	* 				"keyProfileID": "1234123",
	* 				"profileCode": "ORD-PROF-1",
	* 				"profileName": "Style",
	* 				"values": [{
	* 					"keyAttributeID": "3423423",
	* 					"attributeCode": "coating-paper-1",
	* 					"attributeName": "Coating",
	* 					"attributeValue": "Glossy"
	* 				},
	* 				{
	* 					"keyAttributeID": "45345345",
	* 					"attributeCode": "coating-paper-comment",
	* 					"attributeName": "Comment",
	* 					"attributeValue": "Make sure that the edges are not too sharp"
	* 				}]
	* 			}]
	* 		},
	* 		{
	* 			"lineType": "DOWNLOAD",
	* 			"purchaseOrderLineCode": "SWISH-002",
	* 			"purchaseOrderLineNumber": "1",
	* 			"language": "EN_AU",
	* 			"quantityInvoiced": 1,
	* 			"priceExTax": 20.00,
	* 			"priceIncTax": 22.00,
	* 			"priceTax": 2.00,
	* 			"priceTotalExTax": 20.00,
	* 			"priceTotalIncTax": 22.00,
	* 			"priceTotalTax": 2.00,
	* 			"isPriceFree": "N",
	* 			"entitySetPrice": "SALESREP",
	* 			"unitName": "file",
	* 			"keyDownloadID": "DOW2",
	* 			"downloadCode": "Download 2",
	* 			"downloadName": "Track01 - Standards",
	* 			"downloadDescription": "Listen to My Rock Band's first track off their new album called Standards.",
	* 			"customerInvoiceDownloadCode": "SUPPLIER-DOWNLOAD-ABC",
	* 			"salesOrderDownloadCode": "SUPPLIER-DOWNLOAD-DEF",
	* 			"purchaseOrderDownloadCode": "DOWN-1234",
	* 			"taxes": [{
	* 				"keyTaxcodeID": "456",
	* 				"taxcode": "GST",
	* 				"taxcodeLabel": "Goods And Services Tax",
	* 				"taxRate": 10.00,
	* 				"language": "EN_AU",
	* 				"quantity": 1,
	* 				"priceTax": 2.00,
	* 				"priceTotalTax": 2.00
	* 			}]
	* 		},
	* 		{
	* 			"lineType": "LABOUR",
	* 			"purchaseOrderLineCode": "SWISH-002",
	* 			"purchaseOrderLineNumber": "1",
	* 			"language": "EN_AU",
	* 			"quantityInvoiced": 1,
	* 			"priceExTax": 40.00,
	* 			"priceIncTax": 44.00,
	* 			"priceTax": 4.00,
	* 			"priceTotalExTax": 40.00,
	* 			"priceTotalIncTax": 44.00,
	* 			"priceTotalTax": 4.00,
	* 			"isPriceFree": "N",
	* 			"entitySetPrice": "SYSTEM",
	* 			"unitName": "hour",
	* 			"keylabourID": "LAB1",
	* 			"labourCode": "DELIVERY-HELP",
	* 			"labourName": "Paper Delivery Help",
	* 			"labourDescription": "Service to help deliver and place paper products internally at the delivery address",
	* 			"customerInvoiceLabourCode": "SUP-LABOUR-DEL",
	* 			"salesOrderLabourCode": "SUP-LABOUR-DEL",
	* 			"purchaseOrderLabourCode": "LAB-1234",
	* 			"taxes": [{
	* 				"keyTaxcodeID": "456",
	* 				"taxcode": "GST",
	* 				"taxcodeLabel": "Goods And Services Tax",
	* 				"taxRate": 10.00,
	* 				"language": "EN_AU",
	* 				"quantity": 1,
	* 				"priceTax": 4.00,
	* 				"priceTotalTax": 4.00
	* 			}]
	* 		},
	* 		{
	* 			"lineType": "TEXT",
	* 			"textDescription": "This invoice needs urgent payment to ensure that the supply of future deliveries continues"
	* 		}],
	* 		"surcharges": [{
	* 			"surchargeCode": "WEB_CC_SURCHARGE"
	* 		},
	* 		{
	* 			"surchargeCode": "WEB_FREIGHT",
	* 			"name": "Freight Surcharge",
	* 			"priceExTax": 20.00,
	* 			"priceIncTax": 22.00,
	* 			"priceTax": 2.00,
	* 			"taxes": [{
	* 				"keyTaxcodeID": "456",
	* 				"taxcode": "GST",
	* 				"taxcodeLabel": "Goods And Services Tax",
	* 				"taxRate": 10.00,
	* 				"language": "EN_AU",
	* 				"quantity": 1,
	* 				"priceTax": 2.00,
	* 				"priceTotalTax": 2.00
	* 			}]
	* 		}],
	* 		"payments": [
	* 		{
	* 			"paymentMethod": "PROPRIETARY",
	* 			"paymentAmount": 20.00,
	* 			"paymentReceipt": "PP-12321-543221",
	* 			"paymentProprietaryCode": "PAYPAL",
	* 			"keyPaymentTypeID": "943",
	* 			"paidDate": 1451739600000
	* 		},
	* 		{
	* 			"paymentMethod": "PROPRIETARY",
	* 			"paymentAmount": 10.00,
	* 			"paymentReceipt": "ZP-12321",
	* 			"paymentProprietaryCode": "ZIPPAY",
	* 			"keyPaymentTypeID": "432",
	* 			"paidDate": 1451739600000
	* 		}]
	* 	}]
	* }
	*/
	class ESDocumentSupplierInvoice extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordSupplierInvoice[] List of supplier invoice records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		*  @param resultStatus 						int							status of obtaining the document's data
		*  @param message 							string						message to accompany the result status
		*  @param supplierInvoices					ESDRecordSupplierInvoice[]	list of surcharge records
		*  @param configs 							array						A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $supplierInvoices = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $supplierInvoices;
			$this->configs = $configs;
			if ($supplierInvoices != null)
			{
				$this->totalDataRecords = count($supplierInvoices);
			}
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
				'dataRecords' => array_filter($this->dataRecords)
			]);
		}
	}
?>
<?php
	/**
	* Copyright (C) 2018 Squizz PTY LTD
	* This program is free software: you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
	* This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.
	* You should have received a copy of the GNU General Public License along with this program.  If not, see http://www.gnu.org/licenses/.
	*/
	namespace EcommerceStandardsDocuments;
	use EcommerceStandardsDocuments\ESDocument;

	/**
	* Ecommerce standards document that holds lists of invoice, transaction, sales order, back order, credit or payment record lines for customer accounts. This document can by used in many ways for enquiring about different line data associated to a customer account.
	* 
	* An example of the Customer Account Enqury Line Standards document in its JSON serialised form, displaying a list of invoice lines for a customer account
	* 
	*@code 
	*{
	*     "version": 1.2,
	*     "resultStatus": 1,
	*     "message":"The customer account enquiry invoice line data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 1,
	*     "configs":{},
	*     "invoiceLineRecords":
	*      [
	*         {
	*             "keyInvoiceLineID":"11234122"
	*         },
	*         {
	*             "keyInvoiceLineID":"11234123",
	*             "lineItemID":"PROD1234453",
	*             "lineItemCode":"PROD-123",
	*             "lineType":"ITEM",
	*             "description":"Tea Towels",
	*             "language":"EN_AU",
	*             "unit":"EACH",
	*             "quantityOrdered": 22,
	*             "quantityDelivered": 22,
	*             "quantityBackordered": 0,
	*             "priceExTax": 300.00,
	*             "priceIncTax": 330.00,
	*             "priceTax": 30.00,
	*             "totalPriceExTax":6600.00,
	*             "totalPriceIncTax": 7260.00,
	*             "totalPriceTax": 660,
	*             "taxCode":"GST",
	*             "keyLocationID":"456",
	*             "locationCode":"LCT-456",
	*             "currencyCode":"AUD",
	*             "referenceLineItemCode":"",
	*             "referenceLineCode":""
	*          },
	*         {
	*             "keyInvoiceLineID":"11234124",
	*             "lineType":"TEXT",
	*             "description":"Tea towels are packed into cardboard boxes"
	*         }
	*     ]
	* }
	* 
	* An example of the Customer Account Enqury Line Standards document in its JSON serialised form, displaying a list of sales order lines for a customer account
	* 
	* {
	*     "resultStatus":"1",
	*     "message":"The customer account enquiry sales order line data has been successfully obtained.",
	*     "configs":{},
	*     "dataTransferMode": "COMPLETE",
	*     "version": 1.0,
	*     "totalDataRecords": 1,
	*     "orderSaleLineRecords":
	*      [
	*         {
	*             "keyOrderSaleLineID":"4122"
	*         },
	*         {
	*             "keyOrderSaleLineID":"4123",
	*             "lineItemID":"PROD1234453",
	*             "lineItemCode":"PROD-123",
	*             "lineType":"ITEM",
	*             "description":"Tea Towels",
	*             "language":"EN_AU",
	*             "unit":"EACH",
	*             "quantityOrdered": 22,
	*             "quantityDelivered": 22,
	*             "quantityBackordered": 0,
	*             "priceExTax": 300.00,
	*             "priceIncTax": 330.00,
	*             "priceTax": 30.00,
	*             "totalPriceExTax":6600.00,
	*             "totalPriceIncTax": 7260.00,
	*             "totalPriceTax": 660,
	*             "taxCode":"GST",
	*             "keyLocationID":"456",
	*             "locationCode":"LCT-456",
	*             "currencyCode":"AUD",
	*             "referenceLineItemCode":"",
	*             "referenceLineCode":""
	*         },
	*         {
	*             "keyInvoiceLineID":"11234124",
	*             "lineType":"TEXT",
	*             "description":"Tea towels are packed into cardboard boxes"
	*         }
	*     ]
	* }
	* 
	* An example of the Customer Account Enqury Line Standards document in its JSON serialised form, displaying a list of credit lines for a customer account
	* 
	* {
	*     "version": 1.2,
	*     "resultStatus": 1,
	*     "message":"The customer account enquiry credit line data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 1,
	*     "configs":{},
	*     "creditLineRecords":
	*      [
	*         {
	*             "keyCreditLineID":"4122"
	*         },
	*         {
	*             "keyCreditLineID":"4123",
	*             "lineItemID":"123123",
	*             "lineItemCode":"CREDIT-123123",
	*             "lineType":"ITEM",
	*             "description":"Tea Towels",
	*             "language":"EN_AU",
	*             "referenceKeyID": "112",
	*             "referenceType": "INVOICE",
	*             "referenceNumber": "1234123",
	*             "unit":"EACH",
	*             "quantity": 1,
	*             "priceExTax": 300.00,
	*             "priceIncTax": 330.00,
	*             "priceTax": 30.00,
	*             "totalPriceExTax": 300.00,
	*             "totalPriceIncTax": 330.00,
	*             "totalPriceTax": 30.00,
	*             "taxCode":"GST",
	*             "currencyCode":"AUD"
	*         }
	*     ]
	* }
	* 
	* An example of the Customer Account Enqury Line Standards document in its JSON serialised form, displaying a list of payment lines for a customer account
	* {
	*     "version": 1.2,
	*     "resultStatus": 1,
	*     "message":"The customer account enquiry payment line data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 1,
	*     "configs":{},
	*     "paymentLineRecords":
	*      [
	*         {
	*             "keyPaymentLineID":"4122"
	*         },
	*         {
	*             "keyPaymentLineID":"4123",
	*             "lineItemID":"5435",
	*             "lineItemCode":"PAYMENT-5435",
	*             "lineType":"ITEM",
	*             "referenceKeyID": "112",
	*             "referenceType": "INVOICE",
	*             "referenceNumber": "1234123",
	*             "description":"Payment for invoice #1234123",
	*             "language":"EN_AU",
	*             "currencyCode":"AUD",
	*             "amount": 100.00
	*         }
	*     ]
	* }
	* 
	* An example of the Customer Account Enqury Line Standards document in its JSON serialised form, displaying a list of back order lines for a customer account
	* 
	* {
	*     "version": 1.2,
	*     "resultStatus": 1,
	*     "message":"The customer account enquiry back order line data has been successfully obtained.",
	*     "dataTransferMode": "COMPLETE",
	*     "totalDataRecords": 1,
	*     "configs":{},
	*     "backOrderLineRecords":
	*      [
	*         {
	*             "keyBackOrderLineID":"4122"
	*         },
	*         {
	*             "keyBackOrderLineID":"4123",
	*             "lineItemID":"PROD1234453",
	*             "lineItemCode":"PROD-123",
	*             "lineType":"ITEM",
	*             "description":"Tea Towels",
	*             "language":"EN_AU",
	*             "unit":"EACH",
	*             "quantityOrdered": 22,
	*             "quantityDelivered": 22,
	*             "quantityBackordered": 0,
	*             "priceExTax": 300.00,
	*             "priceIncTax": 330.00,
	*             "priceTax": 30.00,
	*             "totalPriceExTax":6600.00,
	*             "totalPriceIncTax": 7260.00,
	*             "totalPriceTax": 660,
	*             "taxCode":"GST",
	*             "keyLocationID":"456",
	*             "locationCode":"LCT-456",
	*             "currencyCode":"AUD",
	*             "referenceLineItemCode":"",
	*             "referenceLineCode":""
	*         },
	*         {
	*             "keyBackOrderLineID":"11234124",
	*             "lineType":"TEXT",
	*             "description":"Tea towels are packed into cardboard boxes"
	*         }
	*     ]
	* }
	*/
	class ESDocumentCustomerAccountEnquiryLine extends ESDocument implements \JsonSerializable
	{	
		/**
		* @var ESDRecordCustomerAccountEnquiryInvoiceLine[] list of Customer Account Enquiry Invoice line records.
		*/
        public $invoiceLineRecords = array();
        /**
		* @var ESDRecordCustomerAccountEnquiryOrderSaleLine[] list of Customer Account Enquiry Order Sale line records.
		*/
        public $orderSaleLineRecords = array();
        /**
		* @var ESDRecordCustomerAccountEnquiryBackOrderLine[] list of Customer Account Enquiry Back Order line records.
		*/
        public $backOrderLineRecords = array();
        /**
		* @var ESDRecordCustomerAccountEnquiryPaymentLine[] list of Customer Account Enquiry Payment line records.
		*/
        public $paymentLineRecords = array();
        /**
		* @var ESDRecordCustomerAccountEnquiryCreditLine[] list of Customer Account Enquiry Credit line records.
		*/
        public $creditLineRecords = array();
        /**
		* @var ESDRecordCustomerAccountEnquiryQuoteLine[] list of Customer Account Enquiry Quote line records.
		*/
        public $quoteLineRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 						int									status of obtaining the document's data
		*  @param message 							string								message to accompany the result status
		*  @param configs 							array								A list of key value pairs that contain additional information about the document.
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
				'invoiceLineRecords' => array_filter($this->invoiceLineRecords),
				'orderSaleLineRecords' => array_filter($this->orderSaleLineRecords),
				'backOrderLineRecords' => array_filter($this->backOrderLineRecords),
				'paymentLineRecords' => array_filter($this->paymentLineRecords),
				'creditLineRecords' => array_filter($this->creditLineRecords),
				'quoteLineRecords' => array_filter($this->quoteLineRecords)
			]);
		}
	}
?>
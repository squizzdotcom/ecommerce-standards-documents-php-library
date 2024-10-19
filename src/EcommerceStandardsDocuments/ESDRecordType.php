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
	* Contains the types of Ecommerce Standards Document (ESD) records that the library contains
	*/
	class ESDRecordType
	{
		const ALTERNATE_CODE = 1;
		const ASSET = 80;
		const ATTACHMENT = 2;
		const ATTRIBUTE = 3;
		const ATTRIBUTE_PROFILE = 4;
		const ATTRIBUTE_VALUE = 5;
		const CATEGORY = 6;
		const COMBINATION_PROFILE = 7;
		const COMBINATION_PROFILE_FIELD = 8;
		const CONTACT = 9;
		const CUSTOMER_ACCOUNT = 10;
		const CUSTOMER_ACCOUNT_ADDRESS = 11;
		const CUSTOMER_ACCOUNT_CONTRACT = 12;
		const CUSTOMER_ACCOUNT_ENQUIRY_BACKORDER = 13;
		const CUSTOMER_ACCOUNT_ENQUIRY_BACKORDER_LINE = 14;
		const CUSTOMER_ACCOUNT_ENQUIRY_CREDIT = 15;
		const CUSTOMER_ACCOUNT_ENQUIRY_CREDIT_LINE = 16;
		const CUSTOMER_ACCOUNT_ENQUIRY_INVOICE = 17;
		const CUSTOMER_ACCOUNT_ENQUIRY_INVOICE_LINE = 18;
		const CUSTOMER_ACCOUNT_ENQUIRY_ORDER_SALE = 19;
		const CUSTOMER_ACCOUNT_ENQUIRY_ORDER_SALE_LINE = 20;
		const CUSTOMER_ACCOUNT_ENQUIRY_PAYMENT = 21;
		const CUSTOMER_ACCOUNT_ENQUIRY_PAYMENT_LINE = 22;
		const CUSTOMER_ACCOUNT_ENQUIRY_PRODUCT_PRICE = 23;
		const CUSTOMER_ACCOUNT_ENQUIRY_TRANSACTION = 24;
		const CUSTOMER_ACCOUNT_ENQUIRY_QUOTE = 62;
		const CUSTOMER_ACCOUNT_ENQUIRY_QUOTE_LINE = 63;
		const CUSTOMER_ACCOUNT_PAYMENT = 25;
		const CUSTOMER_INVOICE = 67;
		const CUSTOMER_INVOICE_LINE = 68;
		const CUSTOMER_ACCOUNT_PAYMENT_RECORD = 26;
		const DELIVERY_NOTICE = 76;
		const DELIVERY_NOTICE_LINE = 77;
		const DOWNLOAD = 27;
		const FLAG = 28;
		const FLAG_MAPPING = 29;
		const IMAGE = 30;
		const INVOICE_LINE_ATTRIBUTE = 71;
		const INVOICE_LINE_ATTRIBUTE_PROFILE = 72;
		const INVOICE_LINE_TAX = 73;
		const INVOICE_PAYMENT = 74;
		const INVOICE_SURCHARGE = 75;
		const ITEM_GROUP = 31;
		const ITEM_RELATION = 32;
		const KIT_COMPONENT = 33;
		const LABOUR = 34;
		const LOCATION = 35;
		const MAKER = 64;
		const MAKER_MODEL = 65;
		const MAKER_MODEL_MAPPING = 66;
		const ORDER_LINE_ATTRIBUTE = 36;
		const ORDER_LINE_ATTRIBUTE_PROFILE = 37;
		const ORDER_LINE_TAX = 38 ;
		const ORDER_PAYMENT = 39;
		const ORDER_PRODUCT_DELIVERY = 40;
		const ORDER_PURCHASE = 41;
		const ORDER_PURCHASE_LINE = 42;
		const ORDER_SALE = 43;
		const ORDER_SALE_LINE = 44;
		const ORDER_SURCHARGE = 45;
		const PAYMENT_TYPE = 46;
		const PRICE = 47;
		const PRICE_LEVEL = 48;
		const PRODUCT = 49;
		const PRODUCT_COMBINATION = 50;
		const PRODUCT_COMBINATION_PARENT = 51;
		const PURCHASER = 52;
		const SALES_REP = 53;
		const SELL_UNIT = 54;
		const STOCK_QUANTITY = 55;
		const SUPPLIER_ACCOUNT = 56;
		const SUPPLIER_ACCOUNT_ADDRESS = 57;
		const SUPPLIER_ACCOUNT_ENQUIRY_ORDER_PURCHASE = 58;
		const SUPPLIER_ACCOUNT_ENQUIRY_ORDER_PURCHASE_LINE = 59;
		const SUPPLIER_INVOICE = 69;
		const SUPPLIER_INVOICE_LINE = 70;
		const SURCHARGE = 60;
		const TAXCODE = 61;
	}
?>
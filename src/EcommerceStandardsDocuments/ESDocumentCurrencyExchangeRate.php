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
	* Ecommerce standards document that holds a list of currency exchange rate records
	* An example of the currency exchange rate Ecommerce Standards document in its JSON serialised form
	* 
	* @code 
	* {
	*      "version": 1.5,
	*      "resultStatus": 1,
	*      "message":"The currency exchange rate data has been successfully obtained.",
	*      "dataTransferMode": "COMPLETE",
	*      "totalDataRecords": 5,
	*      "configs":{"dataFields":"keyCurrencyExchangeRateID,sellCurrencyCode,sellCurrencyName,sellCurrencyType,buyCurrencyCode,buyCurrencyName,buyCurrencyType,exchangeRate"},
	*      "dataRecords":
	*       [
	*          {
	*              "keyCurrencyExchangeRateID":"1"
	*          },
	*          //exchange rate from Australian Dollars to US dollars, $1 AUD sells for $0.70 USD
	*          {
	*              "keyCurrencyExchangeRateID":"2",
	*              "sellCurrencyCode":"AUD",
	*              "sellCurrencyName":"Australian Dollars",
	*              "sellCurrencyType":"FIAT",
	*              "buyCurrencyCode":"USD",
	*              "buyCurrencyName":"United States Dollars",
	*              "buyCurrencyType":"FIAT",
	*              "exchangeRate": 0.7000
	*          },
	*          //exchange rate USD to AUD, $1 USD sells for $1.30 AUD
	*          {
	*              "keyCurrencyExchangeRateID":"3",
	*              "sellCurrencyCode":"USD",
	*              "sellCurrencyName":"United States Dollars",
	*              "sellCurrencyType":"FIAT",
	*              "buyCurrencyCode":"AUD",
	*              "buyCurrencyName":"Australian Dollars",
	*              "buyCurrencyType":"FIAT",
	*              "exchangeRate": 1.3000
	*          },
	*          //exchange rate USD to EUR, $1 USD sells for €0.7727 EUR
	*          {
	*              "keyCurrencyExchangeRateID":"4AB",
	*              "sellCurrencyCode":"USD",
	*              "sellCurrencyName":"United States Dollars",
	*              "sellCurrencyType":"FIAT",
	*              "buyCurrencyCode":"EUR",
	*              "buyCurrencyName":"Euros",
	*              "buyCurrencyType":"FIAT",
	*              "exchangeRate": 0.7727
	*          },
	*          //exchange rate Bitcoin to US Dollars, 1 Bitcoin sells for $8023.60 US Dollars
	*          {
	*              "keyCurrencyExchangeRateID":"5CC",
	*              "sellCurrencyCode":"BTC",
	*              "sellCurrencyName":"Bitcoins",
	*              "sellCurrencyType":"CRYPTO",
	*              "buyCurrencyCode":"USD",
	*              "buyCurrencyName":"United States Dollars",
	*              "buyCurrencyType":"FIAT",
	*              "exchangeRate": 8023.6000
	*          }
	*      ]
	*  }
	*/
	class ESDocumentCurrencyExchangeRate extends ESDocument implements \JsonSerializable
	{
		/**
		* @var ESDRecordCurrencyExchangeRate[] List of currency exchange rate records
		*/
		public $dataRecords = array();
		
		/**
		* Constructor
		* 
		*  @param resultStatus 			int								status of obtaining the document's data
		*  @param message 				string							message to accompany the result status
		*  @param taxcodeRecords		ESDRecordCurrencyExchangeRate[]	list of currency exchange rate records
		*  @param configs 				array							A list of key value pairs that contain additional information about the document.
		*/
		public function __construct($resultStatus = 0, $message = "", $currencyExchangeRates = array(), $configs = array())
		{
			$this->resultStatus = $resultStatus;
			$this->message = $message;
			$this->dataRecords = $currencyExchangeRates;
			$this->configs = $configs;
			if ($currencyExchangeRates != null)
			{
				$this->totalDataRecords = count($currencyExchangeRates);
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

<?php

/*
 * Copyright (C) 2016 Cristian Tala Sánchez
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace ctala\tbkwslib\classes;

use SoapClient;
use ctala\tbkwslib\classes\getTransactionResult;
use ctala\tbkwslib\classes\getTransactionResultResponse;
use ctala\tbkwslib\classes\transactionResultOutput;
use ctala\tbkwslib\classes\cardDetail;



use ctala\tbkwslib\classes\wsTransactionDetailOutput;
use ctala\tbkwslib\classes\wsTransactionDetail;
use ctala\tbkwslib\classes\acknowledgeTransaction;
use ctala\tbkwslib\classes\acknowledgeTransactionResponse;
use ctala\tbkwslib\classes\initTransaction;
use ctala\tbkwslib\classes\wsInitTransactionInput;
use ctala\tbkwslib\classes\wpmDetailInput;
use ctala\tbkwslib\classes\initTransactionResponse;
use wsInitTransactionOutput;
use ctala\tbkwslib\classes\wsTransactionType;
 

class WSWebpayServiceImplService extends SoapClient {

    /**
     * @var array $classmap The defined classes
     * @access private
     */
    private static $classmap = array(
        'getTransactionResult' => '\getTransactionResult',
        'getTransactionResultResponse' => '\getTransactionResultResponse',
        'transactionResultOutput' => '\transactionResultOutput',
        'cardDetail' => '\cardDetail',
        'wsTransactionDetailOutput' => '\wsTransactionDetailOutput',
        'wsTransactionDetail' => '\wsTransactionDetail',
        'acknowledgeTransaction' => '\acknowledgeTransaction',
        'acknowledgeTransactionResponse' => '\acknowledgeTransactionResponse',
        'initTransaction' => '\initTransaction',
        'wsInitTransactionInput' => '\wsInitTransactionInput',
        'wpmDetailInput' => '\wpmDetailInput',
        'initTransactionResponse' => '\initTransactionResponse',
        'wsInitTransactionOutput' => '\wsInitTransactionOutput');

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     * @access public
     */
    public function __construct(array $options = array(), $wsdl = 'https://webpay3g.orangepeople.cl/WSWebpayTransaction/cxf/WSWebpayService?wsdl') {
        foreach (self::$classmap as $key => $value) {
            if (!isset($options['classmap'][$key])) {
                $options['classmap'][$key] = $value;
            }
        }

        parent::__construct($wsdl, $options);
    }

    /**
     * @param getTransactionResult $parameters
     * @access public
     * @return getTransactionResultResponse
     */
    public function getTransactionResult(getTransactionResult $parameters) {
        return $this->__soapCall('getTransactionResult', array($parameters));
    }

    /**
     * @param acknowledgeTransaction $parameters
     * @access public
     * @return acknowledgeTransactionResponse
     */
    public function acknowledgeTransaction(acknowledgeTransaction $parameters) {
        return $this->__soapCall('acknowledgeTransaction', array($parameters));
    }

    /**
     * @param initTransaction $parameters
     * @access public
     * @return initTransactionResponse
     */
    public function initTransaction(initTransaction $parameters) {
        return $this->__soapCall('initTransaction', array($parameters));
    }

}

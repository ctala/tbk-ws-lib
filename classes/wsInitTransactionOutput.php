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

class wsInitTransactionOutput
{

    /**
     * @var string $token
     * @access public
     */
    public $token = null;

    /**
     * @var string $url
     * @access public
     */
    public $url = null;

    /**
     * @param string $token
     * @param string $url
     * @access public
     */
    public function __construct($token, $url)
    {
      $this->token = $token;
      $this->url = $url;
    }

}
